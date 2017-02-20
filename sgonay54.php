<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>


  <title>SGOnay #54</title>


 </head>
 <body> 


<?php
error_reporting( E_ERROR );
date_default_timezone_set("Europe/Moscow");

$db_host = "xxxxxxx"; 
$db_user = "xxxxxxxxx"; 
$db_password = "xxxxxxxx";
$db_table = "SGOnay54";

$db = mysql_connect($db_host,$db_user,$db_password);
 

mysql_select_db("xxxxxxxxxx",$db);
 

mysql_query("SET NAMES 'utf8'",$db);


$res6 = mysql_query ("SELECT * FROM `xxxxxxxxx`.`Accounts` WHERE `Key`=".$_GET['key']);
$row6 = mysql_fetch_array($res6);

$res7 = mysql_query ("SELECT * FROM `xxxxxxxxx`.`sgonay54res` WHERE `sgonay54res`.`Team` = '".$row6['Name']."'");
$row7 = mysql_fetch_array($res7);

if ($row7['Start']<=date("Y-m-d H:i:s", mktime(date("H"), date("i")-90, date("s"), date("m")  , date("d"), date("Y")))) echo "You have not started game or your timeout had finished!"; 
else if ($row7['Finish']!=0) echo "You have already finished"; else 
{


 $result = mysql_query ("SELECT * FROM SGOnay54");

while ($row = mysql_fetch_array($result))
{

echo "<b>" . $row['Number'] . ".</b> " . $row['Description'] . "<br><b><i>" . $row['Task'] . "</b></i><br />";
$res8 = mysql_query ("SELECT * FROM `u698996973_main`.`sgonay54res` WHERE `sgonay54res`.`Team` = '".$row6['Name']."'");
$row8 = mysql_fetch_array($res8);

if ($row8["CP".$row[Number]]) ; else
{
?><form method='post'>
<input type="text" name="<?=$row['Number'];?>ans">
<input type=submit name="<?=$row['Number'];?>" value="Send">
</form>
<?php

}
$res4 = mysql_query ("SELECT * FROM `xxxxxxxxx`.`Accounts` WHERE `Key`=".$_GET['key']);
$row4 = mysql_fetch_array($res4);

 $res2 = mysql_query ("SELECT * FROM SGOnay54");
while ($row2 = mysql_fetch_array($res2))
{

if ($_POST["$row2[Number]"])
{
//$res3 = mysql_query ("UPDATE sgonay54res SET 'CP".$row2[Number]."'='".$_POST[$row2[Number]."ans"]."', 'CP".$row2[Number]."t'=NOW() + INTERVAL 3 HOUR WHERE Team=".$row4['Name']);
$res3 = mysql_query ("UPDATE `xxxxxxxxxx`.`sgonay54res` SET `CP".$row2[Number]."` = '".$_POST[$row2[Number]."ans"]."', `CP".$row2[Number]."t` = NOW() + INTERVAL 3 HOUR WHERE `sgonay54res`.`Team` = '".$row4['Name']."'");
echo "<script type=\"text/javascript\">alert( \"The answer has accepted\");</script> \n";
}
}


?><br>
<form method='post'>

<input type=submit name="Fin" value="Finish">
</form><br>
Change answer:<br>
<form method='post'>
CP: <input type="text" name="cpnum">
Answer: <input type="text" name="cpansw">
<input type=submit name="cgansw" value="Change">
</form>
<?php
if ($_POST['Fin'])

$res5 = mysql_query ("UPDATE `xxxxxxxxxxx`.`sgonay54res` SET `Finish` = NOW() + INTERVAL 3 HOUR WHERE `sgonay54res`.`Team` = '".$row4['Name']."'");

if ($_POST['cgansw'])
{
$cganswflag = 0;
$res9 = mysql_query ("SELECT * FROM SGOnay54");
while ($row9 = mysql_fetch_array($res9))
{

if ($row9[Number]==$_POST['cpnum'])
{

$res10 = mysql_query ("UPDATE `xxxxxxxx`.`sgonay54res` SET `CP".$row9[Number]."` = '".$_POST["cpansw"]."', `CP".$row9[Number]."t` = NOW() + INTERVAL 3 HOUR WHERE `sgonay54res`.`Team` = '".$row4['Name']."'");
echo "<script type=\"text/javascript\">alert( \"The answer has accepted\");</script> \n";
$cganswflag = 1;
break;
}
}
if ($cganswflag == 0) echo "<script type=\"text/javascript\">alert( \"This CP doesn't exist!\");</script> \n";

}

}


?>

 </body>
</html>