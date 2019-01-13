<?php
if (isset ($_POST['id'])) $id=$_POST['id'];
if (isset ($_POST['fio'])) $fio=$_POST['fio'];
if (isset ($_POST['date'])) $date=$_POST['date'];

$db = mysql_connect ("localhost", "root", "");
mysql_select_db ("gai", $db);

$result = mysql_query ("UPDATE vladelets SET fio='$fio', date='$date' WHERE id='$id'"); 

echo "Идет редактирование базы данных...<br>";

?>
<meta http-equiv="Refresh" content="0;url=index.php">