<?php
	
@session_start();
ini_set("display_errors", "On");
static $DB_HOST="localhost";
static $DB_USER="root";
static $DB_PASS="12321";
static $DB_NAME="bob_ent";
	
if(!mysql_pconnect($DB_HOST,$DB_USER,$DB_PASS)) 
die('Could not connect: ' . mysql_error());

// use db
mysql_query("set names utf8");

if(!mysql_select_db($DB_NAME))
die('Can\'t use db : ' . mysql_error());
//sychronize php and mysql server
date_default_timezone_set("Asia/Seoul");
mysql_query("SET time_zone ='+9:00'");


?>