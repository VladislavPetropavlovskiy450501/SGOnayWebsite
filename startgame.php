<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <title>Start game</title>

 

</head>
 <body> 


<form method='post'>

<input type=submit name="SG" value=" Start game! ">

</form>

<?php
error_reporting( E_ERROR );
date_default_timezone_set("Europe/Moscow");
$db_host = "xxxxxxx"; 
$db_user = "xxxxxxxxx"; 
$db_password = "xxxxxxxx";
$db_table = "sgonay54res"; 

$db = mysql_connect($db_host,$db_user,$db_password);
 

mysql_select_db("xxxxxxxx",$db);
 

mysql_query("SET NAMES 'utf8'",$db);
$res4 = mysql_query ("SELECT * FROM `xxxxxxxx`.`Accounts` WHERE `Key` = '".$_GET['key']."'");

$row4 = mysql_fetch_array($res4);

$action = $_POST['SG'];
if ($action)

{



$currtime = date("Y-m-d H:i:s"); 

 $result = mysql_query ("INSERT INTO sgonay54res (Team,Start,CP01,CP01t,CP02,CP02t,CP03,CP03t,Finish) VALUES ('".$row4['Name']."',NOW() + INTERVAL 3 HOUR,'','','','','','','')");


header("Location: http://www.sgonay.96.lt/sgonay54.php?key=".$_GET['key']);




}
?>




 </body>
</html>