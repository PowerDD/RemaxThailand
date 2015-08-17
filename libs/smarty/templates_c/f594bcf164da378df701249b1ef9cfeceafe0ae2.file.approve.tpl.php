<?php /* Smarty version Smarty-3.1.18, created on 2015-03-22 13:26:17
         compiled from "D:\home\site\wwwroot\screens\dealer\approve.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31189550f184f12e6c4-51396519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f594bcf164da378df701249b1ef9cfeceafe0ae2' => 
    array (
      0 => 'D:\\home\\site\\wwwroot\\screens\\dealer\\approve.tpl',
      1 => 1427055966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31189550f184f12e6c4-51396519',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_550f184f3b6ba9_85579045',
  'variables' => 
  array (
    'screen_action' => 0,
    'member_id' => 0,
    'code' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550f184f3b6ba9_85579045')) {function content_550f184f3b6ba9_85579045($_smarty_tpl) {?><input type="hidden" id="screen_action" value="<?php echo $_smarty_tpl->tpl_vars['screen_action']->value;?>
">
<input type="hidden" id="member_id" value="<?php echo $_smarty_tpl->tpl_vars['member_id']->value;?>
">

<div class="pinBox pinWell padding-10">
	<div class="row">
		<div id="dv-loading" class="col-sm-12">
			<div class="alert alert-info text-center" role="alert"><img src="https://src.24fin.com/images/gif/loader.gif"> กำลังตรวจสอบข้อมูล... กรุณารอสักครู่ค่ะ</div>
		</div>
		<div id="dv-success" class="col-sm-12 hidden">
			<div class="alert alert-info text-center" role="alert"><?php if (isset($_smarty_tpl->tpl_vars['code']->value)) {?>อนุมัติ<?php } else { ?>ปฏิเสธ<?php }?>การสมัคร Dealer เรียบร้อยแล้วค่ะ
				<?php if (isset($_smarty_tpl->tpl_vars['code']->value)) {?><br><h3>รหัสส่วนลดคือ <b><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</b></h3><?php }?>
			</div>
		</div>
	</div>
</div><?php }} ?>
