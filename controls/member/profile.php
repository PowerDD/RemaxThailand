<?php

$smarty->assign('shop', $_DB->query('SELECT type, province, name, address, telephone, fax
	FROM shop24fin.RemaxShop 
	WHERE member = \''.$_SESSION['member']['id'].'\'') );

$data = $_DB->query('SELECT firstName, email, loginCount, nickname, mobile, username, 
	DATEDIFF(s, \'19700101\', __createdAt) createDate, 
	DATEDIFF(s, \'19700101\', __updatedAt) updateDate
	FROM shop24fin.Member
	WHERE id = \''.$_SESSION['member']['id'].'\'');

$data['createDate'][0] = gmdate('d-m-Y H:i:s', $data['createDate'][0]+(7*60*60));
$data['updateDate'][0] = gmdate('d-m-Y H:i:s', $data['updateDate'][0]+(7*60*60));

$smarty->assign('contact', $data);

?>