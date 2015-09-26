<div class="pinBox pinWell padding-10">
	<div class="row">
	    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<img class="img-responsive" src="http://src.powerdd.com/img/web/88888888/warranty/condition-01.png">
	    </div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top-10 margin-bottom-10">
			<img class="img-responsive no-radius" align="left" src="https://lh3.googleusercontent.com/_zUj5OVFSaw5VbeEP_1wqkbm832zhzygZL4g78AXWBw=w250-no">
	    </div> 
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top-10 margin-bottom-10">
			<a id="warranty_feq" href="javascript:void(0)">
				<img class="img-responsive no-radius" id="btn-claim" align="right" src="http://src.powerdd.com/img/web/88888888/warranty/claimclick.png">
			</a>
	    </div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="claimModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">* กรุณากรอกเลขบาร์โค้ด  Remax Thailand จากบรรจุภัณฑ์สินค้า</h4>
			</div>
			<div class="modal-body">			
				<div id="tabbarcode">
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<div class="col-sm-6 col-md-offset-3 margin-top-15">						
								<input id="txt-barcode" type="text" class="form-control required" maxlength="16" placeholder="Barcode">
							</div>
						</div>
						<div class="form-group">
							<div class="text-center">
								<span id="btn-barcode" class="btn btn-warning">ตรวจสอบ</span>
							</div>
						</div>
					</form>
				</div>
				
				<div id="tab-warranty-load" role="alert" class="alert alert-info text-center hidden margin-bottom-30"><i class="fa fa-spinner fa-pulse"></i> กรุณารอสักครู่ค่ะ
				</div>
				<div id="tab-warranty-not_exist" role="alert" class="alert alert-danger text-center hidden margin-bottom-30"> ไม่พบข้อมูลค่ะ										
				</div>
				<div id="tab-warranty-info" class="panel panel-success hidden">
					<div class="panel-heading">ผลการตรวจสอบ
					</div>
					<div class="panel-body">
						<p id="product" class="hidden"></p>
						<p id="barcode" class="hidden"></p>
						<p id="lastShop" class="hidden"></p>
						<p id="tab-ProductName"></p>
						<p id="tab-Barcode"></p>
						<div class="col-md-12 col-sm-12">
							<div class="box-body table-responsive no-padding">
								<table class="table table-bordered">
									<tr class="active">
										<th>สถานะ</th>
										<th>วันที่ซื้อ</th>
										<th>วันที่หมดประกัน</th>
									</tr>
									<tr>
										<td id="tab-warrantyStatus"></td>
										<td id="tab-SellDate"></td>
										<td id="tab-ExpireDate"></td>
									</tr>
								</table>
							</div>
						</div>
					 </div>
				</div>
			</div>      
		</div>
    </div>
</div>
