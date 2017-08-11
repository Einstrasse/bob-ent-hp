<?php
	include_once('./include/no_not_logined.php');
	include_once('./include/db_conn.php');

	if (isset($_POST['title'])) {
		//echo $_POST['title'];
		$title = $_POST['title'];
		$script_cwd = $_SERVER['SCRIPT_FILENAME'];
		$pos = strrpos($script_cwd, "/");
		$cwd = substr($script_cwd, 0, $pos);
		$uploads_dir = 'images';
		
		$tmp_path = $_FILES["file_data"]["tmp_name"];
		$file_name = $_FILES["file_data"]["name"];
		
		$file_ext = substr(strrchr($file_name,"."),1);
		$file_ext = strtolower($file_ext);
		$time_stamp = microtime();
		$hash_val=hash('sha256', $time_stamp);
		$save_path = "$cwd/$uploads_dir/$hash_val.$file_ext";
		$uploader_id = $_SESSION['id'];
		move_uploaded_file($tmp_path, $save_path);
		$sql = "INSERT INTO file_data (`file_name`, `saved_path`, `file_ext`, `upload_date`, `uploader_id`, `title`) VALUES('".$file_name."', '".$save_path."', '".$file_ext."', NOW(), '".$uploader_id."', '".$title."')";
		mysql_query($sql) or die('DB query error');
		
		?>
<html>
	<meta charset="utf-8">
	<script>
		alert('스크린샷 파일 업로드 성공');
		location.href="./gallery.php";
	</script>
</html>
		<?php
		exit();
		
	} else {
		echo "title is not set";
	}
?>