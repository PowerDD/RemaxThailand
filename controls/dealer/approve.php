<?php
$ex = explode('/', $HTTP_URI);
$smarty->assign('member_id', $ex[3]);

if ($ex[4] == '0') {
	$_DB->query( 'DELETE FROM Member WHERE id = \''.$ex[3].'\'');
	$_DB->query( 'DELETE FROM MemberAddress WHERE member = \''.$ex[3].'\'');
	$_DB->query( 'DELETE FROM MemberMapping WHERE member = \''.$ex[3].'\'');
	$_DB->query( 'DELETE FROM Coupon WHERE member = \''.$ex[3].'\'');
	$smarty->assign('screen_action', 'reject');
}
else {
	$_DB->query( 'UPDATE MemberMapping SET sellPrice = '.$ex[4].', memberType = \'member\', updateDate = GETDATE() WHERE member = \''.$ex[3].'\'');
	$_DB->query( 'EXEC sp_CouponDealerRegister \''.$ex[3].'\'');
	$data = $_DB->query( 'SELECT code FROM Coupon WHERE member = \''.$ex[3].'\'');
	$smarty->assign('code', $data['code'][0]);
	$smarty->assign('screen_action', 'approved');
}
?>