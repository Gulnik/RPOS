<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Помощь</title>
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

        <td width="500" align="center" valign="top" bgcolor="#FFFFFF">
        
<!---------------------------------------------------------------------------->
<!---------------------------------------------------------------------------->
<!---------------------------------------------------------------------------->
<p class="txt">
<?php 

echo "<b>Помощь</b><br><br><br>";
echo "Просмотр, добавление, редактирование, удаление записей о водителях, автомобилях и их владельцах.<br><br>Для изменения или просмотра записей базы данных выбирайте соответствующий пункт в левом меню.<br>При добавлении новых автомобилей в базу данных необходимо сначала создать ее владельца. Добавление нового авто невозможно в случае, когда не имеется свободных владельцев. Связи между автомобилями и владельцами однозначные, т.е. одному владельцу соответствует только одно авто и наоборот.<br><br><br>Структурная схема базы данных:<br><br>";

?>
<img src="img/pic.jpg" width="318" height="233"></p>

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