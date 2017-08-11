<?php
	include_once('./include/no_not_logined.php');
	include_once('./include/db_conn.php');
	header("Content-Type: application/json; charset=UTF-8");
	if (!isset($_GET['skip'])) {
		$skip=0;
	} else {
		$skip=$_GET['skip'];
	}

	if (!isset($_GET['limit'])) {
		$limit=10;
	} else {
		$limit=$_GET['limit'];
	}

	$sql= 'SELECT `item_no`, `title`, `hit`, `update_date`, `writer_id` FROM freeboard_item ORDER BY `update_date` DESC LIMIT '.$skip.', '.$limit.';';
	$return_arr = array();

	$fetch = mysql_query($sql); 

	//while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) {
	while ($row = mysql_fetch_array($fetch)) {
		$row_array['item_no'] = $row['item_no'];
		$row_array['title'] = $row['title'];
		$row_array['hit'] = $row['hit'];
		$row_array['update_date'] = $row['update_date'];
		$row_array['writer_id'] = $row['writer_id'];

		array_push($return_arr,$row_array);
	}

	$cnt_sql="SELECT COUNT(item_no) FROM freeboard_item";
	$result = mysql_query($cnt_sql);
	$row = mysql_fetch_array($result);
	$num_elem = $row[0];

	$obj = array('cnt' => $num_elem, 'data' => $return_arr);

	echo json_encode($obj, JSON_UNESCAPED_UNICODE);
	//echo json_encode($return_arr, JSON_UNESCAPED_UNICODE);
?>