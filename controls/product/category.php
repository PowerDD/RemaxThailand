<?php

$smarty->assign('is_use_lazy_load', true);

$ex = explode('/', $HTTP_URI);
//$_DB->execute( 'EXEC ProductReplaceJunkMessage' );

$url = 'http://api.powerdd.com/product/info';
$data = array('apiKey' => 'BE12B369-0963-40AD-AA40-D68A7516A37B','shop' => 'POWERDDH-8888-8888-B620-48D3B6489999', 'type' => 'byCategoryUrl4Web', 'value' => $ex[3]);

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


$smarty->assign('category_name', $ex[3]);
//$smarty->assign('title', $ex[3]);
//$smarty->assign('product', $_DB->query( 'EXEC ProductCategoryRemaxSelect 2, \''.$ex[3].'\'' ) );

?>