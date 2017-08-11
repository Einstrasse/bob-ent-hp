<?php
	include_once('./include/no_not_logined.php');
	include_once('./include/db_conn.php');
	if (isset($_GET['no'])) {
		$no = $_GET['no'];
		$uploader_id = $_SESSION['id'];
		$script_cwd = $_SERVER['SCRIPT_FILENAME'];
		$pos = strrpos($script_cwd, "/");
		$cwd = substr($script_cwd, 0, $pos);
		
		$find_sql = "SELECT `saved_path` FROM file_data WHERE `file_no`=$no";
		$result = mysql_query($find_sql);
		$row = mysql_fetch_array($result);
		
		$saved_path = $row['saved_path'];
		
		$abs_path = "$cwd/$saved_path";
		unlink($abs_path);
		$del_sql = "DELETE FROM file_data WHERE `file_no`=$no AND (`uploader_id`='$uploader_id' OR '$uploader_id'='admin')";
		mysql_query($del_sql) or die('DB query error');
		
		?>
		<html>
			<meta charset="utf-8">
			<script>
				alert('사진이 정상적으로 삭제되었습니다.');
				location.href='./gallery.php';
			</script>
		</html>
		<?php
		exit();
		
	} else {
		?>
		<html>
			<meta charset="utf-8">
			<script>
				alert('잘못된 접근입니다.');
				location.href='./gallery.php';
			</script>
		</html>
		<?php
	}
?>