<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>�����</title>
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

<p align="center" class="title">��� ����</p>
<p class="txt">
<?php


if (isset($_POST['num'])) $num=$_POST['num'];
if (isset($_POST['vlad'])) $vlad=$_POST['vlad'];
if (isset($_POST['mark'])) $mark=$_POST['mark'];
if (isset($_POST['ugon'])) $ugon=$_POST['ugon'];
if (isset($_POST['dtp'])) $dtp=$_POST['dtp'];

$db = mysql_connect ("localhost", "root", "");
mysql_select_db ("gai",$db);

$result = mysql_query ("SELECT cars.num, cars.mark, cars.ugon, cars.dtp, vladelets.fio FROM cars LEFT JOIN vladelets ON (cars.vlad=vladelets.id)");
$myrow = mysql_fetch_array ($result);
do {
echo "<b>�����</b>: ".$myrow['num']."<br>";
echo "<b>�����</b>: ".$myrow['mark']."<br>";
if ($myrow['fio']!='')
echo "<b>��� ���������</b>: ".$myrow['fio']."<br>";
if ($myrow['dtp']=='0') echo "���� �� �������� � ���<br>";
else echo "���� �������� � ��� ".$myrow['dtp']." ���(�)<br>";
if ($myrow['ugon']=='0') echo "���� � ����� �� ��������<br><br>";
else echo"<u class=".red.">���� �������� � �����</u><br><br>";
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