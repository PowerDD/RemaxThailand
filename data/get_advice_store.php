<?php

$line = file_get_contents('region.txt');
$line = explode("\n", $line);
for($i=0; $i<count($line); $i++){
	$ex = explode("\t", $line[$i]);
	$province = file_get_contents($ex[0].'.txt');
	$province = explode("\n", $province);
	for($j=0; $j<count($province); $j++){

		$in_charset = 'TIS-620';   // == 'windows-874'
		$out_charset = 'UTF-8';

		$opts = array(
		  'http'=>array(
			'method'=>"GET",
			'header'=> implode("\r\n", array(
						   'Content-type: text/plain; charset=' . $in_charset
						))
		  )
		);

		$context = stream_context_create($opts);

		$html = file_get_contents('http://advice.co.th/wheretobuy/index.php/wheretobuy/map/province/'.$province[$j].'/', false, $context);

		$ex = explode('themes/wheretobuy_som/img/adis.png', $html);
		$ex = explode('</span>', $ex[1]);

		//header('Content-type: text/html; charset=' . $out_charset);
		header('Content-type: text/html; charset=' . $in_charset);

		echo $ex[0];




		//$html = file_get_contents('http://advice.co.th/wheretobuy/index.php/wheretobuy/map/province/'.$province[$j].'/');
		//$html = mb_convert_encoding($html, 'HTML-ENTITIES', 'TIS-620');
		//print_r ( $html );
		exit;
	}
	//print_r( $province );
	//http://advice.co.th/wheretobuy/index.php/wheretobuy/map/province/xxx/
	//
}

?>