<?php

require_once 'config.inc.php';
require_once 'libs/sqlsrv.class.php';
require_once 'libs/smarty/Smarty.class.php';

$HTTP_URL = isset($_SERVER['HTTP_URL']) ? $_SERVER['HTTP_URL'] : $_SERVER['HTTP_HOST'];
$HTTP_URI = isset($_SERVER['HTTP_URI']) ? $_SERVER['HTTP_URI'] : $_SERVER['REQUEST_URI'];

if( strpos($HTTP_URI, '/auth/') !== false ) {
	header('Location: https://24fin-backend.azurewebsites.net'.$HTTP_URI);
	exit;
}

require_once 'process.inc.php';

$smarty = new Smarty;
$smarty->setTemplateDir( __DIR__.'\screens' );
$smarty->setCompileDir( __DIR__.'\libs\smarty\templates_c' );
$smarty->setCacheDir( __DIR__.'\libs\smarty\cache' );
$smarty->setConfigDir( __DIR__.'\libs\smarty\configs' );
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

$filename = ($HTTP_URI == '/') ? 'home' : substr($HTTP_URI, 1);
$ex = explode('/', $filename);
if (count($ex) >= 2) {
	$filename = $ex[0].'/'.(($ex[1] == '') ? 'home' : $ex[1]);
	if (!file_exists( 'screens/'.$filename.'.tpl' )) {
		$filename = $ex[0].'/home';
		if (!file_exists( 'screens/'.$filename.'.tpl' )) {
			$filename = '404';
		}
	}

	if ( $ex[0] == 'auth' && strlen($ex[1]) > 10 ) {
		$_SESSION['id'] = $ex[1];
	}
}

$title = 'หน้าหลัก';
switch($filename) {
	case 'warranty_condition' : $title = 'เงื่อนไขการรับประกัน'; break;
	case 'about_us' : $title = 'เกี่ยวกับเรา'; break;
	case 'contact_us' : $title = 'ติดต่อเรา'; break;
	case 'member/home' : $title = 'หน้าหลัก'; break;
	case 'member/barcode' : $title = 'Scan Barcode'; break;
	case 'member/profile' : $title = 'ข้อมูลร้านค้า'; break;
	case 'product/category' : $title = 'หมวดหมู่สินค้า'; break;
	case 'product/payment' : $title = 'วิธีการชำระเงิน'; break;	
}
$smarty->assign('title', $title);
$smarty->assign('description', $title);

if (file_exists( 'controls/'.$filename.'.php' )) require_once 'controls/'.$filename.'.php';


$smarty->assign('category', $_DB->query( 'EXEC ProductGroupSelect 2' ) );
$smarty->assign('filename', $filename);
$smarty->assign('system_url', '//'.$HTTP_URL);
$smarty->assign('api_url', $_SYSTEM['api_url']);
$smarty->assign('api_key', $_SYSTEM['api_key']);
$smarty->assign('api_url_new', $_SYSTEM['api_url_new']);
$smarty->assign('service_url', $_AZURE['service_url']);
$smarty->assign('service_key', $_AZURE['service_key']);

$smarty->display('index.tpl');

?>