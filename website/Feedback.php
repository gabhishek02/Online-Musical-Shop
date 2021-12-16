





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- <link href="style.css" rel="stylesheet"> -->


    <title>Feedback </title>
    <style>


body{
background-image:url("Images/music-instruments.jpg");
background-size: cover;
background-position: center;
background-position: bottom;    
}
    
  
.container
{
background-color: #999;
margin: 30px;
padding: 10px 20px 50px;
position: absolute;
top: 45%;
left: 45%;
transform: translate(-50%, -50%);
border-radius: 10px;
height: 90%;
width: 40%;    
background:rgba(255,255,255,.2);
box-shadow:  10px 40px 50px rgba(0,0,0.5);
font-size:20px;
 }
        
h2
{
text-align: center;
color: sandybrown;
}

 button 
{
text-align: center; 
}
        
p
{
  font-family:"Time new roman",Times,serif;  
}
  
label
{
  color:sandybrown;
  font-family:"Time new roman",Times,serif;
  font-style:bold;
}

/* texarea */
          
                
#name{
  
  cursor: pointer;
  border: 0.1rem solid  black;
}
#email{
  
  cursor: pointer;
  border: 0.1rem solid black;
}
      
      
#inputcourses{
  
  cursor: pointer;
  border: 0.1rem solid black;
}
#mob{
  
  cursor: pointer;
  border: 0.1rem solid black;
}
#inputsubject{
  
  cursor: pointer;
  border: 0.1rem solid black;
}

#inputstate{
  
  cursor: pointer;
  border: 0.1rem solid black;
}

#bt:hover:not(.active)
{
           
cursor: pointer;
transform: scale(1.1)
}

    </style>
  </head>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <body>


  
  


<!-- login code -->
<div class="container">
  <h2 class="text-centar"><P>Feedback </P></h2>
      <div>
  <form class="row g-3" action ="customer.php" method ="post">
  <div class="col-md-12">
    <label for="name" class="form-label"><h3>Name :</h3></label>
    <input type="text" class="form-control" id="name"  placeholder="Enter your Name"  name="name">
  </div>
  <div class="col-md-12">
    <label for="lastname" class="form-label"><h3>Email Id :</h3></label>
    <input type="email" class="form-control" id="email"  placeholder="Enter your email"  name="email">
  </div>
  
 <div class="col-md-12">
    <label for="lastname" class="form-label"><h3>Mobile numbers :</h3></label>
    <input type="text" class="form-control" id="mob"  placeholder="Enter your number"  name="mobile">
  </div>
   
  <label for="subject"><h3>Message :</h3></label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:50px"></textarea>

  
  
  <div class="col-12">
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>


  
      </div>
    </body>
</html>