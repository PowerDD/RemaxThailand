<div class="pinItem">
	<div class="pinBox pinWell margin-bottom-15">
	<img src="https://lh3.googleusercontent.com/2HKvk9TTq4IE5P6GMVbUKbklXXk_0OHKg3mzP4k2bqo=w864-h360-no" class="img-responsive">
		<div class="text-center">
			<div id="check_warranty" class="padding-10">
				<form id="f_warranty" class="form-horizontal">
					<form class="navbar-form navbar-left">
						<div class="input-group">
							<input id="txt-barcode_box" type="text" placeholder="Barcode" class="form-control">
								<span class="input-group-btn">
									<button id="btn-check_barcode_box" type="button" class="button-warranty btn btn-warning"><i class="fa fa-search"></i></button>
								</span>
						</div>
					</form>
					<a id="btn-condition_warranty" class="button-warranty btn btn-danger" href="{$system_url}/claim"> เงื่อนไขการรับประกันสินค้า </a>
					
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