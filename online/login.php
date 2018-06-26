<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head

<body>

<?php
 #include "back.html"
 ?>

<?php
$db=mysql_connect('localhost','root','');
session_start();
 
 $USN=$_POST['USN'];
$PASSWORD=$_POST['DOB']; 
 $_SESSION['UID']=$USN;
 


//$USN=$_POST['USN'];
//$PASSWORD=$_POST['DOB']; 
//$db=mysql_connect('localhost','root','');
$e=mysql_select_db('ONLINE');
$query="select * from students  where USN='$USN' and DOB='$PASSWORD'";
//$res=$db->query($query);
$res=mysql_query($query);
//$query1="insert into result(SUSN)VALUES('$USN')";
//$res1=mysql_query($query1);
if(!$res)
{ throw new exception('could not log you in');
}
if(mysql_num_rows($res) ==1)
{
 header("Location:http://localhost/online/department.html ");
//echo "logged in";
//echo "<a href='department.html' >  SELECT DEPARTMENT </a>";
//return true;
}
else
{ 
echo ( "oops , login unsuccessful");
}

?>
</body>
</html>
