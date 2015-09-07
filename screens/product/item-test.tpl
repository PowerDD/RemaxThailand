<div class="pinBox pinWell padding-10">
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 margin-bottom-15">
		
			<img src="{if $product.cover != ''}http://api.powerdd.com/img/remax/product/{$product.shop}/{$product.sku}/500/500/{$product.cover}
			{else}products/box.png{/if}" 
			alt="{$product.name}" class="img-thumbnail img_box_shadow" id="img_main"  data-zoom-image="{if $id_cover != ''}xxx{else}yyy{/if}">

			{if $id_cover != '' && $image|count > 1}
				<div class="row">
					{for $idx=1 to 8}
						{if isset($image.$idx.path_s)}
							<div class="col-xs-3 col-sm-3 col-md-3">
								<img src="https://cdn24fin.blob.core.windows.net/img/products/1/{$image.$idx.path_s}" alt="{$product.name}" class="pointer img-thumbnail img_small_list{if $id_cover == $idx} active{/if}">
							</div>
						{/if}
					{/for}
				</div>
			{/if}

		</div>
		<div class="col-xs-12 col-sm-8 col-md-8">
			<h1 class="font-16 margin-top-10"><strong id="product" data-id="{$product.id}">{$product.name}</strong></h1>
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
						{if isset($product.highlights) && $product.highlights|trim|replace:'<br>':'' != ''}
							<br/>
							<strong><h4>จุดเด่น/จุดขายของสินค้า</h4></strong>
							{$product.highlights}
						{/if}
						{if isset($product.inTheBox) && $product.inTheBox|trim|replace:'<br>':'' != ''}
							<br/>
							<strong><h4>อุปกรณ์ที่จะได้รับ</h4></strong>
							{$product.inTheBox}
						{/if}
						<div class="line"></div>
						<div class="text-center">
							<img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=https:{$system_url}/product/item/{$product.id}">
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>