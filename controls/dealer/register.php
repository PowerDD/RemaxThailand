<?php
$ex = explode('/', $HTTP_URI);
$smarty->assign('referer', $_SERVER['HTTP_REFERER']);

if ( isset($_FILES['file1']['name']) || isset($_FILES['file2']['name']) || isset($_FILES['file3']['name']) || isset($_FILES['file4']['name']) ) {
	$img = '';
	for ( $i=1; $i<=4; $i++ ) {
		$targetFile = dirname(__FILE__).'\\..\\..\\img\\'.$_POST['member_id'].'-'.$i;
		//echo $targetFile.'<br>';
		if (isset($_FILES['file'.$i]['name']) && $_FILES['file'.$i]['name'] != '') {
			$fileExtension = strtolower(strtolower(pathinfo($_FILES['file'.$i]['name'], PATHINFO_EXTENSION)));
			if (move_uploaded_file($_FILES['file'.$i]["tmp_name"], $targetFile.'.'.$fileExtension)) {
				$img .= $i.'|';
				$isUpload = true;
			}
		}
	}
	$smarty->assign('image_list', $img);
	$smarty->assign('screen_action', 'upload');
	$data = $_DB->query( 'SELECT name, lastname, email, province FROM TempMember WHERE id = \''.$ex[3].'\'');
	$smarty->assign('member', $data);
	$smarty->assign('member_ref', $ex[3]);
	$smarty->assign('member_id', $_POST['member_id']);
}
else if ( isset($ex[3]) && $ex[3] != '' ) {
	$data = $_DB->query( 'SELECT name, lastname, email, province FROM TempMember WHERE id = \''.$ex[3].'\'');
	if ( isset($data['name'][0]) ) {
		$smarty->assign('member', $data);
		$smarty->assign('screen_action', 'information');
		$smarty->assign('district', $_DB->query( 'SELECT id, nameTh name, zipCode FROM District WHERE province = '.$data['province'][0].' ORDER BY nameTh'));
		$smarty->assign('member_ref', $ex[3]);
	}
	else {
		$smarty->assign('screen_action', 'register');
	}
	$smarty->assign('province', $_DB->query( 'SELECT id, nameTh name FROM Province ORDER BY nameTh'));
}
else {
	$smarty->assign('screen_action', 'register');
	$smarty->assign('province', $_DB->query( 'SELECT id, nameTh name FROM Province ORDER BY nameTh'));
}

?>