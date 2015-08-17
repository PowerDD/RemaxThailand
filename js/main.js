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
}