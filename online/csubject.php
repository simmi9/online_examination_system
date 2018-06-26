<?php
session_start()
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$n_user=$_SESSION['UID'];
echo("Hi");
$sub_name= $_POST['SUB_NAME'];
$db=mysql_connect('localhost','root','');
$e=mysql_select_db('ONLINE');
$query="select * from subject where SUB_NAME='$sub_name' ";
$q2="select SUB_CODE from subject where SUB_NAME='$sub_name' ";
//$res=$db->query($query);

$res=mysql_query($query);
$r1=mysql_query($q2);
$answer=array('fd','fe');
$row=mysql_fetch_array($query);
$a=$row['SUB_CODE'];
if(!$res)
{ throw new exception('could not process');
}
/*if(mysql_num_rows($res) ==1)
{
echo "processed";
return true;
}
else
{ 
echo ( "oops , unsuccessful");
}*/

$query1="insert into result(SUSN,SUBID)values('$n_user','$a' )" ;

$res1=mysql_query($query1);
if($sub_name=='DBMS')


 header("Location:http://localhost/online/DBMS.php ");

else if ($sub_name=='COMPUTER GRAPHICS')
//echo "<a href='CG.php'> AS SOON AS YOU CLICK HERE THE TIMER STARTS</a>";
 header("Location:http://localhost/online/CG.php ");
else if ($sub_name=='COMPUTER NETWORKS')
//echo "<a href='CN.php'> AS SOON AS YOU CLICK HERE THE TIMER STARTS</a>";
 header("Location:http://localhost/online/CN.php ");
else if($sub_name=='SOFTWARE ENGINEERING')
//echo "<a href='SE.php'> AS SOON AS YOU CLICK HERE THE TIMER STARTS</a>";
 header("Location:http://localhost/online/SE.php ");
else
//echo "<a href='VP.php'> AS SOON AS YOU CLICK HERE THE TIMER STARTS</a>";
//echo "<a href='subject.html'>  SELECT SUBJECT </a>"
 header("Location:http://localhost/online/VP.php ");
?>


</body>
</html>
