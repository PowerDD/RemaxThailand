<div class="pinItem">
	<div class="pinBox pinWell margin-bottom-15">
	<img src="https://lh3.googleusercontent.com/tKKtXahTaMj3hZFSuJXa4rWL_4DhNiFK4yyqoJeWT4s=w600-no" class="img-responsive">
		<div class="text-center">
			<div id="check_warranty" class="padding-10">
				<form id="f_warranty" class="form-horizontal margin-bottom-10">
					<form class="navbar-form navbar-left">
						<div class="input-group">
							<input id="txt-barcode_box" type="text" placeholder="Barcode" class="form-control">
								<span class="input-group-btn">
									<button id="btn-check_barcode_box" type="button" class="button-warranty btn btn-default"><i class="fa fa-search"></i></button>
								</span>
						</div>
					</form>
					<a id="btn-condition_warranty" class="button-warranty" href="{$system_url}/warranty_condition"> เงื่อนไขการรับประกัน </a>
					
					<div id="warranty-not_exist" role="alert" class="alert alert-warranty alert-danger hidden margin-bottom-30"> ไม่พบข้อมูลค่ะ</div>
					<div id="warranty-info" role="alert" class="alert alert-warranty alert-success hidden margin-bottom-30">
						<b id="ProductName"></b>
						<p id="ExpireDate"></p>
					</div>
					<div id="warranty-load" class="padding-15 hidden"><i class="fa fa-spinner fa-pulse"></i> กรุณารอสักครู่ค่ะ</div>
					<a href="javascript:void(0)" class="back-check_warranty hidden margin-top-5 margin-bottom-5"><i class="fa fa-arrow-left"></i></a>
				</form>
			</div>
		</div>
	</div>
</div>