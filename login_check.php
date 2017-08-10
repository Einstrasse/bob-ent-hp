<?php
	include_once('./include/db_conn.php');
			
if (isset($_POST["id"]) && isset($_POST["pw"])) {
	
	$id=$_POST["id"];
	$pw=$_POST["pw"];

	$sql = 'select `user_id`, `password`, `username` from site_user where user_id=\''.$id.'\' and password=PASSWORD("'.$pw.'")';
	//echo $sql;
	$result=mysql_query($sql);
	$row = mysql_fetch_array($result);
	if ($result && $row) {
		//login success
		// echo $id.'<br>';
		// echo $pw.'<br>';
		$username = $row['username'];
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;
		// echo $username;
		//echo 'login success';
		
		?>

		<html>
			<head>
				<meta charset="utf-8">
			</head>
			<script>
				alert('로그인 성공');
				location.href="./index.php";
			</script>
		</html>

		<?php		
		
		
	} else {
		//login failed
		?>

		<html>
			<head>
				<meta charset="utf-8">
			</head>
			<script>
				alert('로그인 실패');
				location.href="./login.php";
			</script>
		</html>
		<?php
	}
}

?>