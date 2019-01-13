<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Редактирование</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<table width="690" border="1" align="center" cellpadding=0 cellspacing="0" class="main_border">

<?php include ("blocks/header.php"); ?>

  <tr>
    <td bgcolor="#FFFFFF"><table width="690" border="1">
      <tr>
        <td width="175" valign="top" bgcolor="#FFFFFF" class="left">&nbsp;
        
<?php include ("blocks/lefttd.php"); ?>

        <td width="500" valign="top" bgcolor="#FFFFFF">
        
<!---------------------------------------------------------------------------->
<!---------------------------------------------------------------------------->
<!---------------------------------------------------------------------------->
<?php
if (isset ($_POST['id'])) $id=$_POST['id'];

$db = mysql_connect ("localhost", "root", "");
mysql_select_db ("gai", $db);

$result = mysql_query ("SELECT fio, date, shtraf, dtp, money FROM voditel WHERE id='$id'"); 
$myrow = mysql_fetch_array ($result);


?>

<p align="center" class="title">Редактирование водителя</p>

<form action="editing_vod_go.php" method="post">
<p class="txt">


ФИО: <input name="fio" type="text" size="40" maxlength="255" value="<?php echo $myrow['fio'] ?>" ><br><br>
Дата рожд.: <input name="date" type="text" size="20" maxlength="255" value="<?php echo $myrow['date'] ?>"><br><br>
ДТП: <input name="dtp" type="text" size="20" maxlength="255" value="<?php echo $myrow['dtp'] ?>"><br><br>
Штрафы за...: <input name="shtraf" type="text" size="40" maxlength="255" value="<?php echo $myrow['shtraf'] ?>"><br><br>
Неуплаченных штрафов на: <input name="money" type="text" size="10" maxlength="255" value="<?php echo $myrow['money'] ?>"> рублей<br><br>
<input name="id" type="hidden" value="<?php echo "$id" ?>">

<input name="submit" type="submit" value="Редактировать">



</p>

</form>


     
     
     

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