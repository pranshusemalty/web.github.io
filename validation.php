<?php
$con = mysqli_connect("localhost","root","","ecommerce") or
die(mysqli_error($con));
error_reporting(0);


$email = $_GET['email'];
$password =$_GET['password'];
session_start();
{
	$_SESSION['username']=$email;
	$user=$_SESSION['username'];


}

$q= "select * from userdata where email='$email'&& password = '$password'";
$result = mysqli_query($con,$q) or
die(mysqli_error($con));
$num = mysqli_num_rows($result);


        
if($num == 1)
{
    header('location:internshala/home.php');
}
else 
 {
        header('location:internshala/signup.html');
       
 }




 
?>
