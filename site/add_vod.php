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

<p align="center" class="title">Добавление водителя</p>

<form action="adding_vod.php" method="post" name="form">
<p class="txt">
ФИО: <input name="fio" type="text" size="20" maxlength="255"><br><br>
Дата рожд.: <input name="date" type="text" size="40" maxlength="255"><br><br>
Штрафы: <input name="shtraf" type="text" size="20" maxlength="255"><br><br>
ДТП: <input name="dtp" type="text" size="20" maxlength="255"><br><br>

<input name="submit" type="submit" value="Добавить">
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