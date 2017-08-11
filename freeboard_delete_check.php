<?php
	include_once('./include/no_not_logined.php');
	include_once('./include/db_conn.php');
	header("Content-Type: text/html; charset=UTF-8");
	if(isset($_GET['no'])) {
		$writer_id=$_SESSION['id'];
		$sql = "DELETE FROM freeboard_item WHERE (`writer_id`='".$writer_id."' OR 'admin'='".$writer_id."') AND `item_no`=".$_GET['no'];
		mysql_query($sql) or die('DB error');
		
		?>
<html>
	<meta charset='utf-8'>
	<body>
		<script>
			alert('글이 정상적으로 삭제되었습니다.');
			location.href="./freeboard.php";
		</script>
	</body>
</html>
			
		<?php
		exit();
	}
?>