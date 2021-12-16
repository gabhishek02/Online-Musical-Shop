<?php
include 'index.php';
  include 'partials/dbconnect.php';
 // include 'sql.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<style>
body{
  
  background-image:url("Images/Drum%20Kit1.jpg");
  background-size: cover;
  background-position: center;
  font-family: italic;
 
}
    
  
  .container{
    background-color: #999;
    margin: 80px;
    padding: 10px 20px;
    position: absolute;
    top: 45%;
    left: 45%;
    transform: translate(-50%, -50%);
    border-radius: 10px;
    height: 65%;
    width: 34%; 
    background: rgba(255,255,255,.2);
    box-shadow: 25px 80px 60px rgba(0,0,0.5);
    text :bold;
    font-size:20px;
  }
  h2{
    text-align: center;
    color: blue;
    
    
  

  
  }

 button {
    text-align: center;

    width: 100%;
    
    
  }
p{

  font-family:"Time new roman",Times,serif;
 
    
  }
  
label{
  color:black;
  font-family:"Time new roman",Times,serif;
}

/* texarea */
#username{
  
  cursor: pointer;
  border: 0.1rem solid blue;
}
#Password{
  
  cursor: pointer;
  border: 0.1rem solid blue;
}
#cpassword{
  
  cursor: pointer;
  border: 0.1rem solid blue;
}
#bt{
  
  cursor: pointer;


}


#bt:hover:not(.active) {
           
            cursor: pointer;
            transform: scale(1.1)
        }

  
  



</style>
    <title>signup website</title>
  </head>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <body> 

  


  <!-- nevbar cding -->
  
  
<?php

if(isset($_POST['signup']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
 echo $username;
 
$sqlq="INSERT INTO `account` ( `username`, `password`) VALUES ( '$username', '$password')";

if(mysqli_query($con,$sqlq)){
  echo "<script> alert('Registed Succesfully!!!!') </script>";
  echo"<script> document.location.href='login.php'; </Script>";
}
else{
	echo'<script> alart("!!!!") </script>';
}
}
?>


<!-- login code -->
<div class="container">
  <h2 class="text-centar"><P>SIGNUP</P></h2>
  <div>
  <form action ="signup.php" method ="post">
  <div class="mb-3">
    <label for="username">username</label>
    <input type="username" class="form-control"  required id="username" placeholder="Enter your username"  name ="username" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for ="Password">Password</label>
    <input type="password" class="form-control" id="Password"  placeholder="Enter your password" name ="password">
    
  </div>
  <div class="mb-3">
    <label for ="cpassword">confom password</label>
    <input type="password" class="form-control" id="cpassword"  placeholder="Enter your cpassword" name ="cpassword">
        

    
  </div>
  <button name="signup"   type="submit" id="bt" class="btn btn-primary">signup</button>
</form>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  <script>

  </script>

  </body>
</html>