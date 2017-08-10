<?php
	include_once('./include/no_not_logined.php');
	include_once('./include/db_conn.php');

	if (isset($_POST['title'])) {
		echo $_POST['title'];
		
		$script_cwd = $_SERVER['SCRIPT_FILENAME'];
		$pos = strrpos($script_cwd, "/");
		$cwd = substr($script_cwd, 0, $pos);
		$uploads_dir = 'images';
		
		$tmp_path = $_FILES["file_data"]["tmp_name"];
		$file_name = $_FILES["file_data"]["name"];
		
		move_uploaded_file($tmp_path, "$cwd/$uploads_dir/$file_name");
	} else {
		echo "title is not set";
	}
?>