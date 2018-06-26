<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$name =$_POST['NAME'];
$sem =$_POST['SEM'];
$usn=$_POST['USN'];
$dob =$_POST['DOB'];

$address =$_POST['ADDRESS'];

$dno =$_POST['DNO'];
function valid_name($name)
{

	if (preg_match("#^[-A-Za-z ]*$#",$name))
		return true;
	else 
		return false;
}
function valid_sem($sem)
{

	if (preg_match("#^[1-9 ]*$#",$sem))
		return true;
	else 
		return false;
}

function valid_usn($usn)
{
	if(preg_match("#^[a-zA-Z0-9]+$#", $emailid))
		return true;
	else
		return false;
}

if(!$name||!$sem||!$usn||!$dob||!$address||!$dno)
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
		if(!valid_name($name))
		{
		throw new Exception('This is not a valid name. Please go back and try again.');
		}
		if(!valid_sem($sem))
		{
		throw new Exception('This is not a valid sem  number. Please go back and try again.');
		}
		if(strlen($usn) < 10)
		{
			throw new Exception('Your password must be atleast 6 characters and atmost 10 characters long. Please go back n try again.');
		}
	        echo "Registered Successfully";
echo "<a href='select.html'>  go back ?? </a>";
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
$query="insert into students values('$name','$usn','$sem','$address','$dob','$dno')";
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
