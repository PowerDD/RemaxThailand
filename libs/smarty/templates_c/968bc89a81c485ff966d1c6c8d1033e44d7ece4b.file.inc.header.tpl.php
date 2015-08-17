<?php /* Smarty version Smarty-3.1.18, created on 2015-03-29 12:53:37
         compiled from "D:\home\site\wwwroot\screens\inc.header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28647548e58e3095af9-11114452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '968bc89a81c485ff966d1c6c8d1033e44d7ece4b' => 
    array (
      0 => 'D:\\home\\site\\wwwroot\\screens\\inc.header.tpl',
      1 => 1427656668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28647548e58e3095af9-11114452',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_548e58e33c5940_88560481',
  'variables' => 
  array (
    'title' => 0,
    'system_url' => 0,
    'api_url' => 0,
    'api_key' => 0,
    'api_url_new' => 0,
    'service_url' => 0,
    'service_key' => 0,
    'filename' => 0,
    'category_name' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e58e33c5940_88560481')) {function content_548e58e33c5940_88560481($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 : Remax (Thailand) Co.,Ltd.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="https://src.24fin.com/site/seller/favicon.ico" type="image/x-icon">
	<link rel="icon" href="https://src.24fin.com/site/seller/favicon.ico" type="image/x-icon">
        <link href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css" rel="stylesheet">
        <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
/styles/style" rel="stylesheet">
        <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	<input type="hidden" id="api_url" value="<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
">
	<input type="hidden" id="api_key" value="<?php echo $_smarty_tpl->tpl_vars['api_key']->value;?>
">
	<input type="hidden" id="api_url_new" value="<?php echo $_smarty_tpl->tpl_vars['api_url_new']->value;?>
">
	<?php if (isset($_SESSION['member']['id'])) {?>
		<input type="hidden" id="member_id" value="<?php echo $_SESSION['member']['id'];?>
">
		<input type="hidden" id="service_url" value="<?php echo $_smarty_tpl->tpl_vars['service_url']->value;?>
">
		<input type="hidden" id="service_key" value="<?php echo $_smarty_tpl->tpl_vars['service_key']->value;?>
">
		<script src="//ajax.aspnetcdn.com/ajax/mobileservices/MobileServices.Web-1.1.0.min.js"></script>
	<?php }?>

    <div class="container">

	<nav role="navigation" class="navbar navbar-default navbar-fixed-top nav-shadow">
		<div class="container">
			<div class="navbar-header">
				<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
" class="navbar-brand"><img src="https://src.24fin.com/images/remaxthailand/logo.png"></a>
			</div>

			<div class="navbar-collapse collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li<?php if ($_smarty_tpl->tpl_vars['filename']->value=='home') {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
">หน้าหลัก</a></li>
					<li<?php if (strpos($_smarty_tpl->tpl_vars['filename']->value,'about_us')!==false) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
/about_us">เกี่ยวกับเรา</a></li>
					<li class="dropdown<?php if ($_smarty_tpl->tpl_vars['filename']->value=='product/category') {?> active<?php }?>">
						<a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">หมวดหมู่สินค้า <span class="caret"></span></a>
						<ul role="menu" class="dropdown-menu">
							<li<?php if (isset($_smarty_tpl->tpl_vars['category_name']->value)&&$_smarty_tpl->tpl_vars['category_name']->value=='new') {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
/product/category/new">New Arrivals</a></li>
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
									<li<?php if (isset($_smarty_tpl->tpl_vars['category_name']->value)&&$_smarty_tpl->tpl_vars['category_name']->value==$_smarty_tpl->tpl_vars['category']->value['url'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
/product/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['url'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']];?>
</a></li>
								<?php }?>
							<?php endfor; endif; ?>
						</ul>
					</li>
					<li<?php if (strpos($_smarty_tpl->tpl_vars['filename']->value,'contact_us')!==false) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
/contact_us">ติดต่อเรา</a></li>
					<li<?php if (strpos($_smarty_tpl->tpl_vars['filename']->value,'payment')!==false) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
/payment">วิธีการชำระเงิน</a></li>
				</ul>
				<form class="navbar-form navbar-left" role="search" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
/product/search">				
					<div class="input-group">
						<input type="text" class="form-control" id="keyword" name="keyword" placeholder="ค้นหาสินค้า" value="<?php if (isset($_POST['keyword'])) {?><?php echo $_POST['keyword'];?>
<?php }?>">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="button" id="btn-search"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</form>

				<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['member']['id'])) {?>
					<li class="dropdown">
						<a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-user"></i> สวัสดีค่ะ คุณ<?php echo $_SESSION['member']['firstName'];?>
 <span class="caret"></span></a>
						<ul role="menu" class="dropdown-menu">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
/member/">หน้าหลัก</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
/member/barcode">Scan Barcode</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
/member/profile">ข้อมูลร้านค้า</a></li>
							<li role="presentation" class="divider"></li>
							<li><a href="https://auth.24fin.com/remax/logout">ออกจากระบบ</a></li>
						</ul>
					</li>
				<?php } else { ?>
					<li><a href="https://24fin-backend.azurewebsites.net">เข้าสู่ระบบ/สมัครสมาชิก</a></li>
				<?php }?>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

	<div class="nav-bottom"></div><?php }} ?>
