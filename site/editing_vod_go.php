<?php
if (isset ($_POST['id'])) $id=$_POST['id'];
if (isset ($_POST['fio'])) $fio=$_POST['fio'];
if (isset ($_POST['date'])) $date=$_POST['date'];
if (isset ($_POST['shtraf'])) $shtraf=$_POST['shtraf'];
if (isset ($_POST['dtp'])) $dtp=$_POST['dtp'];
if (isset ($_POST['money'])) $money=$_POST['money'];

$db = mysql_connect ("localhost", "root", "");
mysql_select_db ("gai", $db);

$result = mysql_query ("UPDATE voditel SET fio='$fio', date='$date', shtraf='$shtraf', money='$money', dtp='$dtp' WHERE id='$id'"); 

echo "Идет редактирование базы данных...<br>";

?>
<meta http-equiv="Refresh" content="0;url=index.php">