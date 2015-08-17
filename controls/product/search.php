<?php

if (isset($_POST['keyword']) && $_POST['keyword'] != '') {
	$smarty->assign('product', $_DB->query( 'EXEC ProductIdeanovaSearch 2, \''.$_POST['keyword'].'\'' ) );
}

?>