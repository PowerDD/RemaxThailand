<?php

$data = $_DB->query('EXEC RemaxShopPoint \''.$_SESSION['member']['id'].'\'');
$smarty->assign('sum_point', ($data['shopPoint'][0] != '') ? $data['shopPoint'][0]*1 : null);
$smarty->assign('sum_money', $data['shopMoney'][0]*1);

?>