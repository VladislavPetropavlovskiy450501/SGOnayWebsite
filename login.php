<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
	<meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" href="images/icon.png" />
	<link rel="stylesheet" href="css/regstyle.css" media="screen" type="text/css" />
	<title>Login</title>
 </head>
 <body> 
 
 
     <div id="login">
        <form method="POST">	
            <fieldset class="clearfix">
                <p><span class="fontawesome-user"></span>
				<input type="text" name="teamname" placeholder="Название команды" required></p>
                <p><span class="fontawesome-lock"></span>
				<input type="password"  name="passw" placeholder="Пароль" required></p>
				<p><input type="submit" name="login" value="ВОЙТИ"></p>
            </fieldset>
        </form>
        <p>Еще нет аккаунта? &nbsp;&nbsp;<a href="http://www.sgonay.96.lt/registration.php">Регистрация</a><span class="fontawesome-arrow-right"></span></p>
    </div>
 



<?php
error_reporting( E_ERROR );
date_default_timezone_set("Europe/Moscow");
$action = $_POST['login'];
if ($action)

{


$db_host = "xxxxxxx"; 
$db_user = "xxxxxxx"; 
$db_password = "xxxxxxx";
$db_table = "Accounts";

$db = mysql_connect($db_host,$db_user,$db_password);
 

mysql_select_db("xxxxxxx",$db);
 

mysql_query("SET NAMES 'utf8'",$db);
$currtime = date("Y-m-d H:i:s"); 
 $result = mysql_query ("SELECT * FROM Accounts WHERE Name = '".$_POST['teamname']."'");
$row = mysql_fetch_array($result);

if ($row[Pass]==$_POST['passw']) header("Location: http://www.sgonay.96.lt/startgame.php?key=".$row['Key']); else echo "<script type=\"text/javascript\">alert( \"Неправильный пароль или название команды!\");</script> \n";;





}
?>




 </body>
</html>