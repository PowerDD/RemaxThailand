$(function() {
	$("#btn-barcode").click(function(){
		warrantyInfo(0);
	});

});
function warrantyInfo(i){
	if(i < 4 ){
		$.post('http://power-api-test.azurewebsites.net/warranty/info', {
			apiKey: 'PELI09WG-RNL0-3B0R-A2GD-1GRL6XZ2GVQ8',
			barcode: $.trim($('#txt-barcode').val()
		}, function(data){
			i++
			if (data.success) {
				if ( typeof data.result == '' || typeof data.result == 'undefined' || data.result.length == 0){
					warrantyInfo(i);
				}
				else{
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
					$('#tab-warranty-info').fadeIn();
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