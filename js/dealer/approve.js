$(function() {

	if ( $('#screen_action').val() == 'approved' ) {		
		$.post($('#api_url_new').val()+'/member/dealer/approved', {
			memberId: $('#member_id').val(),
		}, function(data){
			if ( data.success ) {
				$('#dv-loading').hide();
				$('#dv-success').show();
			}
		}, 'json');
	}
	else {
		$('#dv-loading').hide();
		$('#dv-success').show();
	}

});