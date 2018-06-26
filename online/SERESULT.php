<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<script type = "text/javascript" >
function disableBackButton()
{
window.history.forward();
}
setTimeout("disableBackButton()", 0);
</script>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<a href="logout.php"> <center><B>logout </B></center></a>


<?php
//include"f5.js";
//include"rightref.js";
//include "back.js";
?>
<?php

$a=array('0','1','2','3','4');
for($i=0;$i<5;$i++)
{
	$j=$i+1;
	$a_mine='a' ."$j";
	$a[$i]=$_POST["$a_mine"];
}

$con=mysql_connect('localhost','root','');
$e=mysql_select_db('ONLINE');
if(!$e)
{
echo "database not connected succesfully". "<br/>";
}
/*function db_connect()
{
  $result= new mysqli('localhost','root','','ONLINE');
  if(!$result)
   throw new exception('You are not able to connect to Database server');
   else
   return $result;
}*/


		//$conn=db_connect();
//$e=mysql_select_db($conn,'ONLINE');
$q="select CORRECT_ANSWER from questions where SUB_ID='CS4'";
$r=mysql_query($q);
$count=0;
for($i=0;$i<5;$i++)
{
	$row=mysql_fetch_array($r);
	$ans=$row['CORRECT_ANSWER'];
//	echo $a[$i] . 'zz' .$ans . "<br/>";
	if($a[$i]==$ans)
			$count=$count+1;
}
echo " ";
echo " ";
echo "U hav answered  ". $count . " Correct answers  ";
$q1="update `online`.`result` set `MARKS`=".$count;
$r1=mysql_query($q1);
//if($count>=5)
//echo "Congratulations!! You are selected for the interview.";
//else
//echo "Sorry. You are not selected for the interview.";
?>


<body>



</body>
</html>