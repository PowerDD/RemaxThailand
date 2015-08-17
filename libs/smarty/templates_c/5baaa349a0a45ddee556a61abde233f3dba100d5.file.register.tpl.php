<?php /* Smarty version Smarty-3.1.18, created on 2015-03-23 04:12:59
         compiled from "D:\home\site\wwwroot\screens\dealer\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17845506973f025ca4-12140700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5baaa349a0a45ddee556a61abde233f3dba100d5' => 
    array (
      0 => 'D:\\home\\site\\wwwroot\\screens\\dealer\\register.tpl',
      1 => 1427109174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17845506973f025ca4-12140700',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5506973f0752b0_26494565',
  'variables' => 
  array (
    'screen_action' => 0,
    'referer' => 0,
    'province' => 0,
    'member' => 0,
    'member_ref' => 0,
    'district' => 0,
    'image_list' => 0,
    'member_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5506973f0752b0_26494565')) {function content_5506973f0752b0_26494565($_smarty_tpl) {?><input type="hidden" id="screen_action" value="<?php echo $_smarty_tpl->tpl_vars['screen_action']->value;?>
">
<input type="hidden" id="referer" value="<?php echo $_smarty_tpl->tpl_vars['referer']->value;?>
">

<?php if ($_smarty_tpl->tpl_vars['screen_action']->value=='register') {?>
	<div class="pinBox pinWell padding-10">
		<h1 class="page-header font-28 margin-top-10">สมัครสมาชิก</h1>
		<div class="row">
			<div id="dv-loading" class="col-sm-12 hidden">
				<div class="alert alert-info text-center" role="alert"><img src="https://src.24fin.com/images/gif/loader.gif"> กำลังบันทึกข้อมูล... กรุณารอสักครู่ค่ะ</div>
			</div>
			<div id="dv-success" class="col-sm-12 hidden">
				<div class="alert alert-info text-center" role="alert"><i class="fa fa-quote-left"></i> ขอบคุณที่ให้ความสนใจ กรุณาตรวจสอบข้อมูลเพิ่มทางอีเมล์ <b id="b_email"></b> ค่ะ <i class="fa fa-quote-right"></i></div>
			</div>

			<div class="col-sm-3 dv-input">
				<img class="img-responsive" src="https://src.24fin.com/images/remaxthailand/register-01.png">
			</div>
			<div class="col-sm-9 dv-input">
				<form id="fm-register" role="form" class="dv dv-manual form-horizontal" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="msg" class="col-sm-2 control-label">ชื่อ - นามสกุล <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="text" class="form-control required" id="txt-name" name="name" placeholder="ชื่อ - นามสกุล" required>
						</div>
					</div>
					<div class="form-group">
						<label for="msg" class="col-sm-2 control-label">อีเมล <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="text" class="form-control required" id="txt-email" name="email" placeholder="กรุณากรอกอีเมล เพื่อรับสิทธิประโยชน์ และโปรโมชั่นต่างๆ" required>
							<div class="help-inline text-danger hidden">มีอีเมลนี้ในระบบแล้ว กรุณาใช้อีเมลใหม่ค่ะ</div>
						</div>
					</div>
					<div class="form-group">
						<label for="msg" class="col-sm-2 control-label">เบอร์มือถือ <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="text" class="form-control required" id="txt-mobile" name="mobile" placeholder="กรุณากรอกเบอร์มือถือ เพื่อรับสิทธิประโยชน์ และโปรโมชั่นต่างๆ" required>
							<div class="help-inline text-danger hidden">มีเบอร์มือถือนี้ในระบบแล้ว กรุณาใช้เบอร์มือถือใหม่ค่ะ</div>
						</div>
					</div>
					<div class="form-group">
						<label for="msg" class="col-sm-2 control-label">ไอดี Line</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txt-line" placeholder="กรุณากรอกไอดี Line เพื่อรับสิทธิประโยชน์ และโปรโมชั่นต่างๆ">
							<div class="help-inline text-danger hidden">มี ไอดี Line นี้ในระบบแล้ว กรุณาใช้ ไอดี Line ใหม่ค่ะ</div>
						</div>
					</div>
					<div class="form-group">
						<label for="msg" class="col-sm-2 control-label">จังหวัด <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<select  class="form-control" id="province">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['name'] = 'idx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['province']->value['name']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
									<option value="<?php echo $_smarty_tpl->tpl_vars['province']->value['id'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']];?>
"<?php if ($_smarty_tpl->tpl_vars['province']->value['id'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]=='1') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['province']->value['name'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']];?>
</option>
								<?php endfor; endif; ?>
							</select>
						</div>
					</div>
					<div class="form-group dv-button">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-9">
							<div class="line"></div>
						</div>
					</div>				
					<div class="form-group dv-button">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-9">
							<button type="button" class="btn btn-warning pull-right" id="btn-register" data-step="4">สมัคร Dealer <i class="fa fa-chevron-right"></i></button>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['screen_action']->value=='information') {?>
	<div class="pinBox pinWell padding-10">
		<h1 class="page-header font-28 margin-top-10">สวัสดีค่ะ คุณ<?php echo $_smarty_tpl->tpl_vars['member']->value['name'][0];?>
 <?php echo $_smarty_tpl->tpl_vars['member']->value['lastname'][0];?>
</h1>
		<div class="row">
			<div id="dv-loading" class="col-sm-12 hidden">
				<div class="alert alert-info text-center" role="alert"><img src="https://src.24fin.com/images/gif/loader.gif"> กำลังบันทึกข้อมูล... กรุณารอสักครู่ค่ะ</div>
			</div>

			<div class="col-sm-3">
				<img class="img-responsive step-1" src="https://src.24fin.com/images/remaxthailand/register-02.png">
				<img class="img-responsive step-2 hidden" src="https://src.24fin.com/images/remaxthailand/register-03.png">
				<img class="img-responsive step-3 hidden" src="https://src.24fin.com/images/remaxthailand/register-04.png">
				<img class="img-responsive step-4 hidden" src="https://src.24fin.com/images/remaxthailand/register-05.png">
			</div>
			<div class="col-sm-9">
				<form id="fm-register" role="form" class="dv dv-manual form-horizontal" method="post" enctype="multipart/form-data">
					<div class="form-group step-1">
						<label for="msg" class="col-sm-2 control-label">ชื่อผู้ใช้ <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="text" class="form-control required" id="txt-username" placeholder="Username" required data-checked="0" data-exist="0">
							<div class="help-inline text-danger hidden">มีชื่อผู้ใช้นี้ในระบบแล้ว กรุณาใช้ชื่อใหม่ค่ะ</div>
						</div>
						<input type="hidden" id="member_ref" name="member_ref" value="<?php echo $_smarty_tpl->tpl_vars['member_ref']->value;?>
">
						<input type="hidden" id="member_id" name="member_id" value="">
					</div>
					<div class="form-group step-1">
						<label for="msg" class="col-sm-2 control-label">รหัสผ่าน <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="password" class="form-control required" id="txt-password" name="txt-password" placeholder="Password" required>
						</div>
					</div>
					<div class="form-group step-1">
						<label for="msg" class="col-sm-2 control-label">ยืนยันรหัสผ่าน <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="password" class="form-control required" id="txt-password2" placeholder="กรอก Password อีกครั้ง" required>
							<div class="help-inline text-danger hidden">กรุณากรอกรหัสผ่านให้ตรงกันค่ะ</div>
						</div>
					</div>
					<div class="form-group step-2 hidden">
						<label for="msg" class="col-sm-2 control-label">ชื่อร้าน <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="text" class="form-control required" id="txt-shop" placeholder="ชื่อร้าน" required>
						</div>
					</div>
					<div class="form-group step-2 hidden">
						<label for="msg" class="col-sm-2 control-label">ที่อยู่ <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="text" class="form-control required" id="txt-address" placeholder="ที่อยู่ในการจัดส่งสินค้า" required>
						</div>
					</div>
					<div class="form-group step-2 hidden">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txt-address2" placeholder="ที่อยู่ (เพิ่มเติม)">
						</div>
					</div>
					<div class="form-group step-2 hidden">
						<label for="msg" class="col-sm-2 control-label">จังหวัด</label>
						<div class="col-sm-9">
							<select  class="form-control" id="province">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['name'] = 'idx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['province']->value['name']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
									<option value="<?php echo $_smarty_tpl->tpl_vars['province']->value['id'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']];?>
"<?php if ($_smarty_tpl->tpl_vars['province']->value['id'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]==$_smarty_tpl->tpl_vars['member']->value['province'][0]) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['province']->value['name'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']];?>
</option>
								<?php endfor; endif; ?>
							</select>
						</div>
					</div>
					<div class="form-group step-2 hidden">
						<label for="msg" class="col-sm-2 control-label">เขต/อำเภอ</label>
						<div class="col-sm-9">
							<select  class="form-control" id="district">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['name'] = 'idx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['district']->value['name']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
									<option value="<?php echo $_smarty_tpl->tpl_vars['district']->value['id'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']];?>
" data-zip="<?php echo $_smarty_tpl->tpl_vars['district']->value['zipCode'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']];?>
"<?php if ($_smarty_tpl->tpl_vars['district']->value['id'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]=='1') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['district']->value['name'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']];?>
</option>
								<?php endfor; endif; ?>
							</select>
						</div>
					</div>
					<div class="form-group step-2 hidden">
						<label for="msg" class="col-sm-2 control-label">แขวง/ตำบล <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="text" class="form-control required" id="txt-sub_district" placeholder="ตำบล" required>
						</div>
					</div>
					<div class="form-group step-2 hidden">
						<label for="msg" class="col-sm-2 control-label">รหัสไปรษณีย์ <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="text" class="form-control required" id="txt-zipcode" placeholder="รหัสไปรษณีย์" required maxlength="5">
						</div>
					</div>
					<div class="form-group step-3 hidden">
						<label for="msg" class="col-sm-2 control-label">ภาพหน้าร้าน</label>
						<div class="col-sm-9">
							<div class="input-group">
								<input type="text" class="form-control" id="img1" name="img1" placeholder="" disabled>
								<div class="input-group-addon btn btn-primary btn-browse" data-name="1">เลือกไฟล์ ...</div>
								<input class="hidden file" type="file" id="file1" name="file1">
							</div>
						</div>
					</div>
					<div class="form-group step-3 hidden">
						<label for="msg" class="col-sm-2 control-label">ภาพหน้าร้าน</label>
						<div class="col-sm-9">
							<div class="input-group">
								<input type="text" class="form-control" id="img2" name="img2" placeholder="" disabled>
								<div class="input-group-addon btn btn-primary btn-browse" data-name="2">เลือกไฟล์ ...</div>
								<input class="hidden file" type="file" id="file2" name="file2">
							</div>
						</div>
					</div>
					<div class="form-group step-3 hidden">
						<label for="msg" class="col-sm-2 control-label">ภาพในร้าน</label>
						<div class="col-sm-9">
							<div class="input-group">
								<input type="text" class="form-control" id="img3" name="img3" placeholder="" disabled>
								<div class="input-group-addon btn btn-primary btn-browse" data-name="3">เลือกไฟล์ ...</div>
								<input class="hidden file" type="file" id="file3" name="file3">
							</div>
						</div>
					</div>
					<div class="form-group step-3 hidden">
						<label for="msg" class="col-sm-2 control-label">ภาพในร้าน</label>
						<div class="col-sm-9">
							<div class="input-group">
								<input type="text" class="form-control" id="img4" name="img4" placeholder="" disabled>
								<div class="input-group-addon btn btn-primary btn-browse" data-name="4">เลือกไฟล์ ...</div>
								<input class="hidden file" type="file" id="file4" name="file4">
							</div>
						</div>
					</div>
					<div class="form-group step-4 hidden margin-bottom-0">
						<label for="msg" class="col-sm-2"></label>
						<label for="msg" class="col-sm-10 question1">คุณเคยทำธุรกิจ Accessories หรือไม่</label>
					</div>
					<div class="form-group step-4 hidden">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-1"></div>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="rd-exp" id="exp-y" value="1"> เคย
							</label>
							<label class="radio-inline">
								<input type="radio" name="rd-exp" id="exp-n" value="0" checked> ไม่เคย
							</label>
						</div>
					</div>
					<div class="form-group step-4 hidden">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-9">
							<div class="line"></div>
						</div>
					</div>
					<div class="form-group step-4 hidden margin-bottom-0">
						<label for="msg" class="col-sm-2"></label>
						<label for="msg" class="col-sm-10 question2">ประเภทธุรกิจ</label>
					</div>
					<div class="form-group step-4 hidden">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-1"></div>
						<div class="col-sm-9">
							<label class="checkbox-inline">
								<input type="checkbox" id="cb-wholesale" value="ws"> ขายส่ง
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" id="cb-retail" value="rt" > ขายปลีก
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" id="cb-online" value="ol" > ขายออนไลน์
							</label>
						</div>
					</div>
					<div class="form-group step-4 hidden">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-9">
							<div class="line"></div>
						</div>
					</div>	
					<div class="form-group step-4 hidden margin-bottom-0">
						<label for="msg" class="col-sm-2"></label>
						<label for="msg" class="col-sm-10 question3">คุณต้องการรับทราบข่าวสารผ่านทางวิธีใด</label>
					</div>
					<div class="form-group step-4 hidden">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-1"></div>
						<div class="col-sm-9">
							<label class="checkbox-inline">
								<input type="checkbox" id="cb-line" value="ln" > Line
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" id="cb-email" value="em"> อีเมล
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" id="cb-facebook" value="fb" > Facebook
							</label>
						</div>
					</div>
					<div class="form-group dv-button">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-9">
							<div class="line"></div>
						</div>
					</div>				
					<div class="form-group dv-button">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-9">
							<button type="button" class="btn btn-default pull-left hidden" id="btn-previous" data-step="2"><i class="fa fa-chevron-left"></i> ย้อนกลับ </button>
							<button type="button" class="btn btn-warning pull-right" id="btn-next" data-step="1">ขั้นตอนต่อไป <i class="fa fa-chevron-right"></i></button>
							<button type="button" class="btn btn-warning pull-right hidden" id="btn-register" data-step="4">สมัครตัวแทนจำหน่าย <i class="fa fa-chevron-right"></i></button>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['screen_action']->value=='upload') {?>
	<input type="hidden" id="image_list" value="<?php echo $_smarty_tpl->tpl_vars['image_list']->value;?>
">
	<input type="hidden" id="member_id" value="<?php echo $_smarty_tpl->tpl_vars['member_id']->value;?>
">
	<div class="pinBox pinWell padding-10">
		<h1 class="page-header font-28 margin-top-10">สวัสดีค่ะ คุณ<?php echo $_smarty_tpl->tpl_vars['member']->value['name'][0];?>
 <?php echo $_smarty_tpl->tpl_vars['member']->value['lastname'][0];?>
</h1>
		<div class="row">
			<div id="dv-loading" class="col-sm-12">
				<div class="alert alert-info text-center" role="alert"><img src="https://src.24fin.com/images/gif/loader.gif"> กำลังบันทึกข้อมูล... กรุณารอสักครู่ค่ะ</div>
			</div>
			<div id="dv-success" class="col-sm-12 hidden">
				<div class="alert alert-info text-center" role="alert"><i class="fa fa-quote-left"></i> ขอบคุณที่กรอกข้อมูลเพิ่มเติม กรุณารอเจ้าหน้าที่อนุมัติ และติดต่อกลับค่ะ <i class="fa fa-quote-right"></i></div>
			</div>
		</div>
	</div>
<?php }?><?php }} ?>
