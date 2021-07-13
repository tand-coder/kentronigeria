<?php  
error_reporting(E_ALL & ~E_NOTICE);
date_default_timezone_set('Asia/Kolkata');
session_start();
ob_start();

$serverName = "localhost";
$databaseName = "yebostar_kent_ro"; 
$username = "yebostar_kentro"; 
$password = "kentro@123456"; 
// echo $serverName;
// echo $databaseName;
// echo $username;
// echo $password;
// exit();
try {
	$db = new PDO("mysql:host={$serverName};dbname={$databaseName}", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	print_r($db);exit();
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	 print_r($db);exit();
} catch (PDOException $e){
	return 'connection error '. $e->getMessage();
}	

// if (!empty($_SESSION['session'])) {
//     $users = $db -> query("SELECT * FROM career")->fetch();
// } else {}
