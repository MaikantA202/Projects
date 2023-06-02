<?php
    // database connection code
    if(isset($_POST['id'])){
    
    // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
    $con=mysqli_connect('localhost','root','','register');
    
    // get the post records
    $id=$_POST['id'];
    $password=$_POST['password'];
    
    // database select SQL code
    $sql="SELECT * FROM info WHERE Cid='".$id."' AND Password='".$password."'";
    
    $r=mysqli_query($con,$sql);
    $a=mysqli_fetch_column($r);
    if($a>0){
        header('location:login.html');
    }
    else{
        echo "Invalid";
        header('location:SRP.html');
    }}
?>
