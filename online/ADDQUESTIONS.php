<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$qno=$_POST['QNO'];
$qid =$_POST['QID'];
$subid=$_POST['SUB_ID'];
$qdetails =$_POST['QDETAILS'];
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$ca=$_POST['CORRECT_ANSWER'];

function valid_qno($qno)
{

	if (preg_match("#^[0-9 ]*$#",$qno))
		return true;
	else 
		return false;
}
function valid_qid($qid)
{

	if (preg_match("#^[A-Za-z1-9 ]*$#",$qid))
		return true;
	else 
		return false;
}

function valid_subid($subid)
{
	if(preg_match("#^[a-zA-Z0-9]+$#", $subid))
		return true;
	else
		return false;
}

if(!$qno||!$qid||!$qdetails||!$subid||!$a||!$b||!$c||!$d||!$ca)
{
	echo "You hav not filled the form out correctly.";
	echo "Please go back and try again.";
	echo "<br />";
	echo "<a href='reg.html'>click here</a>";
}
else
{
	try
	{
		/*if(!valid_email($emailid))
		{
			throw new Exception('This is not a valid email address. Please go back and try again.');
		}*/
		if(!valid_qno($qno))
		{
		throw new Exception('This is not a q no.. Please go back and try again.');
		}
		if(!valid_qid($qid))
		{
		throw new Exception('This is not a valid qid. Please go back and try again.');
		}
		/*if(strlen($usn) < 10)
		{
			throw new Exception('Your password must be atleast 6 characters and atmost 10 characters long. Please go back n try again.');
		}*/
	        echo "ENTERED SUCCESSFULLY";
		/*$db = mysql_connect('localhost','root','');
		if(!$db)
		{
		echo "not connected to database";
		}
	    $select=mysql_select_db('recruitment');
		if(!$select)
		{
		echo "cannot select database";
		exit;
		}*/
		
		
		$db=mysql_connect('localhost','root','');
$e=mysql_select_db('ONLINE');
$query="insert into questions values('$qno','$qdetails','$qid','$subid','$a','$b','$c','$d','$ca')";
$res=mysql_query($query);
if(!$res)
{ throw new exception('could not process');
}
		}
		/*function db_connect()
{
  $result= new mysql('localhost','root','','online');
  if(!$result)
   throw new exception('You are not able to connect to Database server');
   else
   return $result;
}


		$conn=db_connect();
		
	$query="insert into students values('$name','$usn','$sem','$address','$dob','$dno')";
	 //$query="select fname from person_details where emailid ='anki@gmail.com'";
		//$result=$db->query($query);
	$result=mysqli_query($conn,$query);
	//echo $result;
	
		//echo "<a href='login.html'>SIGN IN </a>";
	//echo "Reg";
	
	}  
	*/
	
	catch(Exception $e)
	{
		echo $e->getMessage();
		exit;
	}
}	
	


?>

</body>
</html>
