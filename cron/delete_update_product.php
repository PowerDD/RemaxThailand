<?php

require_once '../config.inc.php';
require_once '../libs/sqlsrv.class.php';

$_DB = new sqlsrv($_MSSQL);
if ($_DB != true) { echo $_DB.' error'; exit; }

$data = $_DB->query('EXEC ShopConnection \'db-2\'');
$param = unserialize(decode($data['param'][0], $data['keyword'][0]));
$param['server'] = $data['ip'][0].','.$data['port'][0];
$_DB2 = new sqlsrv($param);
if ($_DB2 != true) { echo $_DB2; exit; }

$_DB2->execute( 'TRUNCATE TABLE UpdateProduct' );

echo 'OK';

?>