<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<?php



 
 $USN=$_POST['SUSN'];
$SUBID=$_POST['SUBID'];
 $db=mysql_connect('localhost','root','');
$e=mysql_select_db('ONLINE');
$query="select * from result  where SUSN='$USN'and SUBID='$SUBID'";
//$res=$db->query($query);

$res=mysql_query($query);
$answer=array('fd','fe');
$row=mysql_fetch_array($res);
$marks=$row['MARKS'];
echo "RESULT =". $marks  ;
?>
</body>
</html>
