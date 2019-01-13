<?php
if (isset ($_POST['fio'])) $fio=$_POST['fio'];
if (isset ($_POST['date'])) $date=$_POST['date'];
if (isset ($_POST['sftraf'])) $shtraf=$_POST['shtraf'];
if (isset ($_POST['dtp'])) $dtp=$_POST['dtp'];

$db = mysql_connect ("localhost", "root", "");
mysql_select_db ("gai", $db);

$result = mysql_query ("INSERT INTO voditel (fio, date, shtraf, dtp) VALUES ('$fio', '$date', '$shtraf', '$dtp')"); 

echo "Идет добавление в базу данных...<br>";

?>
<meta http-equiv="Refresh" content="0;url=index.php">