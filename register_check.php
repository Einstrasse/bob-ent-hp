<?php
	include_once('./include/db_conn.php');

	if (isset($_POST['user_id']) && isset($_POST['user_name']) && isset($_POST['password'])) {
		$user_id=$_POST['user_id'];
		$user_name=$_POST['user_name'];
		$password=$_POST['password'];
		
		$dup_chk_sql= 'select * from site_user where user_id=\''.$user_id.'\'';
		$result=mysql_query($dup_chk_sql);
		$row = mysql_fetch_array($result);
		if ($result && $row) {
			?>
			<html>
				<head>
					<meta charset="utf-8">
				</head>
				<script>
					alert('중복 아이디가 있습니다.');
					history.go(-1);
				</script>
			</html>
			<?php
			exit();
		}
		
		$sql = "INSERT INTO `site_user` (`user_id`, `password`, `username`) VALUES('".$user_id."', PASSWORD('".$password."'), '".$user_name."')";
		mysql_query($sql) or die('회원가입 실패');
		$_SESSION['username'] = $user_name;
		$_SESSION['id'] = $user_id;
		?>
			<html>
				<head>
					<meta charset="utf-8">
				</head>
				<script>
					alert('회원가입 성공! 반갑습니다. "<?php echo $user_name; ?>"님');
					location.href="./index.php";
				</script>
			</html>
		<?php
		//echo $sql;
	} else {
		?>
		<html>
				<head>
					<meta charset="utf-8">
				</head>
				<script>
					alert('잘못된 요청입니다.');
					history.go(-1);
				</script>
			</html>
		<?php
		exit();
	}
?>