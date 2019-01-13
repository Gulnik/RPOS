<?php
if (isset ($_POST['id'])) $id=$_POST['id'];

$db = mysql_connect ("localhost", "root", "");
mysql_select_db ("gai", $db);

$result = mysql_query ("DELETE FROM cars WHERE id='$id'"); 

echo "Идет удаление из базы данных...<br>";

?>
<meta http-equiv="Refresh" content="0;url=index.php">