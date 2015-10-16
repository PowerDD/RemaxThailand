<div class="pinBox pinWell padding-10">
	<h1 class="page-header font-28 margin-top-10">ตรวจสอบสถานะการเคลม</h1>
		<div id="dv-claimno">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<div class="col-sm-6 col-md-offset-3 margin-top-15">
						<input id="txt-claimno" type="text" class="form-control required" placeholder="เลขที่เคลม">
					</div> 
				</div>
				<div class="form-group">
					<div class="text-center">
						<span id="btn-claimno" class="btn btn-warning">ตรวจสอบ</span>
					</div>
				</div>
			</form>
		</div>

		<div id="alert-load" role="alert" class="alert alert-info text-center hidden margin-bottom-30"><i class="fa fa-spinner fa-pulse"></i> กรุณารอสักครู่ค่ะ
		</div>
		<div id="alert-not_exist" role="alert" class="alert alert-danger text-center hidden margin-bottom-30"> ไม่พบข้อมูลค่ะ										
		</div>
		
		<div id="dv-claim_info" class="panel panel-default hidden">
			<div class="panel-heading">รายละเอียด</div>
			<div class="panel-body">
				<p id="claim-ClaimDate" class="text-right"></p>
				<p id="claim-ClaimNo"></p>
				<p id="claim-ClaimStatus"></p>
				<p id="claim-RecieveDate"></p>
				<p id="claim-SentDate"></p>
				<p id="claim-ProductName"></p>
				<p id="claim-Barcode"></p>
				<p id="claim-Description"></p>
				<div class="row">
					 <div class="col-xs-3 col-md-3 img0">
						<a target="_blank" href="">
						<img src="" class="img-responsive img-rounded">
						</a>
					</div>
					<div class="col-xs-3 col-md-3 img1">
						<a target="_blank" href="">
						<img src="" class="img-responsive img-rounded">
						</a>
					</div>
					<div class="col-xs-3 col-md-3 img2">
						<a target="_blank" href="">
						<img src="" class="img-responsive img-rounded">
						</a>
					</div>
					<div class="col-xs-3 col-md-3 img3">
						<a target="_blank" href="">
						<img src="" class="img-responsive img-rounded">
						</a>
					</div>
				</div>
				<p class="margin-top-15"><strong>ที่อยู่</strong></p>
				<div class="margin-left-5">
					<p id="sum-name"></p>
					<p id="sum-address"></p>
					<p id="sum-address2"></p>
					<p id="sum-location"></p>
					<p id="sum-tel"></p>
					<p id="sum-email"></p>
					<p id="sum-line"></p>
				</div>
			 </div>
		</div>
</div>