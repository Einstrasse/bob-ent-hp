<?php
	session_start();
	if(isset($_SESSION['id'])) {
		?>
			<html>
				<head>
					<meta charset="utf-8">
				</head>
				<body>
					<script>
						alert('로그인 상태에서는 접근하실 수 없습니다.');
						location.href="./index.php";
					</script>
				</body>
			</html>
		<?php
		exit();
	}
?>