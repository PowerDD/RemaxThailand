<?php

$smarty->assign('is_use_image_zoom', true );

$ex = explode('/', $HTTP_URI);
$id = $ex[3];
if (isset($id)) {

	$url = 'http://api.powerdd.com/product/info';
	$data = array('apiKey' => 'BE12B369-0963-40AD-AA40-D68A7516A37B','shop' => 'POWERDDH-8888-8888-B620-48D3B6489999', 'type' => 'item', 'value' => $id);

	$options = array(
		'http' => array(
			'header'  => "Referer: http://remaxthailand.co.th\r\n".
				"Content-type: application/x-www-form-urlencoded\r\n",
			'method'  => 'POST',
			'content' => http_build_query($data),
		),
	);
	$context  = stream_context_create($options);
	$result = json_decode(file_get_contents($url, false, $context), true);

	$smarty->assign('product', $result['result'] );

	$smarty->assign('title', $result['result']['name'] );
	$smarty->assign('description', implode("\n\r",$result['result']['detail']) );

}

?>