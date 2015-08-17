<?php

//Fix bug for rewrite rule
if (strpos($_SERVER['REQUEST_URI'], '/styles/') !== false) {
	header('Content-type: text/css');
	echo file_get_contents('css/'.str_replace('/styles/', '', $_SERVER['REQUEST_URI']).'.css');
	exit;
}
else if (strpos($_SERVER['REQUEST_URI'], '/scripts/') !== false) {
	header('Content-type: application/javascript');
	echo file_get_contents('js/'.str_replace('/scripts/', '', $_SERVER['REQUEST_URI']).'.js');
	exit;
}
else if (strpos($_SERVER['REQUEST_URI'], '/images/logo/') !== false) {
	//header('Content-type: application/javascript');
	echo file_get_contents('img/'.str_replace('/images/', '', $_SERVER['REQUEST_URI']).'.png');
	exit;
}
else if (strpos($_SERVER['REQUEST_URI'], '/images/') !== false) {
	//header('Content-type: application/javascript');
	echo file_get_contents('img/'.str_replace('/images/', '', $_SERVER['REQUEST_URI']).'.jpg');
	exit;
}

$ex = explode('/', $HTTP_URI);
$system_type = isset($ex[1]) ? $ex[1] : '';

$_DB = new sqlsrv($_MSSQL);
if ($_DB != true) {
	$_SYSTEM['error_message'] = $_DB;
}

if ( isset($_SESSION['id']) || $system_type == 'member') {
	$result = $_DB->execute( 'EXEC LoginDeleteExpire '.$_SYSTEM['session_expire'] );
	if ($result != true) $_SYSTEM['error_message'] = $result;

	$result = $_DB->execute( 'UPDATE shop24fin.Login SET __updatedAt = GETDATE() WHERE id = \''.$_SESSION['id'].'\'' );
	if ($result != true) echo $_SYSTEM['error_message'] = $result;

	$data = $_DB->query( 'SELECT memberId, memberType FROM shop24fin.Login WHERE id = \''.$_SESSION['id'].'\' GROUP BY memberId, memberType' );
	if ( !isset($data['memberId'][0]) && $system_type == 'member') {
		header('Location: https://auth.24fin.com/remax');
		exit;
	}
	else if ( isset($data['memberId'][0]) ) {
		if (!isset($_SESSION['member']['memberId']) ||
			(isset($_SESSION['member']['memberId']) && $_SESSION['member']['memberId'] != $data['memberId'][0]) ||
			(isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], 'auth.24fin.com') !== false )
			) { // ถ้าไม่เคยดึงข้อมูลมาเก็บใน Session ให้ดึงข้อมูลมาใหม่
			$_SESSION['member']['memberId']				= $data['memberId'][0];
			$_SESSION['member']['memberType']		= $data['memberType'][0];
			$_SESSION['member']['isMember']					= true;

			$data = $_DB->query( '
					SELECT m.id, m.email, m.firstName, m.loginCount
					FROM shop24fin.Member m
					WHERE m.memberId = \''.$data['memberId'][0].'\' AND m.memberType = \''.$data['memberType'][0].'\'
			');
			if ( isset($data['id'][0]) ) {
				$_SESSION['member']['id']			= $data['id'][0];
				$_SESSION['member']['email']				= $data['email'][0];
				$_SESSION['member']['firstName']		= $data['firstName'][0];
				$_SESSION['member']['loginCount']		= $data['loginCount'][0];

				$data = $_DB->query( 'SELECT type FROM shop24fin.RemaxShop WHERE member = \''.$_SESSION['member']['id'].'\'');
				if (isset($data['type'])) {
					$_SESSION['shop']['type']			= $data['type'][0];
				}
				else {
					$_DB->execute( 'DELETE shop24fin.Login WHERE id = \''.$_SESSION['id'].'\'' );
					unset($_SESSION['member']['memberId'], $_SESSION['member'], $_SESSION['shop']);
					header('Location: https://auth.24fin.com/remax');
					exit;
				}

			}
			else {
				$_SYSTEM['error_message'] = $data;
				unset($_SESSION['member']['memberId'], $_SESSION['member'], $_SESSION['shop']);
			}
		}
	}
	else {
		$_SYSTEM['error_message'] = $data;
		unset($_SESSION['member']['memberId'], $_SESSION['member'], $_SESSION['shop']);
	}


}

?>