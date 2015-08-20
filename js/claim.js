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
			warrantyInfo(0); 
			$("#tab-warranty-not_exist").hide();
			$("#tab-warranty-info").hide();
			$('#dv-claim_info').hide();
			$("#tab-warranty-load").show();
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
			apiKey: 'PELI09WG-RNL0-3B0R-A2GD-1GRL6XZ2GVQ8',
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
					}
					$('#tab-warranty-info').show();
					$('#dv-claim_info').show();
					$("#tab-warranty-load").hide();						
				}
				
			}else{
				$('#tab-warranty-not_exist').show();
				$("#tab-warranty-load").hide();
			}
			
		},'json').fail( function(xhr, textStatus, errorThrown) { console.log(xhr.statusText); });
	}else if( i = 4){
			$('#tab-warranty-not_exist').show();
			$("#tab-warranty-load").hide();
	}
};
function loadProvince(){
	$.post('http://power-api-test.azurewebsites.net/province/list', {
		apiKey: 'PELI09WG-RNL0-3B0R-A2GD-1GRL6XZ2GVQ8'
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
		apiKey: 'PELI09WG-RNL0-3B0R-A2GD-1GRL6XZ2GVQ8',
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
				alert('It Okey');
			}
	}else{
		$("#alert-claim_info").fadeIn();		
		setTimeout('$("#alert-claim_info").fadeOut()',3000);
		$("#alert-claim_info").focus();
	}
};