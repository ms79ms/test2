<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
</head>

<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="css/mystyle.css" rel="stylesheet" type="text/css" />

<title>Change Password</title>
</head>

<body>
<?php 
$i = $_SESSION['idd'];

?>
<p style="color:brown;font-size:x-large;margin-left:30px;">Change Password<br/></p>
<form name="form1"  method="post" action="Change_password2.php" style="margin-left:30px;margin-top:30px;">
 <input type="hidden" name="id"  value="<?=$i;?>"/>
	<label>Old Password : <input type="text" name="o"  /></label><br/>
	<label>New Password : <input type="text" name="n1" /></label><br/>
	<label>Confrin new password : <input type="text" name="n2"/></label><br/>
<input type="submit" name="send" value="Change"/>

</form>
<button onclick="window.location.href='home.php'" style="width:62px;margin-left:30px" >Cancel</button>
</body>

</html>

</body>

</html>
