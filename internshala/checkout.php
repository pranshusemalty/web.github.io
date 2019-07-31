 <?php
 session_start(); 
 $user=$_SESSION['username'];
 ?>




 <?php
 
$con = mysqli_connect("localhost","root","","ecommerce") or
die(mysqli_error($con));
error_reporting(0);

$pname= $_GET['model'];
$seo= "select  * from product where pname='$pname'";

$result = mysqli_query($con,$seo) or
die(mysqli_error($con));
$num = mysqli_num_rows($result);

$row = mysqli_fetch_array($result);
    $money=$row["price"];
    $img='<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="100" width="100"/>';
$q= "select * from userdata where email='$user'";
$result1 = mysqli_query($con,$q) or
die(mysqli_error($con));
$del = mysqli_fetch_array($result1);
$username =$del["email"];
$city =$del["city"];
$state=$del["state"];
$zip=$del["zip"];




?>
 
 <!DOCTYPE html>
 <html>
 <head>
    <link href="https://fonts.googleapis.com/css?family=Darker+Grotesque&display=swap" rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href=" check.css">
        <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Kaushan+Script&display=swap" rel="stylesheet">
 	<title>Checkout</title>
 </head>
 <body>
 	   <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.html">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
                        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="aboutus.html"><span class="glyphicon glyphicon-log-in"></span> About Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>


 <!--checkout-->
 <br>
 <br>
 <br>
 <br>
    <div class="container ">
        <div class="row  ">
            <p class ="a">CHECKOUT</p>
            
        </div>
        <div class="row">
            <div class="container one" >
             <h3 >Billing information</h3>
                
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <br>
                    <br>

                    <p class ="size">Product:</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <br>
                    <br>
                    <div class="resize"><?php echo $img?></div>
                    <br>
                    <p style="font-family: 'Darker Grotesque', sans-serif;font-size: 200%;"> <?php echo $pname;?></p>
                 </div>
            </div>
            <div class="row">
                  
                   <div class="col-lg-4"><p class="size">Price:</p></div>
                   <div class="col-lg-4"> <p class="size1"><?php echo $money;?></p></div>


            </div>
            <div class="row">
                  
                <p align="left" style="font-family:'Darker Grotesque', sans-serif; font-size: 250%;background-color: #fff5d9;">User Information&Adderss</p>

            </div>
            <div class="row">
                  
                   <div class="col-lg-4"><p class="size">Email:</p></div>
                   <div class="col-lg-4"> <p class="size1"><?php echo $username;?></p></div>
                   

            </div>
            <div class="row">
                  
                   <div class="col-lg-4"><p class="size">City:</p></div>
                   <div class="col-lg-4"> <p class="size1"><?php echo $city;?></p></div>
                   

            </div>
            <div class="row">
                  
                   <div class="col-lg-4"><p class="size">State:</p></div>
                   <div class="col-lg-4"> <p class="size1"><?php echo $state;?></p></div>

                   

            </div>
            <div class="row">
                  
                   <div class="col-lg-4"><p class="size">Zipcoad:</p></div>
                   <div class="col-lg-4"> <p class="size1"><?php echo $zip;?></p></div>
                   
                   

            </div>
            <div class="row">
                  
                   <div class="col-lg-6"> </div>
                   <div class="col-lg-4"> 
                    <form action="home.php">
                    <button class="btn btn-primary" >Buy Now</button>
                </div>
                   </form>
                   

            </div>

            






        </div>
        
    </div>
 
 
 </body>
 </html>