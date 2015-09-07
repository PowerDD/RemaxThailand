<div class="row pinRow">	
	{section name=idx loop=$product}
		<div class="pinItem">
			<div class="pinBox pinWell margin-bottom-15"> 
				<a href="/product/item/{$product[idx].product}">
					<img class="img-responsive img-popover" width="500" src="https://cdn24fin.blob.core.windows.net/img/products/{if $product[idx].picture != NULL}{$product[idx].picture}{else}1/Logo/1_m.jpg{/if}"{if $product.highlights[idx] != ''} data-placement="bottom" data-toggle="popover" title="จุดเด่นของสินค้า" data-content="{$product.highlights[idx]|replace:'<img':"<img class='img-responsive'"}"{/if}>
				</a>
				<div class="message">
					<div class="margin-top-5 margin-bottom-5"><div class="text-center">{if $product[idx].isNew == 1}<img src="https://src.24fin.com/images/gif/new.gif"> {/if}<b class="text-info">
					<a href="/product/item/{$product.id[idx]}">{$product[idx].name}</a></b></div>{if $product[idx].sku != '' && $product[idx].sku|substr:0:1 == 'D'}<div class="margin-top-5 pull-left">{$product[idx].sku}</div>{/if}
						<div class="margin-top-5 pull-right no-wrap">{if $product[idx].warranty > 0}รับประกัน 
							{if $product[idx].warranty == 365} 1 ปี
							{else if $product[idx].warranty >= 30} {$product[idx].warranty/30} เดือน
							{else} {$product[idx].warranty} วัน{/if}
						{/if}</div>
					</div>
					<div class="clearfix line margin-bottom-5"></div>
					<div class="pull-left no-wrap">{if $product[idx].stock <= 0}<b class="text-danger">สินค้าหมด</b> : {/if}ราคาปลีก<b class="text-danger">{if $product[idx].price == 0}ยังไม่กำหนด</b>{else} {$product[idx].price|number_format:0:".":","}</b> บาท{/if}</div>
					<div class="pull-right no-wrap">ราคาส่ง(3 ชิ้น)<b class="text-danger">{if $product[idx].price1 == 0}ยังไม่กำหนด</b>{else} {$product[idx].price1|number_format:0:".":","}</b> บาท{/if}</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	{/section}
</div>

<div class="hidden">
	
</div>