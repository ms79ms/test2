<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
</head>

<body>

<?
 $o=$_POST['o'];
 $n1=$_POST['n1'];
 $n2=$_POST['n2'];
 

include('conn.php');
$sql="select ID,password from customers where ID = '".$_POST['id']."'";

$res=mysql_query($sql,$con);
while($row=mysql_fetch_array($res))
{
$p=$row[1];

}


if ($o==$p)
{
if($n1==$n2)
{
$sql="update customers set password='".$n1."' where id='".$_POST['id']."' ";

 if(mysql_query($sql,$con))
 {
 
  
  ?>
<div style="margin-left: 40px; margin-top: 40px">
	<? echo  'Your password changed succesfully';?>
	<button onclick="window.location.href='home.php'" style="width: 62px; margin-left: 30px">
	OK</button></div>
<?
 }
 
 }
else
{
 ?>
<div style="margin-left: 40px; margin-top: 40px">
	<? echo  'your new password is not alike, please retype your new password and confirm it.';?>
	<button name="id" onclick="window.location.href='Change_password.php?id=<?=$_POST['id'];?>'" style="width: 62px; margin-left: 30px">
	OK</button></div>
<?


}

}
else
{
?>
<div style="margin-left: 40px; margin-top: 40px">
	<? echo  'your old password is wrong.';?>
	<button name="id" onclick="window.location.href='Change_password.php?id=<?=$_POST['id'];?>'" style="width: 62px; margin-left: 30px">
	OK</button></div>
<?
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="css/mystyle.css" rel="stylesheet" type="text/css" />
<title>Change Password</title>
</head>

<body>

</body>

</html>

</body>

</html>
