$(function() {

	$('#barcode').focus();

	GenerateChart();
	
	$(document).on('keydown', '#barcode', function(e){
		var key = e.charCode || e.keyCode || 0;
		if (key == 13 && $('#barcode').val() != '' ) {
			$('#btn-add_barcode').click();
		}
	});

	$(document).on('click', '#btn-add_barcode', function(){
		$('.barcode').html( $.trim($('#barcode').val()) );		
		checkBarcode();
	});
	
});

function checkBarcode(){	
	$.post($('#api_url').val()+'remax/barcode/exist', {
		apiKey: $('#api_key').val(),
		barcode: $.trim($('#barcode').val()),
		memberId: $('#member_id').val(),
	}, function(data){
		if (data.success) {
			$('#barcode').val('');

			var obj;
			if (!data.exist)					obj = $('#dv-alert_no_barcode');
			else if (data.exist) {
				if (data.isSold)			obj = $('#dv-alert_exist');
				else {
					obj = $('#dv-alert_success');
					$('#pinMoney').show().find('img').attr('src', '../img/member/income.php?p='+data.money);
					if ( data.point != null ) {
						$('#pinPoint').show().find('img').attr('src', '../img/member/point.php?p='+data.point);
					}
					else {
						$('#pinPoint').hide();
					}
					$('#sp-cat_name').html( $('#dv-cat_2-'+data.category+' a').html() );
					var count = parseInt( $('#dv-cat_2-'+data.category+' .dv-cat_count').attr( 'data-count' ) ) + 1;
					$('#dv-cat_2-'+data.category+' .dv-cat_count').attr( 'data-count', count );
					$('#dv-cat_2-'+data.category).show();
					$('.category_sum').html( numberWithCommas((parseInt($('.category_sum').html())+1).toFixed(0)) );
					GenerateChart();
				}
			}
			
			obj.fadeIn();
			alertTimeout(obj, 2000);

		}

		$('#barcode').focus();

	}, 'json');
}

function GenerateChart() {
	var val = '';
	$('.dv-cat_count').each(function(){
		val += $(this).attr('data-count')+',';
		$(this).html( numberWithCommas(parseInt($(this).attr('data-count')).toFixed(0)) );
	});
	var color = $('#img-chart').attr('data-color');
	$('#img-chart').attr('src', 'https://chart.googleapis.com/chart?cht=p3&chd=t:' + val.substr(0, val.length-1) + '&chs=400x250&chco=' + color.substr(0, color.length-1));
}