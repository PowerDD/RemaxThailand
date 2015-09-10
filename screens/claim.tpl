<div class="pinBox pinWell padding-10">
	<h1 class="page-header font-28 margin-top-10">เคลมสินค้า</h1>
	
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#tabbarcode">ตรวจสอบข้อมูลประกันสินค้า</a></li>
		<li><a data-toggle="tab" href="#tabclaimno">ตรวจสอบสถานะการเคลม</a></li>
	</ul>
	<div class="tab-content margin-bottom-15">
		<div id="tabbarcode" class="tab-pane fade in active">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<div class="col-sm-6 col-md-offset-3 margin-top-15">
						<input id="txt-barcode" type="text" class="form-control required" placeholder="Barcode">
					</div>
				</div>
				<div class="form-group">
					<div class="text-center">
						<span id="btn-barcode" class="btn btn-warning">ตรวจสอบ</span>
					</div>
				</div>
			</form>
		</div>
		<div id="tabclaimno" class="tab-pane fade">
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
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div id="tab-warranty-load" role="alert" class="alert alert-info text-center hidden margin-bottom-30"><i class="fa fa-spinner fa-pulse"></i> กรุณารอสักครู่ค่ะ</div>
		<div id="tab-warranty-not_exist" role="alert" class="alert alert-danger text-center hidden margin-bottom-30"> ไม่พบข้อมูลค่ะ										
		</div>
		<div id="tab-warranty-info" class="panel panel-success hidden">
			<div class="panel-heading">ผลการตรวจสอบ</div>
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
		<div id="dv-claim_info" class="panel panel-default hidden">
			<div class="panel-heading">รายละเอียด</div>
			<div class="panel-body">
				<div id="claim-Massage" role="alert" class="alert alert-success text-center"></div>
				<p id="claim-ClaimDate"></p>
				<p id="claim-ClaimNo"></p>
				<p id="claim-ClaimStatus"></p>
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
				</div>
			 </div>
		</div>
		<div id="alert-claim_info" role="alert" class="alert alert-danger text-center hidden margin-bottom-30"> กรุณาระบุอาการของสินค้าเคลม และแนบรูปภาพค่ะ										
		</div>
		<div id="dv-claim" class="hidden">
			<strong class="margin-top-15">รายละเอียดสินค้าเคลม</strong>
			<form id="claim_info">
				<div class="form-group">
					<label for="textarea" class="text-danger">กรุณาระบุอาการของสินค้าเคลม *</label>
					<textarea id="claim_description" type="text" class=" fixed form-control required" rows="5" value=""></textarea>				
					<label for="input" class="text-danger">กรุณาแนบภาพสินค้าเคลม *</label>
					<input id="file1" type="file" class="margin-bottom-10" placeholder="">
					<input id="file2" type="file" class="margin-bottom-10" placeholder="">
					<input id="file3" type="file" class="margin-bottom-10" placeholder="">
					<input id="file4" type="file" class="margin-bottom-10" placeholder="">
				</div>
			</form>

			<strong class="margin-top-15">ที่อยู่</strong>
			<form id="customer_address" class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-sm-3 control-label" for="txt-name">ชื่อ</label>
					<div class="col-sm-6">
					<input id="txt-firstname" class="form-control txt-input txt-require" type="text" value="" placeholder="ชื่อ"></input>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="txt-name">นามสกุล</label>
					<div class="col-sm-6">
					<input id="txt-lastname" class="form-control txt-input txt-require" type="text" value="" placeholder="นามสกุล"></input>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="txt-name">ชื่อผู้ติดต่อ</label>
					<div class="col-sm-6">
					<input id="txt-nickname" class="form-control txt-input" type="text" value="" placeholder="ชื่อผู้ติดต่อ"></input>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="txt-name">ที่อยู่</label>
					<div class="col-sm-6">
					<input id="txt-address" class="form-control txt-input txt-require" type="text" value="" placeholder="ที่อยู่"></input>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="txt-name">ที่อยู่ (ต่อ)</label>
					<div class="col-sm-6">
					<input id="txt-address2" class="form-control txt-input" type="text" value="" placeholder="ที่อยู่ (ต่อ)"></input>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="txt-name">จังหวัด</label>
					<div class="col-sm-6">
					<select id="province" class="form-control" data-selected=""></select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="txt-name">เขต/อำเภอ</label>
					<div class="col-sm-6">
					<select id="district" class="form-control" data-zipcode="" data-selected=""></select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="txt-name">แขวง/ตำบล</label>
					<div class="col-sm-6">
					<input id="txt-sub_district" class="form-control txt-input txt-require" type="text" value="" placeholder="แขวง/ตำบล"></input>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="txt-name">รหัสไปรษณีย์</label>
					<div class="col-sm-6">
					<input id="txt-zipcode" class="form-control txt-input txt-require" type="text" placeholder="รหัสไปรษณีย์"></input>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="txt-name">เบอร์โทรศัพท์</label>
					<div class="col-sm-6">
					<input id="txt-tel" class="form-control txt-input txt-require" type="text" placeholder="เบอร์โทรศัพท์"></input>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="txt-name">อีเมล</label>
					<div class="col-sm-6">
					<input id="txt-email" class="form-control txt-input" type="text" placeholder="อีเมล"></input>
					</div>
				</div>
				<div class="form-group text-center">
					<span id="btn-submit_claiminfo" class="btn btn-warning">ยืนยันข้อมูล</span>
				</div>
			</form>
		</div>
		<div id="dv-track" class="hidden">
			<div class="well">
				<p>สินค้าที่ส่งเคลมต้องแพ็คในบรรจุภัณฑ์ที่ปลอดภัยเพื่อป้องกันสินค้าเสียหายระหว่างการขนส่ง </p>
				<p>ส่งมาตามที่อยู่บริษัท ระบุหน้ากล่อง (แผนกเคลมสินค้า)</p>
				<p><b>Remax   Thailand</b></p>
				<p><b>200/38   ลภาวัน 17  ต.บางรักน้อย  อ.เมือง จ.นนทบุรี  11000</b></p>
				<p><b>โทร  081-828-8833 / 02- 1567199 </b></p>
				<p class="text-danger">* กรุณาแนบใบเคลมสินค้า หรือ ระบุเลขที่การเคลม พร้อมสินค้าเคลมที่ส่งมา</p>
			</div>

			<form id="customer_track" role="form" class="form-horizontal" >
				<div class="form-group">
					<div >
						<label for="txt-trackno" class="control-label">กรุณาระบุ Trank No./ EMS</label>
					</div>
					<div class="col-sm-6 margin-top-5">
						<input id="txt-trackno" type="text" class="form-control txt-input txt-require" placeholder="Trank No./ EMS" value=""  >
					</div>
				</div>
				<div class="form-group text-center">
					<span class="btn btn-warning" id="btn-submit_trackno">ยืนยันข้อมูล</span>
				</div>
			</form>
			
		</div>
		
		<div id="alert-trackno" role="alert" class="alert alert-success text-center hidden margin-bottom-30">ระบบได้รับข้อมูลของท่านแล้ว ท่านสามารถนำเลขที่การเคลมมาตรวจสอบสถานะได้อีกครั้งค่ะ</div>
		
		<div id="form-loading" class="row hidden">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-top-10">	    
				<div class="alert alert-info text-center margin-bottom-0">			
				<div class="progress margin-bottom-5">
					<div id="progress" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
						<span class="sr-only"></span>
					</div>
				</div>
				<i class="fa fa-cog fa-spin"></i> กำลังส่งข้อมูลเข้าระบบ กรุณารอสักครู่ค่ะ
				</div>
			</div>
		 </div>
	</div>
	</div>
	
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="row">  
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a id="warrantyZoom" href="javascript:void(0)">
					<img class="img-responsive no-radius" src="http://src.powerdd.com/img/web/88888888/warranty/condition-01.png">
				</a>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top-10 margin-bottom-10">
				<img class="img-responsive no-radius" align="left" src="https://lh3.googleusercontent.com/_zUj5OVFSaw5VbeEP_1wqkbm832zhzygZL4g78AXWBw=w150-no">
			</div>			
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top-10 margin-bottom-10">
				<a id="warranty_feq" href="javascript:void(0)">
					<img class="img-responsive no-radius" align="right" src="https://lh3.googleusercontent.com/jkg-DJmKZvHnodDnnt8mw0IiKExAKIpDU-2qNSJGOFI=w100-no">				
				</a>
			</div>			
		</div>
	</div>
	<div class="row"> 
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="feqModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<img class="img-responsive no-radius" src="https://lh3.googleusercontent.com/X2gqEZDkdIYN_zbiCyzH06EnAvWZs9p0OfZuUYks104=w1500-no">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="warrantyModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<div class="row">  
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a id="warranty_feq" href="http://src.powerdd.com/img/web/88888888/warranty/condition-01.png" target="_blank">
					<img class="img-responsive no-radius" src="http://src.powerdd.com/img/web/88888888/warranty/condition-01.png">
				</a>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top-10 margin-bottom-10">
				<img class="img-responsive no-radius" align="left" src="https://lh3.googleusercontent.com/_zUj5OVFSaw5VbeEP_1wqkbm832zhzygZL4g78AXWBw=w150-no">
			</div>			
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top-10 margin-bottom-10">
				<a id="warranty_feq" href="javascript:void(0)">
					<img class="img-responsive no-radius" align="right" src="https://lh3.googleusercontent.com/jkg-DJmKZvHnodDnnt8mw0IiKExAKIpDU-2qNSJGOFI=w100-no">				
				</a>
			</div>			
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>