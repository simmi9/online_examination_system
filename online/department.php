<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
echo("Hi");
$dname=$_POST['DNAME'];
$db=mysql_connect('localhost','root','');
$e=mysql_select_db('ONLINE');
$query="select * from department where DNAME='$dname' ";

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
if($dname=='COMPUTER SCIENCE')
{ header("Location:http://localhost/online/csubject.html ");
//echo "<a href='csubject.html'> SELECT COMPUTER SCIENCE  SUBJECTS </a>";
}
else 

//echo "<a href='isubject.html'> SELECT INFORMATION SCIENCE SUBJECTS</a>";
{ header("Location:http://localhost/online/isubject.html ");
//echo "<a href='subject.html'>  SELECT SUBJECT </a>"
}
?>

</body>
</html>
