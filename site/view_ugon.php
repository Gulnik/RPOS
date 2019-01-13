<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Авто в угоне</title>
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

<p align="center" class="title">Авто в угоне</p>
<p class="txt">
<?php

$db = mysql_connect ("localhost", "root", "");
mysql_select_db ("gai",$db);

$result = mysql_query ("SELECT cars.num, cars.mark FROM cars WHERE (cars.ugon!='0')");
$myrow = mysql_fetch_array ($result);

do {
if ($myrow['num']=='') { echo "Данных не обнаружено<br>"; break; }
echo "<b>Номер</b>: ".$myrow['num']."<br>";
echo "<b>Марка</b>: ".$myrow['mark']."<br><br>";
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