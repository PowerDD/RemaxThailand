<?php

class sqlsrv {
	var $con;

	function __construct($db=array()) {
		$this->error_message = '';

		$this->con = sqlsrv_connect($db['server'], array('UID'=>$db['username'], 'PWD'=>$db['password'], 'Database'=>$db['database'], 'MultipleActiveResultSets'=>true, "CharacterSet" => 'UTF-8'));
		sqlsrv_configure('WarningsReturnAsErrors', 0);

		if($this->con === false){
			return print_r(sqlsrv_errors(), true);
		}
		return true;
	}

	function __destruct() {
		sqlsrv_close($this->con);
	}

	function query($query='') {
		$data = null;
		$stmt = sqlsrv_query($this->con, $query);
		if(!$stmt) {
			return print_r(sqlsrv_errors(), true);
		}
		else {			
			while( $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC) ) {
				foreach ($row as $key => $val) {
					$data[$key][] = $val;
				}
			}
			sqlsrv_free_stmt( $stmt);
			return $data;
		}
	}

	function execute($query='') {
		$stmt = sqlsrv_prepare($this->con, $query);
		if(!$stmt) {
			return print_r(sqlsrv_errors(), true);
		}
		else if( sqlsrv_execute( $stmt ) === false ) {
			return print_r( sqlsrv_errors(), true);
		}
		return true;
	}

}

?>