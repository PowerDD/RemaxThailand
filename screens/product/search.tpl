{if isset($product)}
	<div id="dv-alert_result" class="alert alert-info text-center" role="alert">ค้นพบสินค้าจำนวน {$product.id|@count} รายการค่ะ</div>
	<div class="row pinRow">	
		{section name=idx loop=$product.id}	
			<div class="pinItem">
					<div class="pinBox pinWell margin-bottom-15"> 
						<img  class="img-responsive" width="500" src="https://cdn24fin.blob.core.windows.net/img/products/{if $product.picture[idx] != NULL}{$product.picture[idx]}{else}1/Logo/1_m.jpg{/if}">
						<div class="message">
							<div class="margin-top-5 margin-bottom-5"><div class="text-center">{if $product.isNew[idx] == 1}<img src="https://src.24fin.com/images/gif/new.gif"> {/if}<b>
							<a href="/product/item/{$product.id[idx]}">{$product.name[idx]}</a></b></div>{if $product.sku[idx] != '' && $product.sku[idx]|substr:0:1 == 'D'}<div class="margin-top-5 pull-left">{$product.sku[idx]}</div>{/if}
								<div class="margin-top-5 pull-right no-wrap">{if $product.warranty[idx] > 0}รับประกัน 
									{if $product.warranty[idx] == 365} 1 ปี
									{else if $product.warranty[idx] >= 30} {$product.warranty[idx]/30} เดือน
									{else} {$product.warranty[idx]} วัน{/if}
								{/if}</div>
							</div>
							<div class="clearfix line margin-bottom-5"></div>
							<div class="pull-left no-wrap">{if $product.hasStock[idx] == 0}<b class="text-danger">สินค้าหมด</b> : {/if}ราคาปลีก <b class="text-danger">{$product.price[idx]|number_format:0:".":","}</b> บาท</div>
							<div class="pull-right no-wrap">ราคาส่ง <b class="text-danger">{$product.salePrice1[idx]|number_format:0:".":","}</b> บาท</div>
							<div class="clearfix"></div>
						</div>
					</div>
			</div>
		{/section}
	</div>
{else}
	<div id="dv-alert_no_result" class="alert alert-danger text-center" role="alert">ไม่มีข้อมูลสินค้าที่ต้องการค้นหาค่ะ</div>
{/if}