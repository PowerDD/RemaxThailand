<?php /* Smarty version Smarty-3.1.18, created on 2015-08-02 21:38:40
         compiled from "D:\home\site\wwwroot\screens\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20205548e58e35a9915-84360819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0b94505cec3ca633ffca99c0e18eae38eed0811' => 
    array (
      0 => 'D:\\home\\site\\wwwroot\\screens\\home.tpl',
      1 => 1438576717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20205548e58e35a9915-84360819',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_548e58e3636452_07521456',
  'variables' => 
  array (
    'system_url' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e58e3636452_07521456')) {function content_548e58e3636452_07521456($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\home\\site\\wwwroot\\libs\\smarty\\plugins\\modifier.replace.php';
?><div class="row pinRow">
	
	<div class="pinItem">
		<div class="pinBox pinWell margin-bottom-15">
			<img src="https://cdn24fin.blob.core.windows.net/img/products/1/D-Reward point/1.jpg" class="img-responsive pointer"  data-toggle="modal" data-target="#dv-check_point">
			<div class="message text-center">ตรวจสอบคะแนนสะสม</div>
		</div>
	</div>

	<div class="pinItem">
		<div class="pinBox pinWell margin-bottom-15">
			<a href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
/product/category/new">
				<img src="https://cdn24fin.blob.core.windows.net/img/products/1/D-New Arrivals/1.jpg"  class="img-responsive">
			</a>
			<div class="message text-center">สินค้ามาใหม่</div>
		</div>
	</div>

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['name'] = 'idx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['category']->value['id']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
		<?php if ($_smarty_tpl->tpl_vars['category']->value['id'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]!='2-7') {?>
			<div class="pinItem">
				<div class="pinBox pinWell margin-bottom-15">
					<a href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
/product/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['url'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']];?>
">
						<img src="https://cdn24fin.blob.core.windows.net/img/products/1/D-<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['category']->value['name'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']],'-','/'),'/',''),'  ',' ');?>
/1_l.jpg" class="img-responsive">
					</a>
					<div class="message text-center margin-top-5"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']];?>
</div>
				</div>
			</div>
		<?php }?>
	<?php endfor; endif; ?>

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
	<img class="img-responsive no-radius" src="https://lh3.googleusercontent.com/dEuJl53gqaJ5_uDMtz10aPEeqnPPccMnvq9mlI26OYg=w1500-no">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
        <a href="http://www.remaxthailand.co.th/register"><span class="btn btn-primary">สมัครตัวแทนจำหน่าย</span></a>
      </div>
    </div>
  </div>
</div><?php }} ?>
