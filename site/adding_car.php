<?php
if (isset ($_POST['num'])) $num=$_POST['num'];
if (isset ($_POST['vlad'])) $vlad=$_POST['vlad'];
if (isset ($_POST['mark'])) $mark=$_POST['mark'];
if (isset ($_POST['ugon'])) $ugon=$_POST['ugon'];
if (isset ($_POST['dtp'])) $dtp=$_POST['dtp'];
if (isset ($_POST['id'])) $id=$_POST['id'];

$db = mysql_connect ("localhost", "root", "");
mysql_select_db ("gai", $db);

$result = mysql_query ("INSERT INTO cars (num, mark, ugon, dtp, vlad) VALUES ('$num', '$mark', '$ugon', '$dtp', '$id')"); 
$result2 = mysql_query ("SELECT id FROM cars WHERE num='$num'");
$myrow = mysql_fetch_array ($result2);
$a=$myrow['id'];
$result3 = mysql_query ("UPDATE vladelets SET car='$a' WHERE id='$id'"); 
echo "Идет добавление в базу данных...<br>";

?>
<meta http-equiv="Refresh" content="0;url=index.php">