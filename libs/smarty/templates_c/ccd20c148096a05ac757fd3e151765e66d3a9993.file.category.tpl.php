<?php /* Smarty version Smarty-3.1.18, created on 2015-07-19 20:50:55
         compiled from "D:\home\site\wwwroot\screens\product\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23459548e5996bb16f5-72946355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccd20c148096a05ac757fd3e151765e66d3a9993' => 
    array (
      0 => 'D:\\home\\site\\wwwroot\\screens\\product\\category.tpl',
      1 => 1437364251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23459548e5996bb16f5-72946355',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_548e5996c99f33_44984345',
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e5996c99f33_44984345')) {function content_548e5996c99f33_44984345($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\home\\site\\wwwroot\\libs\\smarty\\plugins\\modifier.replace.php';
?><div class="row pinRow">	
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
					<a href="/product/item/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']];?>
">
						<img class="img-responsive img-popover" width="500" src="https://cdn24fin.blob.core.windows.net/img/products/<?php if ($_smarty_tpl->tpl_vars['product']->value['picture'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]!=null) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['picture'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']];?>
<?php } else { ?>1/Logo/1_m.jpg<?php }?>"<?php if ($_smarty_tpl->tpl_vars['product']->value['highlights'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]!='') {?> data-placement="bottom" data-toggle="popover" title="จุดเด่นของสินค้า" data-content="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value['highlights'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']],'<img',"<img class='img-responsive'");?>
"<?php }?>>
					</a>
					<div class="message">
						<div class="margin-top-5 margin-bottom-5"><div class="text-center"><?php if ($_smarty_tpl->tpl_vars['product']->value['isNew'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]==1) {?><img src="https://src.24fin.com/images/gif/new.gif"> <?php }?><b class="text-info">
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
						<div class="pull-left no-wrap"><?php if ($_smarty_tpl->tpl_vars['product']->value['hasStock'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]==0) {?><b class="text-danger">สินค้าหมด</b> : <?php }?>ราคาปลีก<b class="text-danger"><?php if ($_smarty_tpl->tpl_vars['product']->value['price'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]==0) {?>ยังไม่กำหนด</b><?php } else { ?> <?php echo number_format($_smarty_tpl->tpl_vars['product']->value['price'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']],0,".",",");?>
</b> บาท<?php }?></div>
						<div class="pull-right no-wrap">ราคาส่ง(3 ชิ้น)<b class="text-danger"><?php if ($_smarty_tpl->tpl_vars['product']->value['salePrice1'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]==0) {?>ยังไม่กำหนด</b><?php } else { ?> <?php echo number_format($_smarty_tpl->tpl_vars['product']->value['salePrice1'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']],0,".",",");?>
</b> บาท<?php }?></div>
						<div class="clearfix"></div>
					</div>
				</div>
		</div>
	<?php endfor; endif; ?>
</div><?php }} ?>
