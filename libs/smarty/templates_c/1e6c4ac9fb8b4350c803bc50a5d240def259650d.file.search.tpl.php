<?php /* Smarty version Smarty-3.1.18, created on 2015-05-04 04:33:03
         compiled from "D:\home\site\wwwroot\screens\product\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19206548ec946483cb2-79027010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e6c4ac9fb8b4350c803bc50a5d240def259650d' => 
    array (
      0 => 'D:\\home\\site\\wwwroot\\screens\\product\\search.tpl',
      1 => 1430739176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19206548ec946483cb2-79027010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_548ec946a8e997_29585148',
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ec946a8e997_29585148')) {function content_548ec946a8e997_29585148($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['product']->value)) {?>
	<div id="dv-alert_result" class="alert alert-info text-center" role="alert">ค้นพบสินค้าจำนวน <?php echo count($_smarty_tpl->tpl_vars['product']->value['id']);?>
 รายการค่ะ</div>
	<div class="row pinRow">	
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['name'] = 'idx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['product']->value['id']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total']);
?>	
			<div class="pinItem">
					<div class="pinBox pinWell margin-bottom-15"> 
						<img  class="img-responsive" width="500" src="https://cdn24fin.blob.core.windows.net/img/products/<?php if ($_smarty_tpl->tpl_vars['product']->value['picture'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]!=null) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['picture'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']];?>
<?php } else { ?>1/Logo/1_m.jpg<?php }?>">
						<div class="message">
							<div class="margin-top-5 margin-bottom-5"><div class="text-center"><?php if ($_smarty_tpl->tpl_vars['product']->value['isNew'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]==1) {?><img src="https://src.24fin.com/images/gif/new.gif"> <?php }?><b>
							<a href="/product/item/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']];?>
</a></b></div><?php if ($_smarty_tpl->tpl_vars['product']->value['sku'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]!=''&&substr($_smarty_tpl->tpl_vars['product']->value['sku'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']],0,1)=='D') {?><div class="margin-top-5 pull-left"><?php echo $_smarty_tpl->tpl_vars['product']->value['sku'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']];?>
</div><?php }?>
								<div class="margin-top-5 pull-right no-wrap"><?php if ($_smarty_tpl->tpl_vars['product']->value['warranty'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]>0) {?>รับประกัน 
									<?php if ($_smarty_tpl->tpl_vars['product']->value['warranty'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]==365) {?> 1 ปี
									<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['warranty'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]>=30) {?> <?php echo $_smarty_tpl->tpl_vars['product']->value['warranty'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]/30;?>
 เดือน
									<?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['product']->value['warranty'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']];?>
 วัน<?php }?>
								<?php }?></div>
							</div>
							<div class="clearfix line margin-bottom-5"></div>
							<div class="pull-left no-wrap"><?php if ($_smarty_tpl->tpl_vars['product']->value['hasStock'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]==0) {?><b class="text-danger">สินค้าหมด</b> : <?php }?>ราคาปลีก <b class="text-danger"><?php echo number_format($_smarty_tpl->tpl_vars['product']->value['price'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']],0,".",",");?>
</b> บาท</div>
							<div class="pull-right no-wrap">ราคาส่ง <b class="text-danger"><?php echo number_format($_smarty_tpl->tpl_vars['product']->value['salePrice1'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']],0,".",",");?>
</b> บาท</div>
							<div class="clearfix"></div>
						</div>
					</div>
			</div>
		<?php endfor; endif; ?>
	</div>
<?php } else { ?>
	<div id="dv-alert_no_result" class="alert alert-danger text-center" role="alert">ไม่มีข้อมูลสินค้าที่ต้องการค้นหาค่ะ</div>
<?php }?><?php }} ?>
