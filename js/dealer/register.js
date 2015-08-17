var checkCount;
var checkPass;

$(function() {

	$('#txt-mobile').ForceNumericOnly();
	$('#txt-zipcode').ForceNumericOnly();
	$('#txt-zipcode').val( $('#district :selected').attr('data-zip') );

	if ( $('#screen_action').val() == 'upload' ) {
		SendApproveEmail();
	}

	$(document).on('click', '#btn-previous', function(){
		var step = parseInt($(this).attr('data-step'));
		checkStep(step, step-1);
	});

	$(document).on('click', '#btn-next', function(){
		var step = parseInt($(this).attr('data-step'));
		checkRequired(step);
		if ( step == 1 ) setTimeout(checkPassStep, 1000);
		else checkStep(step, step+1);
	});

	$(document).on('change', '#cb-other', function(){
		if ( $(this).is(':checked') ) {
			$('#txt-other').attr('disabled', '').removeAttr('disabled').focus();
		}
		else {
			$('#txt-other').attr('disabled', 'disabled');
		}
	});

	$(document).on('click', '.btn-browse', function(){
		$('#file'+$(this).data('name')).click();
	});

	$(document).on('change', '.file', function(){		
		if ( $(this).val() === '' || $(this).val() === undefined ) {
			$(this).parent().find('input').val('');
		}
		else {
			$(this).parent().find('input').val( $(this).val() );
		}
	});

	$(document).on('click', '#btn-register', function(){

		$('.has-error').removeClass('has-error');
		$('.help-inline').hide();

		if ( $('#screen_action').val() == 'register') {
			$('input.required').parent().removeClass('has-error');
			$('input.required').each(function(){
				$(this).val($.trim($(this).val()));
				if ( $(this).val() == '' ) {
					$(this).focus().parent().addClass('has-error');
					return false;
				}
				else {
					if ( $(this).attr('id') == 'txt-email') {
						if (!validateEmail($(this).val())) {
							$(this).focus().parent().addClass('has-error');
							return false;
						}
					}
					else if ( $(this).attr('id') == 'txt-mobile') {
						if ($(this).val().length < 9) {
							$(this).focus().parent().addClass('has-error');
							return false;
						}
					}
				}
			});
			if ( $('.has-error').length == 0 ) {
				checkCount = 0;
				checkPass = true;
				checkDataExist();
			}
		}
		else if ( $('#screen_action').val() == 'information') {
			if ( !$('#cb-facebook').is(':checked') && !$('#cb-line').is(':checked') && !$('#cb-email').is(':checked') ) {
				$('#cb-line').focus();
				$('.question3').addClass('color-red');
			}
			else {
				$('.question3').removeClass('color-red');
			}
			if ( !$('#cb-wholesale').is(':checked') && !$('#cb-retail').is(':checked') && !$('#cb-online').is(':checked') ) {
				$('#cb-wholesale').focus();
				$('.question2').addClass('color-red');
			}
			else {
				$('.question2').removeClass('color-red');
			}

			if ( !$('.question2').hasClass('color-red') && !$('.question3').hasClass('color-red') ) {
				SendInfo();
			}
		}

	});

	$(document).on('change', '#province', function(){
		if ( $('#screen_action').val() == 'information') {
			getDistrict();
		}
	});

	$(document).on('change', '#district', function(){
		$('#txt-zipcode').val( $('#district :selected').attr('data-zip') );
	});

	$(document).on('change', '#txt-username', function(){
		$(this).attr('data-checked', '0');
	});

});

function checkPassStep() {
	var step = parseInt($('#btn-next').attr('data-step'));
	//$('#txt-username').attr('data-checked', '1').attr('data-exist', '0')
	if ($('#txt-username').attr('data-checked') == '1'){
		if ($('#txt-username').attr('data-exist') == '1') {
			$('#txt-username').parents('.form-group').addClass('has-error').find('.help-inline').show();
		}
		checkStep(step, step+1);
	}
}

function checkRequired(step) {
	$('.has-error').removeClass('has-error');
	$('.help-inline').hide();
	$('input.required').parent().removeClass('has-error');
	$('.step-'+step+' input.required').each(function(){
		$(this).val($.trim($(this).val()));
		if ( $(this).val() == '' ) {
			$(this).focus().parent().addClass('has-error');
			return false;
		}
		else {
			if ( $(this).attr('id') == 'txt-password2') {
				if ($(this).val() != $('#txt-password').val()) {
					$(this).parents('.form-group').addClass('has-error').find('.help-inline').show();
					return false;
				}
			}
			else if ( $(this).attr('id') == 'txt-zipcode') {
				if ($(this).val().length != 5) {
					$(this).focus().parent().addClass('has-error');
					return false;
				}
			}
			else if ( $(this).attr('id') == 'txt-username' && $(this).attr('data-checked') == '0') {
				$('#txt-username').attr('data-checked', '0');
				$.post($('#api_url_new').val()+'/member/exist/username', {
					username: $('#txt-username').val(),
				}, function(data){
						$('#txt-username').attr('data-checked', '1');
						if ( data.success ) {
							if ( data.exist ) {
								$('#txt-username').attr('data-checked', '1').attr('data-exist', '1');
								return false;
							}
							else {								
								$('#txt-username').attr('data-checked', '1').attr('data-exist', '0');
							}
						}
				}, 'json');
			}
		}
	});
}

function checkStep(current, step) {
	if ( $('.has-error').length == 0 ) {
		
		$('.step-'+current).hide();
		$('.step-'+step).show();

		$('#btn-previous').attr('data-step', step);
		$('#btn-next').attr('data-step', step);
		if ( step < 2 )		$('#btn-previous').hide();
		else					$('#btn-previous').show();
		if ( step == 4 ) {
			$('#btn-next').hide();
			$('#btn-register').show();
		}
		else {
			$('#btn-next').show();
			$('#btn-register').hide();
		}
	}
	else {
		$('.has-error:eq(0) input').focus();
	}
}

function getDistrict(){
	$.post($('#api_url_new').val()+'/master/thailand/district', {
		provinceCode: $('#province :selected').val(),
	}, function(data){
			if ( data.success ) {
				$('#district').html('');
				var html = '';
				for(i=0; i<data.result.length; i++){
					var result = data.result[i];
					html += '<option value="'+result.id+'" data-zip="'+result.zipCode+'"'+((result.id == '1') ? ' selected' : '')+'>'+result.name+'</option>';
				}
				$('#district').html(html);
				$('#txt-zipcode').val( $('#district :selected').attr('data-zip') );
			}
	}, 'json');
}

function checkDataExist(){
	$('.has-error').removeClass('has-error');
	$('.help-inline').hide();

	$.post($('#api_url_new').val()+'/member/exist/email', {
		email: $.trim($('#txt-email').val()),
	}, function(data){
			if ( data.success ) {
				if ( data.exist ) {
					checkPass = false;
					$('#txt-email').parents('.form-group').addClass('has-error').find('.help-inline').show();
				}
				checkCount++;
				if (checkCount == 3) Register();
			}
	}, 'json');
	
	$.post($('#api_url_new').val()+'/member/exist/mobile', {
		mobile: $.trim($('#txt-mobile').val()),
	}, function(data){
			if ( data.success ) {
				if ( data.exist ) {
					checkPass = false;
					$('#txt-mobile').parents('.form-group').addClass('has-error').find('.help-inline').show();
				}
				checkCount++;
				if (checkCount == 3) Register();
			}
	}, 'json');
	
	if ( $.trim($('#txt-line').val()) != '' ) {
		$.post($('#api_url_new').val()+'/member/exist/lineId', {
			lineId: $.trim($('#txt-line').val()),
		}, function(data){
				if ( data.success ) {
					if ( data.exist ) {
						checkPass = false;
						$('#txt-line').parents('.form-group').addClass('has-error').find('.help-inline').show();
					}
					checkCount++;
					if (checkCount == 3) Register();
				}
		}, 'json');
	}
	else {
		checkCount++;
		if (checkCount == 3) Register();
	}

}

function Register() {
	if ( checkPass ) {
		$('#dv-loading').show();
		$('.dv-input').hide();
		var sp = $.trim($('#txt-name').val()).split(' ');
		$.post($('#api_url_new').val()+'/member/dealer/register', {
			firstname: sp[0],
			lastname: (sp[1] != undefined) ? sp[1]+((sp[2] != undefined) ? ' '+sp[2] : '') : '',
			email: $.trim($('#txt-email').val()),
			mobile: $.trim($('#txt-mobile').val()),
			lineId: $.trim($('#txt-line').val()),
			provinceCode: $('#province :selected').val(),
			referer: $('#referer').val(),
		}, function(data){
			if ( data.success ) {
				$('#b_email').html( $.trim($('#txt-email').val()) );
				$('#dv-loading').hide();
				$('#dv-success').show();
			}
		}, 'json');
	}
}

function SendInfo() {
	$('.dv-button, .step-4').hide();
	$('#dv-loading').show();
	//$('#fm-register').submit();

	$.post($('#api_url_new').val()+'/member/dealer/add_info', {
		id: $('#member_ref').val(),
		username: $.trim($('#txt-username').val()),
		password: $.trim($('#txt-password').val()),
		shopName: $.trim($('#txt-shop').val()),
		address: $.trim($('#txt-address').val()),
		address2: $.trim($('#txt-address2').val()),
		provinceCode: $('#province :selected').val(),
		districtCode: $('#district :selected').val(),
		subDistrict: $.trim($('#txt-sub_district').val()),
		zipcode: $.trim($('#txt-zipcode').val()),
		question1: $('#exp-y').is(':checked') ? 1 : 0,
		question2: ($('#cb-wholesale').is(':checked') ? ','+$('#cb-wholesale').val() : '') + ($('#cb-retail').is(':checked') ? ','+$('#cb-retail').val() : '') + ($('#cb-online').is(':checked') ? ','+$('#cb-online').val() : '') ,
		question3: ($('#cb-line').is(':checked') ? ','+$('#cb-line').val() : '') + ($('#cb-email').is(':checked') ? ','+$('#cb-email').val() : '') + ($('#cb-facebook').is(':checked') ? ','+$('#cb-facebook').val() : '') ,
	}, function(data){
		if ( data.success ) {
			$('#member_id').val( data.id );
			$('#fm-register').submit();
		}
	}, 'json');
}

function SendApproveEmail() {
	var sp = $('#image_list').val().split('|');
	var img = '';
	for( i=0; i<sp.length; i++ ){
		if (sp[i] != '') {
			img += 'http://www.remaxthailand.co.th/images/'+sp[i]+',';
		}
	}
	$.post($('#api_url_new').val()+'/member/dealer/approve_email', {
		memberId: $('#member_id').val(),
		imageList: img,
	}, function(data){
		if ( data.success ) {
			$('#dv-loading').hide();
			$('#dv-success').show();
		}
	}, 'json');
}