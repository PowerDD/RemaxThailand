<?php

$smarty->assign('color', $_CHART['color']);

$data = $_DB->query('EXEC RemaxShopPoint \''.$_SESSION['member']['id'].'\'');
$smarty->assign('sum_point', ($data['shopPoint'][0] != '') ? $data['shopPoint'][0]*1 : null);
$smarty->assign('sum_money', $data['shopMoney'][0]*1);

$data = $_DB->query('EXEC RemaxShopCategory \''.$_SESSION['member']['id'].'\', \''.date('Ym').'\'');
$sum = 0;
if (isset($data['group'])) {
	for ($i=0; $i<count($data['group']); $i++) {
		$group['2-'.$data['group'][$i]] = $data['cnt'][$i];
		$sum += $data['cnt'][$i]*1;
	}
	$smarty->assign('category_count', $group);
}
$smarty->assign('category_sum', $sum);


?>