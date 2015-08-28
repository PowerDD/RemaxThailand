var isCheck = false;

$(function() {
	
	$('.hidden').removeClass('hidden').hide();
	$('.img-popover').popover({ html: true, trigger: 'hover' });
	isCheck = true;

	if ( $('#txt-search_point').length != 0 && Cookies.get('mobile') != undefined ){
		$('#txt-search_point').val(Cookies.get('mobile'));
	}
	
	$(document).on('keydown', '#txt-search_point', function(e){
		var key = e.charCode || e.keyCode || 0;
		if (key == 13) {
			$('#txt-search_point').click();
		}
	});

	$(document).on('click', '#txt-search_point, #btn-search', function(e){
		if($('#txt-search_point').val().trim() != "") {
			getPoint(isCheck);
		}
	});

	$('#newsModal').modal();
	
	//--------------Check Warranty----------------//
	$(document).on('keydown', '#txt-barcode_box', function(e){
		var key = e.charCode || e.keyCode || 0;
		if (key == 13) {
			$('#btn-check_barcode_box').click();
		}
	});
	$('#check_warranty').submit(function(e){
		return false;
	});
	$('#btn-check_barcode_box').click(function(){
		if($('#txt-barcode_box').val() == ''){
			$('#txt-barcode_box').focus();
		}else{
			warrantyInfo(0);			
			$('#warranty-load').show();
			$('#txt-barcode_box').hide();
			$('.alert-warranty').hide();
			$('.button-warranty').hide();
		}
	});
	$(".back-check_warranty").click(function(){
		$(".alert-warranty").fadeOut();
		$("#txt-barcode_box").fadeIn();
		$(".button-warranty").fadeIn();		
		$(".back-check_warranty").hide();
	});
	//--------------Check Warranty----------------//
});

function alertTimeout(obj, wait){
    setTimeout(function(){
        obj.stop().fadeOut();
    }, wait);
}

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

jQuery.fn.ForceNumericOnly = function() {
	return this.each(function() {
		$(this).keydown(function(e) {
			if (/^[0-9]+$/.test($(this).val()) == false) {
				var text = $(this).val();
				$(this).val( text.substr(0, text.length-1) );
			}
			var key = e.charCode || e.keyCode || 0;
			return (
				(
					key == 13 || // Enter
					key == 8 || // Back Space
					key == 9 || // Tab
					(key >= 48 && key <= 57 && e.shiftKey== false) || // 0-9
					(key >= 96 && key <= 105) // 0-9 (Numpad)
				) && ( $(this).val().length == 0 || (/^[0-9]+$/.test($(this).val())) )
			);
		}),
		$(this).keyup(function(e) {
			if (/^[0-9]+$/.test($(this).val()) == false) {
				var text = $(this).val();
				$(this).val( text.substr(0, text.length-1) );
			}
		});
	});
};

function sleep(ms) {
    var unixtime_ms = new Date().getTime();
    while(new Date().getTime() < unixtime_ms + ms) {}
}


function getPoint(isCheck){
	if (isCheck) {
		isCheck = false;
		$.post($('#api_url_new').val()+'/member/point/history', {
			query: $('#txt-search_point').val().trim(),
		}, function(data){
				if ( data.success && data.correct ) {
					Cookies.set('mobile', $('#txt-search_point').val().trim(), { expires: 365 });
					$('#search-detail').removeClass("hidden").show();
					$('#dv-shop').html( data.info.shopName );
					$('#dv-name').html( data.info.name+((data.info.contactName != null && data.info.contactName != "") ? " ("+data.info.contactName+")" : "") );
					$('#dv-point').html( data.realPoint != null ? numberWithCommas(data.realPoint.toFixed(0)) : 0);
					$('#dv-tempPoint').html( data.tempPoint != null ? numberWithCommas(data.tempPoint.toFixed(0)) : 0 );
					$('#dv-avg').html( data.credit != null ? numberWithCommas((data.credit/3).toFixed(0)) : 0 );
					$('#dv-credit').html( data.credit != null ? numberWithCommas((data.credit/3*0.2).toFixed(0)) : 0 );
					var d = new Date();
					$('#dv-time').html( d.toLocaleString() );
					if ( data.tempPoint > 0 ) $('#dv-tempPoint').parent().show();
					else $('#dv-tempPoint').parent().hide();
					$('#dv-credit').parent().hide();
					$('#dv-avg').parent().hide();
					$('#no-data').hide();
				}
				else {
					$('#search-detail').hide();
					$('#no-data').show();
				}
				isCheck = true;
		}, 'json') 
		.fail(function() {
			$('#search-detail').hide();
			$('#no-data').show();
		});
	}
};
function warrantyInfo(i){
	if(i < 4 ){
		$.post('http://power-api-test.azurewebsites.net/warranty/info', {
			apiKey: 'PELI09WG-RNL0-3B0R-A2GD-1GRL6XZ2GVQ8',
			barcode: $.trim($('#txt-barcode_box').val())
		}, function(data){
			i++;
				if (data.success) {
					if ( typeof data.result == '' || typeof data.result == 'undefined' || data.result.length == 0){
						warrantyInfo(i);
					}else{				
						$('#ProductName').html(data.result.ProductName);
						var sellDateYearTH = parseInt(moment(data.result.SellDate).lang('th').add(3600*7, 'seconds').format('YYYY'))+543;
						var sellDateMM = moment(data.result.SellDate).locale('th').add(3600*7, 'seconds').format('DD MMMM'); 
						$('#tab-SellDate').html(sellDateMM+' '+sellDateYearTH);
						var expireDateYearTH = parseInt(moment(data.result.ExpireDate).lang('th').add(3600*7, 'seconds').format('YYYY'))+543;
						var expireDateMM = moment(data.result.ExpireDate).locale('th').add(3600*7, 'seconds').format('DD MMMM');
						if(data.result.Warranty == 0){
							$('#warrantyStatus').html('<b>สถานะ : <u>สินค้าไม่มีประกัน</u><b>');
							$('#ExpireDate').html('');
							$('#warranty-info').removeClass('alert-success');
							$('#warranty-info').removeClass('alert-danger');
							$('#warranty-info').addClass('alert-warning');
						}
						else if(data.result.Warranty > 0 && data.result.DaysRemaining <= 0){					
							$('#ExpireDate').html('<b>วันที่หมดประกัน : </b>'+expireDateMM+' '+expireDateYearTH);
							$('#warranty-info').removeClass('alert-success');
							$('#warranty-info').removeClass('alert-warning');
							$('#warranty-info').addClass('alert-danger');
						}
						else{						
							$('#ExpireDate').html('<b>วันที่หมดประกัน : </b>'+expireDateMM+' '+expireDateYearTH);
							$('#warranty-info').removeClass('alert-danger');
							$('#warranty-info').removeClass('alert-warning');
							$('#warranty-info').addClass('alert-success');
						}							
						$('#warranty-info').fadeIn();
						$("#warranty-load").hide();
						$(".back-check_warranty").show();	
					}						
				}else{
					$('#warranty-not_exist').show();
					$("#warranty-load").hide();
					$(".back-check_warranty").show();			
				}
			
		},'json').fail( function(xhr, textStatus, errorThrown) { console.log(xhr.statusText); });
	}else if( i = 4){
		$('#warranty-not_exist').show();
		$("#warranty-load").hide();
		$(".back-check_warranty").show();		
	}
};