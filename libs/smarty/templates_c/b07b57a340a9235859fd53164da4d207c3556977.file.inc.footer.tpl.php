<?php /* Smarty version Smarty-3.1.18, created on 2015-05-26 16:47:45
         compiled from "D:\home\site\wwwroot\screens\inc.footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13340548e58e37652a4-92173638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b07b57a340a9235859fd53164da4d207c3556977' => 
    array (
      0 => 'D:\\home\\site\\wwwroot\\screens\\inc.footer.tpl',
      1 => 1432683947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13340548e58e37652a4-92173638',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_548e58e37a3d14_33061696',
  'variables' => 
  array (
    'is_use_lazy_load' => 0,
    'system_url' => 0,
    'filename' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e58e37a3d14_33061696')) {function content_548e58e37a3d14_33061696($_smarty_tpl) {?>	</div>

	<div class="container">

	<hr>

	<footer>
	    <div class="row">
	    	<div class="row text-center">
			<img src="https://src.24fin.com/images/icon/dbd.png">
		</div>
		<div class="col-lg-12 text-center margin-top-10">
		    <p>Copyright &copy; 2015 Remax (Thailand) Co.,Ltd. All rights reserved.</p>
		</div>
	    </div>
	</footer>

	</div>
	<!-- /.container -->

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<?php if (isset($_smarty_tpl->tpl_vars['is_use_lazy_load']->value)&&$_smarty_tpl->tpl_vars['is_use_lazy_load']->value) {?>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
	<?php }?>
	<!-- script src="//cdnjs.cloudflare.com/ajax/libs/masonry/3.2.1/masonry.pkgd.min.js"></script-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
/scripts/js.cookie"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
/scripts/main"></script>
	<?php if (file_exists((('js/').($_smarty_tpl->tpl_vars['filename']->value)).('.js'))) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system_url']->value;?>
/scripts/<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
"></script><?php }?>

    </body>
</html><?php }} ?>
