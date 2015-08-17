<?php

$smarty->assign('is_use_image_zoom', true );

$ex = explode('/', $HTTP_URI);
$id = $ex[3];
if (isset($id)) {
	$data = $_DB->query( 'SELECT id, name, price, price1 salePrice1, warranty, stock FROM Product p WHERE id = '.$id );
	$smarty->assign('title', $data['name'][0] );
	$smarty->assign('product', $data );
	
	$data = $_DB->query( 'SELECT REPLACE(i.size, \'M\', \'\') id, REPLACE(i.localPath, \'/Remax Images/active/\', \'\') path
		FROM Product p
			LEFT JOIN Image i
				ON p.shop = i.shop
				AND p.sku = i.id
		WHERE p.shop = 1
			AND p.id = \''.$id.'\'
			AND i.size LIKE \'%M\'' );
	$id_cover = '';
	for($i=0; $i<count($data['path']); $i++){
		$path[$data['id'][$i]]['path'] = str_replace('_m', '_l', $data['path'][$i]);
		$path[$data['id'][$i]]['path_s'] = str_replace('_m', '_s', $data['path'][$i]);
		if ($id_cover == '') {
			$id_cover = $data['id'][$i];
			$product['image'] = $path[$data['id'][$i]]['path_s'];
		}
	}
	if ( isset($data['id'][0]) ) {
		$smarty->assign('image', $path );
	}
	else {
		$product['image'] = 'products/box.png';
	}

	$smarty->assign('id_cover', $id_cover );

}

?>