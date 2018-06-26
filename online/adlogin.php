<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<?php
$db=mysql_connect('localhost','root','');
session_start();

$ID=$_POST['ID'];
$PASSWORD=$_POST['PASSWORD'];
 $_SESSION['AID']=$ID;
//$db=mysql_connect('localhost','root','');
$e=mysql_select_db('ONLINE');
$query="select * from adlogin  where ID='$ID' and PASSWORD='$PASSWORD'";
//$res=$db->query($query);
$res=mysql_query($query);
/*$query1="insert into 'online'.'result'('SUSN')VALUES($USN)";
$res1=mysql_query($query1);*/
if(!$res)
{ throw new exception('could not log you in');
}
if(mysql_num_rows($res) ==1)
{
//header(

 header("Location:http://localhost/online/select.html ");


//echo -n "<a href='reg.html'>  CLICK HERE TO REGISTER STUDENTS?? </a>";


//echo -n "<a href='ADDQUESTIONS.html'> CLICK HERE TO ADD QUESTIONS?? </a>";
//return true;
}
else
{ 
echo ( "oops , login unsuccessful");
}

?>
</body>
</html>
