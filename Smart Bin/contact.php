<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','register');

// get the post records

$txtName = $_POST['txtName'];
$txtPhone = $_POST['txtPhone'];
$txtEmail = $_POST['txtEmail'];
$txtAad = $_POST['txtAad'];
$txtCid = $_POST['txtCid'];
$txtPassword = $_POST['txtPassword'];

// database insert SQL code
$sql = "INSERT INTO `info` (`id`,`Name`,`Phone`,`Email`,`Aad`,`Cid`,`Password`) VALUES ('0', '$txtName','$txtPhone','$txtEmail','$txtAad','$txtCid','$txtPassword')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Registered Successfully";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>