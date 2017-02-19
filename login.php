<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>


  <title>Start game</title>
 </head>
 <body> 

<form method='post'>Р’С…РѕРґ:<br>
РќР°Р·РІР°РЅРёРµ РєРѕРјР°РЅРґС‹:<br> <input type="text" name="teamname"><br>
РџР°СЂРѕР»СЊ:<br> <input type=password name="passw"><br>
<input type=submit name="login" value=" Log in! ">

</form>

<?php
//error_reporting( E_ERROR );
date_default_timezone_set("Europe/Moscow");
$action = $_POST['login'];
if ($action)

{


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
if ($row[Pass]==$_POST['passw']) header("Location: http://www.sgonay.96.lt/startgame.php?key=".$row['Key']); else echo "Wrong team name or password!";





}
?>




 </body>
</html>