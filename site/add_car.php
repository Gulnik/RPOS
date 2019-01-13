<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Добавление</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<table width="690" border="1" align="center" cellpadding=0 cellspacing="0" class="main_border">

<?php include ("blocks/header.php"); ?>

  <tr>
    <td bgcolor="#FFFFFF"><table width="690" border="1">
      <tr>
        <td width="175" valign="top" bgcolor="#FFFFFF" class="left">
        
<?php include ("blocks/lefttd.php"); ?>

        <td width="500" valign="top" bgcolor="#FFFFFF">
        
<!---------------------------------------------------------------------------->
<!---------------------------------------------------------------------------->
<!---------------------------------------------------------------------------->

<p align="center" class="title">Добавление автомобиля</p>

<form action="add.php" method="post">
<p class="txt">
<?php 
$db = mysql_connect ('localhost', 'root', '');
mysql_select_db ("gai", $db);
$result = mysql_query ("SELECT id, fio FROM vladelets WHERE car=''",$db);
$myrow = mysql_fetch_array ($result);

if ($myrow['id']=='')
{
	echo "Нет свободных владельцев, добавлять авто нельзя!<br><br><br><br>";	
	
}
?>

<?php if ($myrow['id']=='') { ?> <input name="sub" type="submit" value="Назад"> <?php } ?>

</form>
</p>
<?php 
if ($myrow['id']!='') {
	?>
<form action="adding_car.php" method="post" name="form">
<p class="txt">
Номер: <input name="num" type="text" size="20" maxlength="255"><br><br>
Марка: <input name="mark" type="text" size="20" maxlength="255"><br><br>
Угон: <input name="ugon" type="text" size="20" maxlength="255"><br><br>
ДТП: <input name="dtp" type="text" size="20" maxlength="255"><br><br>
<?php }?>


<?php
if ($myrow['id']!='') echo "Владелец:<br>";
do
{
if ($myrow['id']=='') break;
printf ("<input name = 'id' type = 'radio' value ='%s' <label> %s</label><br>", $myrow['id'], $myrow['fio']);
$a=1;
} while ($myrow = mysql_fetch_array ($result));

?>

<?php if ($a) { ?>
<br>
<input name="submit" type="submit" value="Добавить">
</p>
</form>
 <?php }?>
     

<!---------------------------------------------------------------------------->
<!---------------------------------------------------------------------------->
<!---------------------------------------------------------------------------->        
        </td>
      </tr>
    </table></td>
  </tr>
 
<?php include ("blocks/fooster.php"); ?>
</table>
</body>
</html>