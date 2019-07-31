 <?php
 header('location:internshala/login.html');
$con = mysqli_connect("localhost","root","","ecommerce") or
die(mysqli_error($con));
error_reporting(0);

$email = $_GET['email'];
$password =$_GET['password'];
$city=$_GET['city'];
$state=$_GET['state'];
$zip=$_GET['zipcoad'];
$ur = "insert into userdata(email,password,city,state,zip)
values ('$email','$password','$city','$state','$zip')";
$user_registration_submit = mysqli_query($con,$ur) or
die(mysqli_error($con));
echo 'REGISTRATION SUCCESSFUL';

?>

