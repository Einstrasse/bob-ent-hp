<?php
	include_once('./include/db_conn.php');

	if (isset($_POST['title']) && isset($_POST['contents'])) {
		
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