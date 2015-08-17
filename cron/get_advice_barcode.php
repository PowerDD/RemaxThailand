<?php

require_once '../config.inc.php';
require_once '../libs/sqlsrv.class.php';

$_DB = new sqlsrv($_MSSQL);
if ($_DB != true) { echo $_DB.' error'; exit; }

/*
$data = $_DB->execute( 'SELECT DISTINCT TOP 10 s.SN, p.ProductCode, p.Name, p.GroupId
FROM SellSN s
LEFT JOIN Product p
ON s.PN = p.PN
WHERE s.BranchNumber = 1
AND SellNumber IN (
	SELECT SellNumber FROM Sell 
	WHERE CustomerNumber IN (SELECT CustomerNumber FROM Customer WHERE Name LIKE \'%Advice%\')
	AND BranchNumber = 1
)' );*/

$data = $_DB->query('EXEC ShopConnection \'db-2\'');
$param = unserialize(decode($data['param'][0], $data['keyword'][0]));
$param['server'] = $data['ip'][0].','.$data['port'][0];
$_DB2 = new sqlsrv($param);
if ($_DB2 != true) { echo $_DB2; exit; }

$data = $_DB2->query( 'EXEC RemaxBarcodeForUpdate' );
while(isset($data['SN']) && count($data['SN']) > 0 ) {
	$sql = 'INSERT INTO shop24fin.RemaxBarcode (id, product, [group]) ';
	$sql2 = 'INSERT INTO UpdateRemaxBarcode ';
	$cnt = count($data['SN']);
	for( $i=0; $i<$cnt; $i++ ) {
		$sql .= 'SELECT \''.$data['SN'][$i].'\', '.$data['PN'][$i].', '.$data['GroupId'][$i].(($i != $cnt-1) ? ' UNION ALL ' : '');
		$sql2 .= 'SELECT \''.$data['SN'][$i].'\''.(($i != $cnt-1) ? ' UNION ALL ' : '');
	}
	$_DB->execute( $sql );
	$_DB2->execute( $sql2 );
	$data = $_DB2->query( 'EXEC RemaxBarcodeForUpdate' );
}

echo 'OK';

?>