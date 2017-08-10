<?php session_start();
unset($_SESSION['id']);
session_destroy();

if (!isset($_SESSION['id'])) {
	?>
	<html>
		<head>
			<meta charset="utf-8">
		</head>
		<body>
			<script>
				alert('로그아웃 되었습니다.');
				location.href='./login.php';
			</script>
		</body>
		
	</html>

	<?php
	
}
// echo "<script language='javascript'>\n";
// echo "history.go(-1);\n";
// echo "</script>";
?>