<?php /* Smarty version Smarty-3.1.18, created on 2015-04-08 00:12:27
         compiled from "D:\home\site\wwwroot\screens\product\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16313551530840f7019-93855345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67f4bd45c35383011a742a14cda5bb4e9bd4ae46' => 
    array (
      0 => 'D:\\home\\site\\wwwroot\\screens\\product\\item.tpl',
      1 => 1428477136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16313551530840f7019-93855345',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_551530850239f1_45264711',
  'variables' => 
  array (
    'id_cover' => 0,
    'image' => 0,
    'product' => 0,
    'idx' => 0,
    'system_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551530850239f1_45264711')) {function content_551530850239f1_45264711($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\home\\site\\wwwroot\\libs\\smarty\\plugins\\modifier.replace.php';
?><div class="pinBox pinWell padding-10">
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 margin-bottom-15">
		
			<img src="https://cdn24fin.blob.core.windows.net/img/products/1/<?php if ($_smarty_tpl->tpl_vars['id_cover']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['image']->value[$_smarty_tpl->tpl_vars['id_cover']->value]['path'];?>
<?php } else { ?>products/box.png<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'][0];?>
" class="img-thumbnail img_box_shadow" id="img_main"  data-zoom-image="https://cdn24fin.blob.core.windows.net/img/products/1/<?php if ($_smarty_tpl->tpl_vars['id_cover']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['image']->value[$_smarty_tpl->tpl_vars['id_cover']->value]['path'];?>
<?php } else { ?>products/box_l.png<?php }?>">

			<?php if ($_smarty_tpl->tpl_vars['id_cover']->value!=''&&count($_smarty_tpl->tpl_vars['image']->value)>1) {?>
				<div class="row">
					<?php $_smarty_tpl->tpl_vars['idx'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['idx']->step = 1;$_smarty_tpl->tpl_vars['idx']->total = (int) ceil(($_smarty_tpl->tpl_vars['idx']->step > 0 ? 8+1 - (1) : 1-(8)+1)/abs($_smarty_tpl->tpl_vars['idx']->step));
if ($_smarty_tpl->tpl_vars['idx']->total > 0) {
for ($_smarty_tpl->tpl_vars['idx']->value = 1, $_smarty_tpl->tpl_vars['idx']->iteration = 1;$_smarty_tpl->tpl_vars['idx']->iteration <= $_smarty_tpl->tpl_vars['idx']->total;$_smarty_tpl->tpl_vars['idx']->value += $_smarty_tpl->tpl_vars['idx']->step, $_smarty_tpl->tpl_vars['idx']->iteration++) {
$_smarty_tpl->tpl_vars['idx']->first = $_smarty_tpl->tpl_vars['idx']->iteration == 1;$_smarty_tpl->tpl_vars['idx']->last = $_smarty_tpl->tpl_vars['idx']->iteration == $_smarty_tpl->tpl_vars['idx']->total;?>
						<?php if (isset($_smarty_tpl->tpl_vars['image']->value[$_smarty_tpl->tpl_vars['idx']->value]['path_s'])) {?>
							<div class="col-xs-3 col-sm-3 col-md-3">
								<img src="https://cdn24fin.blob.core.windows.net/img/products/1/<?php echo $_smarty_tpl->tpl_vars['image']->value[$_smarty_tpl->tpl_vars['idx']->value]['path_s'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'][0];?>
" class="pointer img-thumbnail img_small_list<?php if ($_smarty_tpl->tpl_vars['id_cover']->value==$_smarty_tpl->tpl_vars['idx']->value) {?> active<?php }?>">
							</div>
						<?php }?>
					<?php }} ?>
				</div>
			<?php }?>

		</div>
		<div class="col-xs-12 col-sm-8 col-md-8">
			<h1 class="font-16 margin-top-10"><strong id="product" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'][0];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'][0];?>
</strong></h1>
			<div class="pull-left">
				<?php if (isset($_smarty_tpl->tpl_vars['product']->value['warranty'][0])&&$_smarty_tpl->tpl_vars['product']->value['warranty'][0]>0) {?>
					<div><span class="label label-success">รับประกันสินค้า 
						<?php if ($_smarty_tpl->tpl_vars['product']->value['warranty'][0]==365) {?>1 ปี<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['warranty'][0]>=30) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['warranty'][0]/30;?>
 เดือน<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['product']->value['warranty'][0];?>
 วัน<?php }?></span>
						<span class="small"> โดย Remax (Thailand) Co.,Ltd.</span></div>
				<?php }?>
				<div class="small margin-top-5"><i class="fa fa-lg fa-star fav-orange margin-right-1"></i><i class="fa fa-lg fa-star fav-orange margin-right-1"></i><i class="fa fa-lg fa-star fav-orange margin-right-1"></i><i class="fa fa-lg fa-star fav-orange margin-right-1"></i><i class="fa fa-lg fa-star-half-o fav-orange margin-right-1"></i></div>
			</div>
			<div class="clearfix"></div>
			<div class="row margin-top-10">
				<div class="col-sm-12"><div class="line"></div></div>

					<div class="col-sm-3 col-xs-6 margin-top-10">
						<div class="small text-primary">ราคาปลีก</div>
						<div class="margin-bottom-0 margin-top-0">
							<?php if (!isset($_smarty_tpl->tpl_vars['product']->value['price'][0])||$_smarty_tpl->tpl_vars['product']->value['price'][0]==0) {?>
								ยังไม่กำหนดราคา
							<?php } else { ?>
								<h3 class="margin-bottom-0 margin-top-0"><strong class="text-danger"><?php echo number_format($_smarty_tpl->tpl_vars['product']->value['price'][0],0,".",",");?>
</strong> บาท</h3>
							<?php }?>
						</div>
						<div class="small">ราคาปกติ</div>
						<div class="small"></div>
					</div>
					<div class="col-sm-3 col-xs-6 margin-top-10">
						<div class="small text-primary">ราคาส่ง</div>
						<div class="margin-bottom-0 margin-top-0">
							<?php if (!isset($_smarty_tpl->tpl_vars['product']->value['salePrice1'][0])||$_smarty_tpl->tpl_vars['product']->value['salePrice1'][0]==0) {?>
								ยังไม่กำหนดราคา
							<?php } else { ?>
								<h3 class="margin-bottom-0 margin-top-0"><strong class="text-danger"><?php echo number_format($_smarty_tpl->tpl_vars['product']->value['salePrice1'][0],0,".",",");?>
</strong> บาท</h3>
								<div class="small">ประหยัด <?php echo number_format((($_smarty_tpl->tpl_vars['product']->value['price'][0]-$_smarty_tpl->tpl_vars['product']->value['salePrice1'][0])*100/$_smarty_tpl->tpl_vars['product']->value['price'][0]),2,".",",");?>
%</div>
							<?php }?>
						</div>
						<div class="small"></div>
					</div>
					<div class="col-sm-6 margin-top-10">
						<h4 id="h4-status" class="margin-top-0 
							<?php if ($_smarty_tpl->tpl_vars['product']->value['stock'][0]>0||$_smarty_tpl->tpl_vars['product']->value['stock'][0]==-99) {?>text-success">มีสินค้า
							<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['stock'][0]<=0) {?>text-danger">สินค้าหมด
							<?php }?>
						</h4>
						<div class="small">จัดส่งสินค้าภายใน <strong>1-2</strong> วันทำการ<br />(ยกเว้นวันอาทิตย์ และวันหยุดนักขัตฤกษ์)</div>
						<div class="small">จัดจำหน่ายและดำเนินการโดย Remax (Thailand) Co.,Ltd.</div>
					</div>
					<div class="col-sm-12 margin-top-10">
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['highlights'][0])&&smarty_modifier_replace(trim($_smarty_tpl->tpl_vars['product']->value['highlights'][0]),'<br>','')!='') {?>
							<br/>
							<strong><h4>จุดเด่น/จุดขายของสินค้า</h4></strong>
							<?php echo $_smarty_tpl->tpl_vars['product']->value['highlights'][0];?>

						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['inTheBox'][0])&&smarty_modifier_replace(trim($_smarty_tpl->tpl_vars['product']->value['inTheBox'][0]),'<br>','')!='') {?>
							<br/>
							<strong><h4>อุปกรณ์ที่จะได้รับ</h4></strong>
							<?php echo $_smarty_tpl->tpl_vars['product']->value['inTheBox'][0];?>

						<?php }?>
						<div class="line"></div>
						<div class="text-center">
							<img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=https:<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
/product/item/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'][0];?>
">
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div><?php }} ?>
