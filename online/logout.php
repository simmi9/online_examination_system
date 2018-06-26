<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">




</bod<style type="text/css">
<!--
.style1 {
	font-family: Algerian;
	font-weight: bold;
}
-->
</style>
</head>

<body><body style="background-color:skyblue">
<?php
//include"f5.js";
//include"rightref.js";
//include"back.js";
?>
<?php
session_start();
$old_user = $_SESSION['UID'];
unset($_SESSION['UID']);
session_destroy();
?>

<h1 class="style1"> Logout</h1>
<?php
if(!empty($old_user))
{
  ?><h2>You have been logged out!!
   <a href='coverpage.html'>Back to home page</a></h2>
   <?php
}
?>
</body>
</html>

