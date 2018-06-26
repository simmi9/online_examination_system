<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
echo("Hi");
$sub_name= $_POST['SUB_NAME'];
$db=mysql_connect('localhost','root','');
$e=mysql_select_db('ONLINE');
$query="select * from subject where SUB_NAME='$sub_name' ";

//$res=$db->query($query);
$res=mysql_query($query);
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
if($sub_name=='UNIX')
 header("Location:http://localhost/online/UNIX.php ");
//echo "<a href='UNIX.html'> AS SOON AS YOU CLICK HERE THE TIMER STARTS </a>";
else if ($sub_name=='COMPUTER GRAPHICS1')
 header("Location:http://localhost/online/CG1.php ");
//echo "<a href='CG1.html'> AS SOON AS YOU CLICK HERE THE TIMER STARTS</a>";
else if ($sub_name=='ADS')
 header("Location:http://localhost/online/ADS.php ");
//echo "<a href='CN.html'> AS SOON AS YOU CLICK HERE THE TIMER STARTS</a>";
else if($sub_name=='SOFTWARE ENGINEERING1')
 header("Location:http://localhost/online/SE1.php ");
//echo "<a href='SE.html'> AS SOON AS YOU CLICK HERE THE TIMER STARTS</a>";
else
 header("Location:http://localhost/online/FS.php ");
//echo "<a href='FS.html' > AS SOON AS YOU CLICK HERE THE TIMER STARTS</a>";
//echo "<a href='subject.html' TARGET="_BLANK">  SELECT SUBJECT </a>"


if (isset($HTTP_REFERER)) { 
echo "<a href='$HTTP_REFERER'>back</a>"; 
} else { 
echo "<a href='javascript:history.back()'>back</a>"; 
} 
?>


</body>
</html>
