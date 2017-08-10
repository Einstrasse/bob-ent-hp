<?php
	session_start();
	if(!isset($_SESSION['id'])) {
		?>
			<html>
				<head>
					<meta charset="utf-8">
				</head>
				<body>
					<script>
						alert('로그인하셔야 접근 가능합니다.');
						location.href="./login.php";
					</script>
				</body>
			</html>
		<?php
		exit();
	}
?>