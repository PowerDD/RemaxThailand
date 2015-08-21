var shop = '09A3C5B1-EBF7-443E-B620-48D3B648294E';
var apiKey = 'PELI09WG-RNL0-3B0R-A2GD-1GRL6XZ2GVQ8'

var fileCount = 0;
var fileProgress = {};
var fileName = '';
var allProgress = 0;

$(function() {
	loadProvince();
	$('#txt-tel').ForceNumericOnly();
	$('#txt-zipcode').ForceNumericOnly();
	$(document).on('change', '#province', function(){
		loadDistrict();
	});

	$(document).on('change', '#district', function(){
		loadZipCode();
	});
	$("#btn-barcode").click(function(){
		if($('#txt-barcode').val() == ''){
			$('#txt-barcode').focus();
		}else{
			$('#customer_address .txt-input').each(function(){
				$(this).val("") 
			});
			$('#claim_description').val('');
			$('#file1').val('');
			$('#file2').val('');
			$('#file3').val('');
			$('#file4').val('');
			warrantyInfo(0); 
			$("#tab-warranty-not_exist").hide();
			$("#tab-warranty-info").hide();
			$('#dv-claim').hide();
			$('#form-success').hide();
			$('#dv-claim_info').hide();
			$("#tab-warranty-load").slideDown();
		}
	});
	$("#txt-barcode").keyup(function(event){ 
		if(event.keyCode == 13){
			$("#btn-barcode").click();
		}
	});
	
	$("#form-input").submit(function(e){ // Disable Enter Key //
		return false;
	});
	
	$("#btn-submit_claiminfo").click(function(){
		submitClaim();
	});
});
function warrantyInfo(i){
	if(i < 4 ){
		$.post('http://power-api-test.azurewebsites.net/warranty/info', {
			apiKey: apiKey,
			barcode: $.trim($('#txt-barcode').val())
		}, function(data){
			i++
			if (data.success) {
				if ( typeof data.result == '' || typeof data.result == 'undefined' || data.result.length == 0){
					warrantyInfo(i);
				}
				else{
					$('#product').html(data.result.ProductID);
					$('#barcode').html(data.result.Barcode);
					$('#tab-ProductName').html('<b>ชื่อสินค้า : </b>'+data.result.ProductName);
					$('#tab-Barcode').html('<b>หมายเลข Barcode : </b>'+data.result.Barcode);
					$('#tab-CustomerName').html(data.result.CustomerName);
					var sellDateYearTH = parseInt(moment(data.result.SellDate).lang('th').add(3600*7, 'seconds').format('YYYY'))+543;
					var sellDateMM = moment(data.result.SellDate).locale('th').add(3600*7, 'seconds').format('DD MMMM'); 
					$('#tab-SellDate').html(sellDateMM+' '+sellDateYearTH);
					var expireDateYearTH = parseInt(moment(data.result.ExpireDate).lang('th').add(3600*7, 'seconds').format('YYYY'))+543;
					var expireDateMM = moment(data.result.ExpireDate).locale('th').add(3600*7, 'seconds').format('DD MMMM');
					if(data.result.Warranty == 0){
						$('#tab-warrantyStatus').html('<b><u>สินค้าไม่มีประกัน</u><b>');
						$('#tab-warrantyStatus').removeClass('text-success');
						$('#tab-warrantyStatus').removeClass('text-danger');
						$('#tab-warrantyStatus').addClass('text-warning');
						$('#tab-ExpireDate').html('');
						$('#tab-warranty-info').removeClass('panel-success');
						$('#tab-warranty-info').removeClass('panel-danger');
						$('#tab-warranty-info').addClass('panel-warning');
					}
					else if(data.result.Warranty > 0 && data.result.DaysRemaining <= 0){					
						$('#tab-warrantyStatus').html('<b><u>หมดประกัน</u><b>');
						$('#tab-warrantyStatus').removeClass('text-success');
						$('#tab-warrantyStatus').removeClass('text-warning');
						$('#tab-warrantyStatus').addClass('text-danger');
						$('#tab-ExpireDate').html(expireDateMM+' '+expireDateYearTH);
						$('#tab-warranty-info').removeClass('panel-success');
						$('#tab-warranty-info').removeClass('panel-warning');
						$('#tab-warranty-info').addClass('panel-danger');
					}
					else{
						$('#tab-warrantyStatus').html('<b><u>อยู่ในประกัน</u><b>');
						$('#tab-warrantyStatus').removeClass('text-danger');
						$('#tab-warrantyStatus').removeClass('text-warning');
						$('#tab-warrantyStatus').addClass('text-success');							
						$('#tab-ExpireDate').html(expireDateMM+' '+expireDateYearTH);
						$('#tab-warranty-info').removeClass('panel-danger');
						$('#tab-warranty-info').removeClass('panel-warning');
						$('#tab-warranty-info').addClass('panel-success');
						
						$('#dv-claim').slideDown();
					}
					$('#tab-warranty-info').slideDown();					
					$("#tab-warranty-load").slideUp();						
				}
				
			}else{
				$('#tab-warranty-not_exist').slideDown();
				$("#tab-warranty-load").slideUp();
			}
			
		},'json').fail( function(xhr, textStatus, errorThrown) { console.log(xhr.statusText); });
	}else if( i = 4){
			$('#tab-warranty-not_exist').slideDown();
			$("#tab-warranty-load").slideUp();
	}
};
function loadProvince(){
	$.post('http://power-api-test.azurewebsites.net/province/list', {
		apiKey: apiKey
	}, function(data){
			if (data.success) {
				var html = '';
				for( i=0; i<data.result.length; i++ ) {
					var result = data.result[i];
					html += '<option value="'+ result.ID +'"'+ 
						((result.Name == $('#province').attr('data-selected') || ($('#province').attr('data-selected') == '' && result.ID == '1')) ? ' selected' : '')
						+'>'+ result.Name +'</option>';
				}
				$('#province').html( html );
				loadDistrict()				
			}
	}, 'json').fail( function(xhr, textStatus, errorThrown) { console.log(xhr.statusText); });
};
function loadDistrict(){
	$.post('http://power-api-test.azurewebsites.net/province/district', {
		apiKey: apiKey,
		province: $('#province').val(),
	}, function(data){
			if (data.success) {
				var html = '';
				for( i=0; i<data.result.length; i++ ) {
					var result = data.result[i];
					html += '<option value="'+ result.ID +'" data-zipcode="'+ result.Zipcode +'"'+ 
						((result.ID == $('#district').attr('data-selected') && result.Zipcode == $('#district').attr('data-zipcode')) ? ' selected' : '')
						+'>'+ result.Name +'</option>';
				}
				$('#district').html( html );
				loadZipCode();
				
			}
	}, 'json').fail( function(xhr, textStatus, errorThrown) { console.log(xhr.statusText); });
};
function loadZipCode(){
	$('#txt-zipcode').val( $('#district :selected').attr('data-zipcode') );
};

function uploadFile(){
	window.scrollTo(0 ,0);
	$('#dv-claim').slideUp();
	$('#tab-warranty-info').slideUp();
	$('#form-loading').fadeIn();
	
	fileCount = 0;
	allProgress = 0;
	fileName = '';
	for(i=1; i<=4; i++) {
		fileProgress[i] = 0;
		if (typeof document.getElementById('file'+i).files[0] != 'undefined') {
			upload(document.getElementById('file'+i).files[0], i);
			fileCount++;
		}
	}

	if ( fileCount == 0 ) register();
};

function upload(file, index){	
	var fd = new FormData();
	fd.append("file", file);
	fd.append("index", index);
	fd.append("mobile", $.trim($('#txt-tel').val()));
	fd.append("tags", 'claim,'+$.trim($('#txt-firstname').val())+','+$.trim($('#txt-lastname').val())+','+$('#province :selected').html()+','+$.trim($('#txt-tel').val()) );
	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'https://powerupload.azurewebsites.net', true);

	xhr.upload.onprogress = function(e) {
		if (e.lengthComputable) {
			var percentComplete = (e.loaded / e.total) * 100;
			fileProgress[index] = percentComplete;
			allProgress = (fileProgress[1]+fileProgress[2]+fileProgress[3]+fileProgress[4])/fileCount;
			$('#progress').css('width', allProgress+'%').attr('aria-valuenow', allProgress);
		}
	};

	xhr.onload = function() {
		if (this.status == 200) {
			var json = JSON.parse(this.response);
			if ( json.success ) {
				fileName += json.filename + '|';
				if (allProgress == 100){
					addClaim();
				}
			}
		};
	};
	xhr.send(fd);
};

function submitClaim(){
	var isComplete = true;
	if ($('#claim_description').val() != '' &&  
		$('#file1').val() != '' || 
		$('#file2').val() != '' || 
		$('#file3').val() != '' ||
		$('#file4').val() != ''){
			$('#customer_address .txt-require').each(function(){
				$(this).val( $.trim($(this).val()) );
				if ( $(this).val() == '' ) {
					$(this).parents('.form-group').addClass('has-error');
					$(this).focus();
					isComplete = false;
					return false;
				}
				else {
					$(this).parents('.form-group').removeClass('has-error');
				}
			});

			if (isComplete) {
				uploadFile();
			}
	}else{
		$("#alert-claim_info").fadeIn();		
		setTimeout('$("#alert-claim_info").fadeOut()',3000);
		window.scrollTo(0, 0);
	}
};

function addClaim(){
	 
	$.post('http://power-api-test.azurewebsites.net/claim/add', {
		apiKey: apiKey,
		shop: shop,
		type: 'web',
		barcode: $('#barcode').html(),
		product: $('#product').html(), 
		description: $('#claim_description').val(),
		firstname: $('#txt-firstname').val(),
		lastname: $('#txt-lastname').val(), 
		nickname: $('#txt-nickname').val(),
		address: $('#txt-address').val(),
		address2: $('#txt-address2').val(),
		province: $('#province :selected').html(),
		district: $('#district :selected').html(),
		sub_district: $('#txt-sub_district').val(),
		zipcode: $('#txt-zipcode').val(),
		tel: $('#txt-tel').val(),
		email: $('#txt-email').val(), 
		images: fileName
	}, function(data){
			if (data.success) {
				$('#claim-Massage').html('กำลังดำเนินการตรวจสอบข้อมูล ท่านสามารถตรวจสอบสถานะการดำเนินการได้จากเลขที่การเคลม').addClass('text-success');
				$('#claim-ClaimNo').html('<b>Claim No. </b>'+ data.result.ClaimNo);
				$('#claim-ClaimStatus').html('<b>สถานะ : </b>'+ (data.result.Status == 'CI' ? ' <u>ตรวจสอบข้อมูล </u>' : '-'));
				$('#claim-ProductName').html($('#tab-ProductName').html());
				$('#claim-Barcode').html($('#tab-Barcode').html());

				$('#sum-name').html('คุณ '+$('#txt-firstname').val()+' '+$('#txt-lastname').val()+($('#txt-nickname').val() != '' ? ' ('+$('#txt-nickname').val()+')' : ''));
				$('#sum-address').html($('#txt-address').val())
				$('#sum-address2').html($('#txt-address2').val())
				$('#sum-location').html('แขวง/ตำบล'+$('#txt-sub_district').val()+' '+'เขต/อำเภอ'+$('#district :selected').html()+' '+'จังหวัด'+$('#province :selected').html()+' '+$('#txt-zipcode').val())
				if ( $('#txt-tel').val().length == 10 ) {
					var mobile = $('#txt-tel').val();
					$('#sum-tel').html( mobile.substr(0, 3)+'-'+mobile.substr(3, 4)+'-'+mobile.substr(7, 3) );
				}
				$('#sum-email').html($('#txt-email').val())
				
				var modal = $('#dv-claim_info');
				var file = $.parseJSON(fileName);
				if (typeof file != 'undefined') {
					for(i=0; i<=3; i++) {
						modal.find('.img'+i+' img').attr('src', 'https://res.cloudinary.com/powerdd/image/upload/v1438076463/0875665456-1.jpg');
						modal.find('.img'+i+' a').attr('href', '#');
						if (typeof file[i] != 'undefined' && file[i] != '') {
							modal.find('.img'+i).show().find('img').attr('src', file[i]);
							modal.find('.img'+i).show().find('a').attr('href', file[i]);
						}
						else {
							modal.find('.img'+i).hide();
						}
					}
				}
				else {
					for(i=0; i<=3; i++) modal.find('.img'+i).hide();
				}
				
				$('#form-loading').slideUp();
				$('#dv-claim_info').slideDown();
				
			}
	}, 'json').fail( function(xhr, textStatus, errorThrown) { console.log(xhr.statusText); });
};