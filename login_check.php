<?php
	include_once('./include/db_conn.php');
			
if (isset($_POST["id"]) && isset($_POST["pw"])) {
	
	$id=$_POST["id"];
	$pw=$_POST["pw"];

	$sql = 'select `user_id`, `password`, `username` from site_user where user_id=\''.$id.'\' and password=PASSWORD("'.$pw.'")';
	
	$result=mysql_query($sql);
	if ($result) {
		//login success
		$row = mysql_fetch_array($result);
		// echo $id.'<br>';
		// echo $pw.'<br>';
		$username = $row['username'];
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;
		// echo $username;
		echo 'login success';
	} else {
		//login failed
		echo 'login failed';
	}
}

?>