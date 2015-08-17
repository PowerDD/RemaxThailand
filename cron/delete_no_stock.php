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

$data = $_DB->query( 'SELECT sku FROM shop24fin.Product WHERE stock = 0' );
while(isset($data['sku']) && count($data['sku']) > 0 ) {
	$sql = 'DELETE UpdateProduct WHERE ProductCode IN (';
	$cnt = count($data['sku']);
	for( $i=0; $i<$cnt; $i++ ) {
		$sql .= '\''.$data['sku'][$i].'\''.(($i != $cnt-1) ? ', ' : '');
	}
	$_DB2->execute( $sql.')' );
	$data = $_DB->query( 'SELECT sku FROM shop24fin.Product WHERE stock = 0' );
}

echo 'OK';

?>