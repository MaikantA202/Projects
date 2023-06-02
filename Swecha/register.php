<?php
// database connection code
if(isset($_POST['submit']))
{

	// get the post records
	$a = $_POST['a'];
	$desgn = $_POST['desgn'];
	$dept = $_POST['dept'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	
}
$conn = mysqli_connect('localhost', 'root', '','register');
$sql="INSERT INTO datas (Name,Designation,Department,Phone,Interested_in,Email) VALUES ('$a','$desgn','$dept','$b','$c','$d'	)";
// $sql = 'INSERT INTO datas  ( Name, Designation, Department, Phone, Interested_in, Email) VALUES ( "'.$a.'","'.$desgn.'", "'.$dept.'", "'.$b.'", '.$c.', "'.$d.'")';

$rs = mysqli_query($conn, $sql);

if($rs)
{	
	echo "Registered Successfully!!";
}
else
{
	echo "Are you a genuine visitor?";
	
}
mysqli_close($conn)
?>
