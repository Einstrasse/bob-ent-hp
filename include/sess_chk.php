<?php
	include_once("./db_conn.php");

	if(isset($_SESSION['id'])) {
		echo "Hi, ".$_SESSION['id'];
		//session is set
	} else {
		exit('User not logon');
	}
?>