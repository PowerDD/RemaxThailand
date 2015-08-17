<?php

$_MSSQL['server'] = 'tcp:g1p9k4uppk.database.windows.net,1433';
$_MSSQL['username'] = 'shop24fin@g1p9k4uppk';
$_MSSQL['password'] = 'P@ssw0rd@24fin';
$_MSSQL['database'] = 'shop24fin_db';

$_SYSTEM['session_expire'] = 120; //minutes
$_SYSTEM['error_message'] = '';
$_SYSTEM['api_url'] = 'https://api.24fin.com/';
$_SYSTEM['api_key'] = 'BBBCA982-5F75-4D00-8602-10404250D3EE';
$_SYSTEM['api_url_new'] = 'http://24fin-api.azurewebsites.net';
$_SYSTEM['url'] = 'http://www.remaxthailand.co.th/';

$_AZURE['service_url']						= 'https://shop24fin.azure-mobile.net/';
$_AZURE['service_key']					= 'SSAvHZNUxSDkhoryzBozdDNgDfimWX31';

$_CHART['color']		= array('115A8C', '02B49E', '2DC1D4', 'F2E981', 'FBD380', 'F6C9CD', 'FAE7D3', 'F37560', 'E14298', 'BD362E'); //, 'A835A1');

//session_set_cookie_params(0, '/', '.24fin.com');
session_start();

function encode($string, $key) {
    return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));
}

function decode($string, $key) {
    return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
}

?>