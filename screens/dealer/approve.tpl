<input type="hidden" id="screen_action" value="{$screen_action}">
<input type="hidden" id="member_id" value="{$member_id}">

<div class="pinBox pinWell padding-10">
	<div class="row">
		<div id="dv-loading" class="col-sm-12">
			<div class="alert alert-info text-center" role="alert"><img src="https://src.24fin.com/images/gif/loader.gif"> กำลังตรวจสอบข้อมูล... กรุณารอสักครู่ค่ะ</div>
		</div>
		<div id="dv-success" class="col-sm-12 hidden">
			<div class="alert alert-info text-center" role="alert">{if isset($code)}อนุมัติ{else}ปฏิเสธ{/if}การสมัคร Dealer เรียบร้อยแล้วค่ะ
				{if isset($code)}<br><h3>รหัสส่วนลดคือ <b>{$code}</b></h3>{/if}
			</div>
		</div>
	</div>
</div>