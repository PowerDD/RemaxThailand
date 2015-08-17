<?php

$smarty->assign('is_use_lazy_load', true);

//$_DB->execute( 'EXEC ProductReplaceJunkMessage' );

$ex = explode('/', $HTTP_URI);
$smarty->assign('category_name', $ex[3]);
//$smarty->assign('title', $ex[3]);
$smarty->assign('product', $_DB->query( 'EXEC ProductCategoryRemaxSelect 2, \''.$ex[3].'\'' ) );

?>