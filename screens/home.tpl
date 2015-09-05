<div class="row pinRow">

	<div class="pinItem">
    <div class="pinBox pinWell margin-bottom-15">
      <a href="{$system_url}/register">
        <img src="https://lh3.googleusercontent.com/e5xRTLmKd2D41p02dr6NWJUF1KPBi_ZrFF1zwG_UpJnG2s1nHs2eaQI0A1_ci64-g1ljJqNE2KZj7roESzHhCmwxI0n4zysRM8L1x5wuWs70_Yje1qmGDPs8_Cap-ft6Ma5c2lMd-K1iUkyzdp3Kq6WS497LxBnnDGq1Cx7vzhqCDin-pGfiyM0uKKItC0-9486zkuFt0Q41MgLUTNzjiyzG4N5I2s4rp4zBoMHZahyHfVxxhxYLpB20OpJQ6HPbVVnfxZXBYKGqGnYCSRuL_g6w4CU4Bsw7_niGlfUXdS-sS_Qb0O04LpWKe6MY5UO2oJF_nJzExiMx7PKMxJyoTPjFmMfWdy2ehCy0B4aN59otcb-nTIFa49GpAJhZc4hGSqiEz_MNjiCsPSwXHCDiI1_HWTsv3aAlHmcp2FT8dYNA5TMV-TAU3lOWDU0Y2RB_UkwkJ4fohs9115fVpXcMyZvbe4uOwaDMWkboBExbifbOYe-Dz41jnVhfbBkPs-b6A_-MVPfhm0S8F1gz3e8kqaY=w600-no"  class="img-responsive">
      </a>
      <div class="message text-center">สมัครตัวแทนจำหน่าย</div>
    </div>
  </div>

	<div class="pinItem">
		<div class="pinBox pinWell margin-bottom-15">
			<img src="https://cdn24fin.blob.core.windows.net/img/products/1/D-Reward point/1.jpg" class="img-responsive pointer"  data-toggle="modal" data-target="#dv-check_point">
			<div class="message text-center">ตรวจสอบคะแนนสะสม</div>
		</div>
	</div>

	<div class="pinItem">
		<div class="pinBox pinWell margin-bottom-15">
			<a href="{$system_url}/product/category/new">
				<img src="https://cdn24fin.blob.core.windows.net/img/products/1/D-New Arrivals/1.jpg"  class="img-responsive">
			</a>
			<div class="message text-center">สินค้ามาใหม่</div>
		</div>
	</div>

	{section name=idx loop=$category.id}
		{if $category.id[idx] != '2-7'}
			<div class="pinItem">
				<div class="pinBox pinWell margin-bottom-15">
					<a href="{$system_url}/product/category/{$category.url[idx]}">
						<img src="https://cdn24fin.blob.core.windows.net/img/products/1/D-{$category.name[idx]|replace:'-':'/'|replace:'/':''|replace:'  ':' '}/1_l.jpg" class="img-responsive">
					</a>
					<div class="message text-center margin-top-5">{$category.name[idx]}</div>
				</div>
			</div>
		{/if}
	{/section}

</div>

<div class="modal fade" id="dv-check_point" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span id="sp-msg_add">ตรวจสอบคะแนนสะสม</h4>
      </div>
      <div class="modal-body">
	<input type="text" class="form-control txt-input col-sm-12" id="txt-search_point" placeholder="เบอร์มือถือ/รหัสสมาชิก/รหัสบัตรสมาชิก" value="">
	<div class="clearfix"></div>
	<div id="search-detail" class="margin-top-5 hidden">
		<div class="text-center">
			<div id="dv-shop" class="font-bold"></div>
			<div id="dv-name" class="font-bold"></div>
			<div class="margin-top-10">คะแนนสะสม : <span id="dv-point" class="font-bold"></span> แต้ม</div>
			<div>ค้างชำระ : <span id="dv-tempPoint" class="font-bold"></span> บาท</div>
			<div>ยอดเฉลี่ยต่อเดือน : <span id="dv-avg" class="font-bold"></span> บาท</div>
			<div>เครดิต : <span id="dv-credit" class="font-bold"></span> บาท</div>
			<div>ข้อมูลเมื่อวันที่ : <span id="dv-time" class="font-bold"></span></div>
		</div>
	</div>
	<div id="no-data" class="margin-top-5 hidden">
		<div class="text-center text-red">
			ไม่มีข้อมูลที่ต้องการค้นหาค่ะ
		</div>
	</div>
      </div>
	<div class="modal-footer margin-top-5">
		<button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
		<button id="btn-search" type="button" class="btn btn-warning">ตรวจสอบ</button>
	</div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="newsModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-ิbody">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<img class="img-responsive no-radius" src="https://lh3.googleusercontent.com/6aaedhZzAlcwqryAWHKR2a_45lMFGEDJ3ppYoLlgL6k=w1500-no">
	<img class="img-responsive no-radius" src="https://lh3.googleusercontent.com/FSmXAMywZRza7w9GwIy4rwJpwIjsfGZViHPVTVayoN0=w1500-no">
	<img class="img-responsive no-radius" src="https://lh3.googleusercontent.com/gTsFwWfjGKbvNBnEUzRWIvWEMujhpZkE35D3hqMLNl8=w1500-no">
	<img class="img-responsive no-radius" src="https://lh3.googleusercontent.com/vcAEkL-EDwmeCuZxDaOgUruVbQtDI_gV_3G9K-g6bpM=w1500-no">
	<img class="img-responsive no-radius" src="https://lh3.googleusercontent.com/JZ7TTgN65CchcqUv8TDYlMA8fl4JuacSZdaqCfv884k=w1500-no">
	<img class="img-responsive no-radius" src="https://lh3.googleusercontent.com/N_YmKolIZqXYCKmuJhUxS-CNzRrPpnmKa2O2FrNqxQ4=w1500-no">
	<img class="img-responsive no-radius" src="https://lh3.googleusercontent.com/pVBCQ31_o1-3TPVv-iL0X0AGVkySnLlee_n2WRmYilI=w1500-no">
	<img class="img-responsive no-radius" src="https://lh3.googleusercontent.com/wr-0e-NG39HYedbiZugUu_LJM4FxfxZR3ZNT5O7kLWQ=w1500-no">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
        <a href="http://www.remaxthailand.co.th/register"><span class="btn btn-primary">สมัครตัวแทนจำหน่าย</span></a>
      </div>
    </div>
  </div>
</div>
