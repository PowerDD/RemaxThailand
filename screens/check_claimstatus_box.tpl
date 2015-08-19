<div class="pinItem">
	<div class="pinBox pinWell margin-bottom-15">
		<img src="https://lh3.googleusercontent.com/aGaNDcqtW8zTqiReVyDQfO_tWy8WbBeCHNIUIjI_WcA=w864-h360-no" class="img-responsive">
		<div class="text-center">
			<div id="check_claimno" class="padding-15">
				<form id="f_claimStatus" class="form-horizontal">
					<input id="txt-claimno" type="text" placeholder="Barcode" class="form-control"/>
					<button id="btn-claimno" type="button" class="form-control btn btn-warning btn-block margin-top-5 margin-bottom-5"> ตรวจสอบ</button>
					<div id="claimno-not_exist" role="alert" class="alert alert-danger hidden margin-bottom-5 padding-top-5 padding-bottom-5"> ไม่พบข้อมูลสินค้าค่ะ</div>
					<div id="claim-info" role="alert" class="alert alert-success hidden margin-bottom-30 padding-top-5 padding-bottom-5"><b id="ProductName"></b>
						<p id="claimStatus"></p>
					</div>
					<div id="claimStatus-load" class="hidden"><i class="fa fa-spinner fa-pulse"></i> กรุณารอสักครู่ค่ะ</div>
					<a href="javascript:void(0)" class="back-claimStatus hidden margin-top-5 margin-bottom-5"><i class="fa fa-arrow-left"></i></a>
				</form>
			</div>
		</div>
	</div>
</div>