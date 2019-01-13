<?php
if (isset ($_POST['id'])) $id=$_POST['id'];
if (isset ($_POST['num'])) $num=$_POST['num'];
if (isset ($_POST['mark'])) $mark=$_POST['mark'];
if (isset ($_POST['ugon'])) $ugon=$_POST['ugon'];
if (isset ($_POST['dtp'])) $dtp=$_POST['dtp'];

$db = mysql_connect ("localhost", "root", "");
mysql_select_db ("gai", $db);

$result = mysql_query ("UPDATE cars SET num='$num', mark='$mark', ugon='$ugon', dtp='$dtp' WHERE id='$id'"); 

echo "Идет редактирование базы данных...<br>";

?>
<meta http-equiv="Refresh" content="0;url=index.php">