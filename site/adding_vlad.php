<?php
if (isset ($_POST['fio'])) $fio=$_POST['fio'];
if (isset ($_POST['date'])) $date=$_POST['date'];
if (isset ($_POST['id'])) $id=$_POST['id'];

$db = mysql_connect ("localhost", "root", "");
mysql_select_db ("gai", $db);

$result = mysql_query ("INSERT INTO vladelets (fio, date) VALUES ('$fio', '$date')"); 

echo "Идет добавление в базу данных...<br>";

?>
<meta http-equiv="Refresh" content="0;url=index.php">