<?php
	include_once('./include/no_not_logined.php');
	include_once('./include/db_conn.php');
	header("Content-Type: text/html; charset=UTF-8");

	if (isset($_POST['title']) && isset($_POST['contents'])) {
		$writer_id=$_SESSION['id'];
		
		$title=$_POST['title'];
		$contents=addslashes($_POST['contents']);
		
		$sql="INSERT INTO `freeboard_item` (`title`, `writer_id`, `contents`, `update_date`) VALUES('".$title."', '".$writer_id."', '".$contents."', NOW())";
		mysql_query($sql) or die('글 등록 실패');
		?>
		<html>
			<head>
				<meta charset="utf-8">
			</head>	
			<body>
				<script>
					alert('글이 정상적으로 작성되었습니다.');
					location.href="./freeboard.php";
				</script>
			</body>
		</html>
		<?php
		//echo htmlspecialchars($sql);
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