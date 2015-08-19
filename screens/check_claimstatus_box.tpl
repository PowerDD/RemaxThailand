<div class="pinItem">
	<div class="pinBox pinWell margin-bottom-15">
		<a href="{$system_url}/product/category/new">
			<img src="https://cdn24fin.blob.core.windows.net/img/products/1/D-New Arrivals/1.jpg"  class="img-responsive">
		</a>
		<div id="check_warranty">
			<form id="f_warranty" class="form-horizontal">
				<input id="txt-barcode" type="text" placeholder="Barcode" class="form-control"/>
				<button id="btn-check_barcode" type="button" class="form-control btn btn-warning btn-block margin-top-5 margin-bottom-5"> ตรวจสอบ</button>
				<div id="warranty-not_exist" role="alert" class="alert alert-danger hidden margin-bottom-5 padding-top-5 padding-bottom-5"> ไม่พบข้อมูลสินค้าค่ะ</div>
				<div id="warranty-info" role="alert" class="alert alert-success hidden margin-bottom-30 padding-top-5 padding-bottom-5"><b id="ProductName"></b>
				  <p id="warrantyStatus"></p>
				  <p id="ExpireDate"></p>
				</div>
				<div id="warranty-load" class="hidden"><i class="fa fa-spinner fa-pulse"></i> กรุณารอสักครู่ค่ะ</div>
				<a href="javascript:void(0)" class="back-condition_warranty hidden margin-top-5 margin-bottom-5"><i class="fa fa-arrow-left"></i></a>
				<a href="javascript:void(0)" class="back-check_warranty hidden margin-top-5 margin-bottom-5"><i class="fa fa-arrow-left"></i></a>
			</form>
		</div>
	</div>
</div>