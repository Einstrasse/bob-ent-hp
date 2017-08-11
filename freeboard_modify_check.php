<?php
	include_once('./include/no_not_logined.php');
	include_once('./include/db_conn.php');
	header("Content-Type: text/html; charset=UTF-8");

	if (isset($_POST['title']) && isset($_POST['contents']) && isset($_POST['no'])) {
		$writer_id=$_SESSION['id'];
		$item_no=$_POST['no'];
		$title=$_POST['title'];
		$contents=addslashes($_POST['contents']);
		
		$sql="UPDATE freeboard_item SET `title` = '".$title."', `contents` = '".$contents."', `update_date`=NOW() WHERE `item_no`=".$item_no;
		//echo htmlspecialchars($sql);
		mysql_query($sql) or die('글 수정 실패');
		?>
		<html>
			<head>
				<meta charset="utf-8">
			</head>	
			<body>
				<script>
					alert('글이 정상적으로 수정되었습니다.');
					location.href="./freeboard.php";
				</script>
			</body>
		</html>
		<?php
		
		exit();
	} else {
		?>
		<html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
				<script>
					alert('잘못된 요청입니다.');
					history.go(-1);
				</script>
			</body>
		</html>

		<?php
		exit();
	}
?>