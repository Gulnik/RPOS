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
        <td width="175" valign="top" bgcolor="#FFFFFF" class="left">
        
<?php include ("blocks/lefttd.php"); ?>

        <td width="500" valign="top" bgcolor="#FFFFFF">
        
<!---------------------------------------------------------------------------->
<!---------------------------------------------------------------------------->
<!---------------------------------------------------------------------------->

<p align="center" class="title">Редактирование водителя</p>
<form action="editing_vod.php" method="post" name="form">
<p class="txt">
<!--<p>Номер: <input name="num" type="text" size="20" maxlength="255"></p>
<input name="submit" type="submit" value="Удалить">-->

<?php 
$db = mysql_connect ('localhost', 'root', '');
mysql_select_db ("gai", $db);
$result = mysql_query ("SELECT id, fio, date, shtraf, dtp, money FROM voditel",$db);
$myrow = mysql_fetch_array ($result);

do
{
	printf ("<input name = 'id' type = 'radio' value ='%s' <label> %s, %s</label><br>", $myrow['id'], $myrow['fio'], $myrow['date']);
	
} while ($myrow = mysql_fetch_array ($result));

?>
<br>
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