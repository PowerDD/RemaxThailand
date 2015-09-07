<?php

$smarty->assign('is_use_lazy_load', true);

//$_DB->execute( 'EXEC ProductReplaceJunkMessage' );

$url = 'http://api.powerdd.com/product/info';
$data = array('shop' => 'POWERDDH-8888-8888-B620-48D3B6489999', 'type' => 'byCategoryUrl4Web', 'value' => $ex[3]);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);


$smarty->assign('api-data', $result );


$ex = explode('/', $HTTP_URI);
$smarty->assign('category_name', $ex[3]);
//$smarty->assign('title', $ex[3]);
$smarty->assign('product', $_DB->query( 'EXEC ProductCategoryRemaxSelect 2, \''.$ex[3].'\'' ) );

?>