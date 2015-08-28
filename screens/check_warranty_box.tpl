<div class="pinItem">
	<div class="pinBox pinWell margin-bottom-15">
		<h3>ตรวจสอบประกันสินค้า</h3>
		<div class="row">
			<div class="col-md-3">
				<img src="https://cdn4.iconfinder.com/data/icons/Primo_Icons/PNG/128x128/barcode.png" class="img-responsive">
			</div>
			<div class="col-md-9">
				<div class="text-center">
					<div id="check_warranty" class="padding-15">
						<form id="f_warranty" class="form-horizontal">
							<input id="txt-barcode_box" type="text" placeholder="Barcode" class="form-control"/>
							<button id="btn-check_barcode_box" type="button" class="button button-warranty form-control btn btn-warning btn-block margin-top-5 margin-bottom-5"> ตรวจสอบ</button>
							<a id="btn-condition_warranty" class="button-warranty form-control btn btn-primary btn-block margin-top-5 margin-bottom-5" type="button" href="{$system_url}/claim"> เงื่อนไขการรับประกัน</a>
							
							<div id="warranty-not_exist" role="alert" class="alert alert-warranty alert-danger hidden margin-bottom-30"> ไม่พบข้อมูลค่ะ</div>
							<div id="warranty-info" role="alert" class="alert alert-warranty alert-success hidden margin-bottom-30">
								<b id="ProductName"></b>
								<p id="ExpireDate"></p>
							</div>
							<div id="warranty-load" class="hidden"><i class="fa fa-spinner fa-pulse"></i> กรุณารอสักครู่ค่ะ</div>
							<a href="javascript:void(0)" class="back-check_warranty hidden margin-top-5 margin-bottom-5"><i class="fa fa-arrow-left"></i></a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

