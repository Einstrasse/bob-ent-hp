<html>
	<meta charset="utf-8">
<?php
	include_once("./db_conn.php");

	if(isset($_SESSION['id'])) {
		echo "Hi, ".$_SESSION['id'];
		echo "<br>".$_SESSION['username'];
		//session is set
	} else {
		exit('User not logon');
	}
?>
</html>