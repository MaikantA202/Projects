<?php
// database connection code
if(isset($_POST['location']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','bin');

// get the post records

$a = $_POST['location'];
$b = $_POST['area'];
$c = $_POST['percent'];
$d = $_POST['clean'];
$e = $_POST['service'];

// database update SQL code
$sql = "UPDATE  enter_data set Percentage='$c', Services='$e',Clean='$d' where location='$a' and area='$b'";

// insert in database
$rs = mysqli_query($con, $sql);
if($rs){
	echo "Data Inserted ...Go Back to display board!";
}
}
?>