<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
	<meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" href="images/icon.png" />
	<link rel="stylesheet" href="css/regstyle.css" media="screen" type="text/css" />
	<title>Registration</title>
 </head>
 <body> 


 <div id="login">
       <form method="POST">	
            <fieldset class="clearfix">
                <p><span class="fontawesome-user"></span>
				<input type="text" name="teamname" placeholder="Название команды"   required></p> 
                <p><span class="fontawesome-lock"></span>
				<input type="password" name="passw" placeholder="Пароль"  required></p> 
                <p><span class="fontawesome-lock"></span>
				<input type="password" name="passw2" placeholder="Повторите пароль"  required></p> 
				<p><input type="submit" name="reg" value="ЗАРЕГИСТРИРОВАТЬСЯ"></p>
            </fieldset>
        </form>
 <p>Есть аккаунт? &nbsp;&nbsp;<a href="http://www.sgonay.96.lt/login.php">Войти</a><span class="fontawesome-arrow-right"></span></p>
</div>
<?php



error_reporting( E_ERROR );
date_default_timezone_set("Europe/Moscow");
$action = $_POST['reg'];
if ($action)

{

error_reporting( E_ERROR );
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

if ($row[Name]==$_POST['teamname']) echo "<script type=\"text/javascript\">alert( \"Такая команда уже существует!\");</script> \n"; else if ($_POST[passw]==$_POST['passw2']) {
	
	echo "<script type=\"text/javascript\">alert( \"Регистрация прошла успешно!\");</script> \n";
	
	do 
	{
		$ky=rand(10000000, 99999999);
		$res3 = mysql_query ("SELECT * FROM Accounts WHERE Name = '".$ky."'");
		$row3 = mysql_fetch_array($res3);
		
		
	} 	while ($row3['Key']==$ky);
	
	$res2 = mysql_query ("INSERT INTO `xxxxxxx`.`Accounts` (`Number`, `Name`, `Pass`, `Key`) VALUES ('', '".$_POST['teamname']."', '".$_POST[passw]."', '".$ky."')");


	
} else echo "<script type=\"text/javascript\">alert( \"Пароли не совпадают\");</script> \n";

}
?>




 </body>
</html>