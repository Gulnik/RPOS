<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>��������������</title>
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
<?php
if (isset ($_POST['id'])) $id=$_POST['id'];

$db = mysql_connect ("localhost", "root", "");
mysql_select_db ("gai", $db);

$result = mysql_query ("SELECT num, mark, ugon, dtp FROM cars WHERE id='$id'"); 
$myrow = mysql_fetch_array ($result);


?>

<p align="center" class="title">�������������� ����������</p>

<form action="editing_car_go.php" method="post">
<p class="txt">


�����: <input name="num" type="text" size="20" maxlength="255" value="<?php echo $myrow['num'] ?>" ><br><br>
�����: <input name="mark" type="text" size="40" maxlength="255" value="<?php echo $myrow['mark'] ?>"><br><br>
����: <input name="ugon" type="text" size="20" maxlength="255" value="<?php echo $myrow['ugon'] ?>"><br><br>
���: <input name="dtp" type="text" size="20" maxlength="255" value="<?php echo $myrow['dtp'] ?>"><br><br>
<input name="id" type="hidden" value="<?php echo "$id" ?>">

<input name="submit" type="submit" value="�������������">



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