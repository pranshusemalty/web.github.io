 <?php
 $con= mysqli_connect("localhost","root","","ecommerce1")
         or die(mysqli_error($con));
 $select_query="SELECT id,email_id,first_name,last_name from users";
  $select_query_result =  mysqli_query($con, $select_query) or die(mysqli_error($con));
  $total_rows_fetched = mysqli_num_rows($select_query_result);
  
  
  
  for ($i=0;$i <= $total_rows_fetched;$i++)
  {
      $row = mysqli_fetch_array($select_query_result);
    echo $row["id"]."<br>";
    echo $row["email_id"]."<br>";
    echo $row["first_name"]."<br>";
    
  }
  
  
 ?>