<div class="pinBox pinWell padding-10">
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 margin-bottom-15">
		
			<img src="{if $product.cover != ''}http://api.powerdd.com/img/remax/product/{$product.shop}/{$product.sku}/500/500/{$product.cover}{else}http://src.powerdd.com/img/product/88888888/default.jpg{/if}"
			alt="{$product.name}" class="img-thumbnail img_box_shadow" id="img_main"  data-zoom-image="{if $id_cover != ''}xxx{else}yyy{/if}">

			{if $product.cover != '' && $product.image|count > 1}
				<div class="row">
					{section name=idx loop=$product.image}
						<div class="col-xs-3 col-sm-3 col-md-3">
							<img src="http://api.powerdd.com/img/remax/product/{$product.shop}/{$product.sku}/100/100/{$product.image[idx]}" alt="{$product.name}" class="pointer img-thumbnail img_small_list{if $product.image[idx] == $product.cover} active{/if}">
						</div>
					{/section}
				</div>
			{/if}
			<div class="row margin-top-15">
				<div class="col-xs-12 margin-bottom-15"><div class="line"></div></div>
				{if $product.chargeType != ''}
					<div class="col-xs-4 bold text-right small">หัวชาร์จแบบ</div><div class="col-xs-8">{$product.chargeType}</div>
				{/if}
				{if $product.deviceSupport != ''}
					<div class="col-xs-4 bold text-right small">อุปกรณ์ที่รองรับ</div><div class="col-xs-8">{$product.deviceSupport}</div>
				{/if}
				{if $product.material != ''}
					<div class="col-xs-4 bold text-right small">วัสดุ/ผิวสัมผัส</div><div class="col-xs-8">{$product.material}</div>
				{/if}
				{if $product.width > 0}
					<div class="col-xs-4 bold text-right small">กว้าง</div><div class="col-xs-8">{$product.width} ซม.</div>
				{/if}
				{if $product.length > 0}
					<div class="col-xs-4 bold text-right small">ยาว</div><div class="col-xs-8">{$product.length} ซม.</div>
				{/if}
				{if $product.height > 0}
					<div class="col-xs-4 bold text-right small">สูง</div><div class="col-xs-8">{$product.height} ซม.</div>
				{/if}
				{if $product.weight > 0}
					<div class="col-xs-4 bold text-right small">น้ำหนัก</div><div class="col-xs-8">{$product.weight} กรัม</div>
				{/if}
				{if $product.grossWeight > 0}
					<div class="col-xs-4 bold text-right small">น้ำหนักรวม</div><div class="col-xs-8">{$product.grossWeight} กรัม</div>
				{/if}
				{if $product.madeIn != ''}
					<div class="col-xs-4 bold text-right small">ผลิตในประเทศ</div><div class="col-xs-8">{$product.madeIn}</div>
				{/if}
				{if $product.standard != ''}
					<div class="col-xs-4 bold text-right small">มาตรฐาน</div><div class="col-xs-8">{$product.standard}</div>
				{/if}
				{if $product.standard != ''}
					<div class="col-xs-12 text-center">
						{if $product.standard|strpos:'CE' != ''}<img src="http://src.powerdd.com/img/web/88888888/icon/logo-ce.png">{/if}
						{if $product.standard|strpos:'FCC' != ''}<img src="http://src.powerdd.com/img/web/88888888/icon/logo-fcc.png">{/if}
						{if $product.standard|strpos:'RoHS' != ''}<img src="http://src.powerdd.com/img/web/88888888/icon/logo-rohs.png">{/if}
					</div>
				{/if}
			</div>

		</div>
		<div class="col-xs-12 col-sm-8 col-md-8">
			<h1 class="font-24 margin-top-10"><strong id="product" data-id="{$product.id}">{$product.name}</strong></h1>
			{if $product.model != ''}<h2 class="font-16 margin-top-0">รุ่น <strong>{$product.model}</strong></h2>{/if}
			<div class="pull-left">
				{if isset($product.warranty) && $product.warranty > 0}
					<div><span class="label label-success">รับประกันสินค้า 
						{if $product.warranty == 365}1 ปี{else if $product.warranty >= 30}{$product.warranty/30} เดือน{else}{$product.warranty} วัน{/if}</span>
						<span class="small"> โดย Remax (Thailand) Co.,Ltd.</span></div>
				{/if}
				<div class="small margin-top-5"><i class="fa fa-lg fa-star fav-orange margin-right-1"></i><i class="fa fa-lg fa-star fav-orange margin-right-1"></i><i class="fa fa-lg fa-star fav-orange margin-right-1"></i><i class="fa fa-lg fa-star fav-orange margin-right-1"></i><i class="fa fa-lg fa-star-half-o fav-orange margin-right-1"></i></div>
			</div>
			<div class="clearfix"></div>
			<div class="row margin-top-10">
				<div class="col-sm-12"><div class="line"></div></div>

					<div class="col-sm-3 col-xs-6 margin-top-10">
						<div class="small text-primary">ราคาปลีก</div>
						<div class="margin-bottom-0 margin-top-0">
							{if !isset($product.price) || $product.price == 0}
								ยังไม่กำหนดราคา
							{else}
								<h3 class="margin-bottom-0 margin-top-0"><strong class="text-danger">{$product.price|number_format:0:".":","}</strong> บาท</h3>
							{/if}
						</div>
						<div class="small">ราคาปกติ</div>
						<div class="small"></div>
					</div>
					<div class="col-sm-3 col-xs-6 margin-top-10">
						<div class="small text-primary">ราคาส่ง</div>
						<div class="margin-bottom-0 margin-top-0">
							{if !isset($product.price1) || $product.price1 == 0}
								ยังไม่กำหนดราคา
							{else}
								<h3 class="margin-bottom-0 margin-top-0"><strong class="text-danger">{$product.price1|number_format:0:".":","}</strong> บาท</h3>
								<div class="small">ประหยัด {(($product.price-$product.price1)*100/$product.price)|number_format:2:".":","}%</div>
							{/if}
						</div>
						<div class="small"></div>
					</div>
					<div class="col-sm-6 margin-top-10">
						<h4 id="h4-status" class="margin-top-0 
							{if $product.stock > 0 || $product.stock == -99}text-success">มีสินค้า
							{else if $product.stock <= 0}text-danger">สินค้าหมด
							{/if}
						</h4>
						<div class="small">จัดส่งสินค้าภายใน <strong>1-2</strong> วันทำการ<br />(ยกเว้นวันอาทิตย์ และวันหยุดนักขัตฤกษ์)</div>
						<div class="small">จัดจำหน่ายและดำเนินการโดย Remax (Thailand) Co.,Ltd.</div>
					</div>
					<div class="col-sm-12 margin-top-10">
						<div class="line"></div>

						{if $product.detail != ''  && $product.detail|count > 0}
							<div class="row margin-top-15">
								<h4 class="col-xs-12">รายละเอียดเกี่ยวกับสินค้า</h4>
								<div class="col-xs-12 margin-bottom-15">
									<ul>
										{section name=idx loop=$product.detail}
											<li>{$product.detail[idx]}</li>
										{/section}
									</ul>
								</div>
							</div>
						{/if}

						{if $product.specialProperties != ''  && $product.specialProperties|count > 0}
							<div class="row">
								<h4 class="col-xs-12">คุณสมบัติพิเศษ</h4>
								<div class="col-xs-12 margin-bottom-15">
									<ul>
										{section name=idx loop=$product.specialProperties}
											<li>{$product.specialProperties[idx]}</li>
										{/section}
									</ul>
								</div>
							</div>
						{/if}

						{if $product.howToUse != ''  && $product.howToUse|count > 0}
							<div class="row">
								<h4 class="col-xs-12">วิธีใช้งาน</h4>
								<div class="col-xs-12 margin-bottom-15">
									<ul>
										{section name=idx loop=$product.howToUse}
											<li>{$product.howToUse[idx]}</li>
										{/section}
									</ul>
								</div>
							</div>
						{/if}

						{if $product.inBox != ''  && $product.inBox|count > 0}
							<div class="row">
								<h4 class="col-xs-12">อุปกรณ์ภายในกล่อง</h4>
								<div class="col-xs-12 margin-bottom-15">
									<ul>
										{section name=idx loop=$product.inBox}
											<li>{$product.inBox[idx]}</li>
										{/section}
									</ul>
								</div>
							</div>
						{/if}


						{if $product.imageDetail|count > 0}
							<div class="row margin-top-15">
								{section name=idx loop=$product.imageDetail}
									<div class="col-sm-12">
										<img src="http://api.powerdd.com/img/remax/product/{$product.shop}/{$product.sku}/{$product.imageDetail[idx]}" alt="{$product.name}" class="img-responsive no-radius">
									</div>
								{/section}
							</div>
						{/if}

						<div class="text-center">
							<img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=http://www.remaxthailand.co.th/product/item/{$id}">
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>