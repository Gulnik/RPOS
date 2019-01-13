<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Вывод</title>
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

<p align="center" class="title">Неоплаченные штрафы</p>
<p class="txt">
<?php

if (isset($_POST['fio'])) $fio=$_POST['fio'];
if (isset($_POST['date'])) $date=$_POST['date'];
if (isset($_POST['shtraf'])) $shtraf=$_POST['shtraf'];
if (isset($_POST['dtp'])) $dtp=$_POST['dtp'];
if (isset($_POST['money'])) $money=$_POST['money'];


$db = mysql_connect ("localhost", "root", "");
mysql_select_db ("gai",$db);

$result = mysql_query ("SELECT fio, date, shtraf, money FROM voditel WHERE money>0");
$myrow = mysql_fetch_array ($result);

do {
echo "<b>ФИО</b>: ".$myrow['fio']."<br>";
echo "<b>Дата рождения</b>: ".$myrow['date']."<br>";
echo "Сумма неуплаченных штрафов <b>".$myrow['money']."</b> рублей<br>";
echo "Имелись штрафы за: ".$myrow['shtraf']."<br>";

echo "<br><br>";
} while ($myrow = mysql_fetch_array ($result));

?>
</p>
</td>
</tr>
</table></td>
    
  </tr>
<?php include ("blocks/fooster.php"); ?>
</table>
</body>
</html>