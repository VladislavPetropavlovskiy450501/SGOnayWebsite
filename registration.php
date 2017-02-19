<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>


  <title>Start game</title>
 </head>
 <body> 

<form method='post'>Регистрация<br>
Название команды: <br><input type="text" name="teamname"><br>

Пароль: <br><input type=password name="passw"><br>
Повторите пароль: <br><input type=password name="passw2"><br>
<input type=submit name="reg" value=" Зарегистрироваться ">
</form>

<a href = "http://www.sgonay.96.lt/login.php">На страницу входа</a>

<?php
//error_reporting( E_ERROR );
date_default_timezone_set("Europe/Moscow");
$action = $_POST['reg'];
if ($action)

{

error_reporting( E_ERROR );
$db_host = "xxxxxxx"; 
$db_user = "xxxxxxxxx"; 
$db_password = "xxxxxxxx";
$db_table = "Accounts";

$db = mysql_connect($db_host,$db_user,$db_password);
 

mysql_select_db("xxxxxxxx",$db);
 

mysql_query("SET NAMES 'utf8'",$db);
$currtime = date("Y-m-d H:i:s"); 
 $result = mysql_query ("SELECT * FROM Accounts WHERE Name = '".$_POST['teamname']."'");
$row = mysql_fetch_array($result);
//echo $row['Name'] . " " . $row['Number'] . " " . $row['Pass'] . " " . $row['Key'] . "<br />";
if ($row[Name]==$_POST['teamname']) echo "<script type=\"text/javascript\">alert( \"Такая команда уже существует!\");</script> \n"; else if ($_POST[passw]==$_POST['passw2']) {
	
	echo "<script type=\"text/javascript\">alert( \"Регистрация прошла успешно!\");</script> \n";
	
	do 
	{
		$ky=rand(10000000, 99999999);
		$res3 = mysql_query ("SELECT * FROM Accounts WHERE Name = '".$ky."'");
		$row3 = mysql_fetch_array($res3);
		
		
	} 	while ($row3['Key']==$ky);
	
	$res2 = mysql_query ("INSERT INTO `xxxxxxxxx`.`Accounts` (`Number`, `Name`, `Pass`, `Key`) VALUES ('', '".$_POST['teamname']."', '".$_POST[passw]."', '".$ky."')");
//header("Location: http://www.sgonay.96.lt/login.php");

	
} else echo "<script type=\"text/javascript\">alert( \"Пароли не совпадают\");</script> \n";

}
?>




 </body>
</html>