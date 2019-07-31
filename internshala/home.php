  <?php
 session_start(); 
 $user=$_SESSION['username'];
  
 ?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="home.css">
        <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Kaushan+Script&display=swap" rel="stylesheet">
	<title>home</title>

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
                    <a class="navbar-brand" href="index.html">Lifestyle Store   &nbsp &nbsp<?php echo  $user;?> </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="aboutus.html"><span class="glyphicon glyphicon-log-in"></span> About Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
<!--FORM STARTS-->
<br>
<br>
 
 
<div class="container-fluid">
    <div class="row">

        <div class="box1">
            <br>
            <br>
            <br>
            <br>
            <h1 class="pos">Best collection ever</h1>
            <h3 class="P1">Explore now</h3S>
            
            

            
         </div>
    </div>
   

</div>
 <!--box 1 ends-->
 <div class="container-fluid">
    <div class="row">
        <br>
        <br>
        <br>
        <form  method="GET" action="checkout.php">
        <div class="col-lg-6"  >
             <img class="  img-responsive img1" src="images/time.jpg" >
        </div>
        <div class="col-lg-6"  >
            <h1 class="sp1">
                Because Time is money <p></p>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <input type="hidden" for="model" name="model" value="BREITLING">
             <button type="submit" class="btn btn-primary">Buy Now</button>
   
</div>
</form>
            </h1>
              
    </div>
    
     
 </div>
  <!--card portion-->
 <div class="container">
    <br>
    <br>
    <br>
    <br>
     <div class="row">
        <div class="col-lg-3">

     
</div>
 
<div class="col-lg-4">
<h1 class="s1">Rolex M5</h1>
   <h3 class="s1">Crafted with the best of what rolex is known for.
    <p>This piect is perfect to start valueing yout time.</p></h3>

   

</div>
  <form method="GET" action="checkout.php"><!---->
<div class="col-lg-4">

      <div class="card  " style="width: 40rem;"method="GET" action="checkout.php">
  <img class="card-img-top img-responsive img-rounded" src="images/1.jpg " alt="Card image cap">
  <div  class="card-body">
    <h5 class="card-title">Rolex M54</h5>
    
    
    <p class="card-text">Rs 4,799</p>
    <input type="hidden" for="model" name="model" value="Rolex M54">
    
    <button type="submit" class="btn btn-primary">Buy Now</button>
    
  </div>
</div>
   
</div>
</form><!---->
 
    </div>
</div>
        







        <div class="container ">
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-6">
                    <!--card-->
<form method="GET" action="checkout.php">
      <div class="card  " style="width: 50rem;">
  <img class="card-img-top img-responsive img-rounded" src="images/6.jpg " alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">FOSSIL</h5>
    <p class="card-text">Rs 8,450</p>
    <input type="hidden" for="model" name="model" value="FOSSIL">
    <button type="submit" class="btn btn-primary">Buy Now</button>
  </div>
</div>
<!--card-->
                    
                </div>
                </form>
                 

                <div class="col-lg-6">
                    <h1 class="s1">FOSSIL
                        <p>This is you perfect friend.You can carry it ,where ever you go</p></h1>
                </div>









            </div>
            
        </div>
        <br>
        <br>
        <div class="row">
            <div class="box2">
                <h1 class="al1">Vintage vibes</h1>>
                
            </div>
        </div>

        <div class="row">
            <br>
            <br>
            <br>
            <div class="col-lg-1"></div>


            <div class="col-lg-3">
                
                <h1 class="s2">Roadster</h1>
                <h1><p class="s1">Want some  vintage vibes the you are good to go with this stylish Masterpiece from ROADSTER</p></h1>
            </div>

            <div class="col-lg-1"></div>
         <form method="GET" action="checkout.php">
            <div class="col-lg-4">
                   <div class="card  " style="width: 40rem;">
  <img class="card-img-top img-responsive img-rounded" src="images/time2.jpg " alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Roadster</h5>
    <p class="card-text">Rs 12,000</p>

   <input type="hidden" for="model" name="model" value="ROADSTER">
    <button type="submit" class="btn btn-primary">Buy Now</button>
  </div>
</div>
</form>
<div class="row">

</div>
</div>
 </div>
 <!---->
 <br>
 <br>
 <br>
 <br>
<div class="container ">
    
     <div class=" box3">
        <div class="row">
            <form method="GET" action="checkout.php">
        <h1 class="al1">Always rugged and tough. <p></p>Here is 60% off</h1>
         
         </div>
         <div class="row">
            <div class="col-lg-6"></div>
            <input type="hidden" for="model" name="model" value="MAST&HARBOUR">
            <div class="col-lg-4"> <button type="submit" class="btn btn-secondary">Buy Now</button></div>
             
         </div>
         </form>
     </div>
 </div>
</body>
</html>