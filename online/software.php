<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
/*include"timer.htm";
include"f5.js";
include"rightref.js";
include "back.js";
*/?>
<form action='soft.php' method="post">
<table border=3>
            <tr>
                
                
		
				<td>QNO</td>
                <td>QDETAILS</td>
				<td>a</td>
                <td>b</td>
				<td>c</td>
                <td>d</td>
                
            </tr>
			
		<?php
		/*session_start();
if(isset($_SESSION['recruitment']))
{
	echo "You are logged in as " .$_SESSION['recruitment'];
	$emailid=$_SESSION['recruitment'];
	echo "<a href='logout.php'> Log out</a>";
	
}	*/
		/*$con=mysql_connect('localhost','root','');
if($con)
{
echo "database connected succesfully";

}*/
echo("Hi");
//$sub_name= $_POST['SUB_NAME'];
$db=mysql_connect('localhost','root','');
$e=mysql_select_db('ONLINE');
$query="select * from questions  where SUB_ID='CS1'";

//$res=$db->query($query);
$res=mysql_query($query);
if(!$res)
{ throw new Exception('could not process');
}


//
/*function db_connect()
{
  $result= new mysqli('localhost','root','','recruitment');
  if(!$result)
   throw new exception('You are not able to connect to Database server');
   else
   return $result;
}


		$conn=db_connect();*/
/*$e=mysqli_select_db($conn,'recruitment');
$query3="select * from questions  where SUB_ID=CS1";
$result1=mysqli_query($conn,$queAILSry3);*/
$answer=array('fd','fe');
//for($i=0;$i<2;$i++)

//$j=$i+1;


$row=mysql_fetch_array($res);
$question=$row['QDETAILS'];
$f=$row['a'];
$s=$row['b'];
$t=$row['c'];
$ft=$row['d'];
	echo "<tr><td>1</td><td>$question</td><td><input type='radio' name='a1' value='$f'> $f</td><td><input type='radio' name='a1' value='$s'>$s</td><td><input type='radio' name='a1' value='$t'>$t</td><td><input type='radio' name='a1' value='$ft'>$ft</td></tr>";
	
	
/*$row=mysqli_fetch_array($result1);
$question=$row['QDETAILS'];
$f=$row['a'];
$s=$row['b'];
$t=$row['c'];
$ft=$row['d'];
	
	echo "<tr><td>2</td><td>$question</td><td><input type='radio' name='a2' value='$f'> $f</td><td><input type='radio' name='a2' value='$s'>$s</td><td><input type='radio' name='a2' value='$t'>$t</td><td><input type='radio' name='a2' value='$ft'>$ft</td></tr>";


$row=mysqli_fetch_array($result1);
$question=$row['QDETAILS'];
$f=$row['a'];
$s=$row['b'];
$t=$row['c'];
$ft=$row['d'];
	echo "<tr><td>3</td><td>$question</td><td><input type='radio' name='a3' value='$f'> $f</td><td><input type='radio' name='a3' value='$s'>$s</td><td><input type='radio' name='a3' value='$t'>$t</td><td><input type='radio' name='a3' value='$ft'>$ft</td></tr>";

$row=mysqli_fetch_array($result1);
$question=$row['QDETAILS'];
$f=$row['a'];
$s=$row['b'];
$t=$row['c'];
$ft=$row['d'];
	echo "<tr><td>4</td><td>$question</td><td><input type='radio' name='a4' value='$f'> $f</td><td><input type='radio' name='a4' value='$s'>$s</td><td><input type='radio' name='a4' value='$t'>$t</td><td><input type='radio' name='a4' value='$ft'>$ft</td></tr>";

$row=mysqli_fetch_array($result1);
$question=$row['QDETAILS'];
$f=$row['a'];
$s=$row['b'];
$t=$row['c'];
$ft=$row['d'];
	echo "<tr><td>5</td><td>$question</td><td><input type='radio' name='a5' value='$f'> $f</td><td><input type='radio' name='a5' value='$s'>$s</td><td><input type='radio' name='a5' value='$t'>$t</td><td><input type='radio' name='a5' value='$ft'>$ft</td></tr>";

$row=mysqli_fetch_array($result1);
$question=$row['QDETAILS'];
$f=$row['a'];
$s=$row['b'];
$t=$row['c'];
$ft=$row['d'];
	echo "<tr><td>6</td><td>$question</td><td><input type='radio' name='a6' value='$f'> $f</td><td><input type='radio' name='a6' value='$s'>$s</td><td><input type='radio' name='a6' value='$t'>$t</td><td><input type='radio' name='a6' value='$ft'>$ft</td></tr>";

$row=mysqli_fetch_array($result1);
$question=$row['QDETAILS'];
$f=$row['a'];
$s=$row['b'];
$t=$row['c'];
$ft=$row['d'];
	echo "<tr><td>7</td><td>$question</td><td><input type='radio' name='a7' value='$f'> $f</td><td><input type='radio' name='a7' value='$s'>$s</td><td><input type='radio' name='a7' value='$t'>$t</td><td><input type='radio' name='a7' value='$ft'>$ft</td></tr>";

$row=mysqli_fetch_array($result1);
$question=$row['question'];
$f=$row['first_choice'];
$s=$row['second_choice'];
$t=$row['third_choice'];
$ft=$row['fourth_choice'];
	echo "<tr><td>8</td><td>$question</td><td><input type='radio' name='a8' value='$f'> $f</td><td><input type='radio' name='a8' value='$s'>$s</td><td><input type='radio' name='a8' value='$t'>$t</td><td><input type='radio' name='a8' value='$ft'>$ft</td></tr>";


$row=mysqli_fetch_array($result1);
$question=$row['question'];
$f=$row['first_choice'];
$s=$row['second_choice'];
$t=$row['third_choice'];
$ft=$row['fourth_choice'];
	echo "<tr><td>9</td><td>$question</td><td><input type='radio' name='a9' value='$f'> $f</td><td><input type='radio' name='a9' value='$s'>$s</td><td><input type='radio' name='a9' value='$t'>$t</td><td><input type='radio' name='a9' value='$ft'>$ft</td></tr>";
	
	$row=mysqli_fetch_array($result1);
$question=$row['question'];
$f=$row['first_choice'];
$s=$row['second_choice'];
$t=$row['third_choice'];
$ft=$row['fourth_choice'];
	echo "<tr><td>10</td><td>$question</td><td><input type='radio' name='a10' value='$f'> $f</td><td><input type='radio' name='a10' value='$s'>$s</td><td><input type='radio' name='a10' value='$t'>$t</td><td><input type='radio' name='a10' value='$ft'>$ft</td></tr>";
*/
	?>
</table>



<input type="submit" value="check result">
  



</form>


</body>
</html>
