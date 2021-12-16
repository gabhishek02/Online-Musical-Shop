
<?php

include 'index.php'
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: italic;
  margin: 0;
  background-color: #474e5d; 
    
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
  margin: 8px;
  background-color: #474e5d; 
}

.about-section {
  padding: 70px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: aquamarine;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: darkgray;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
    
.btn {
  background-color: #474e5d;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  border-radius: 5px;
  opacity: 0.6;
  transition: 0.3s;
  transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  text-align: center;
  font-size: 17px;
  position: fixed;
  right: -40px;
  top: 80%;
}

.btn:hover {opacity: 1}
</style>
</head>
<body>
    
    <div>
        <a href="Feedback.php"class="btn">Feedback</a>
    </div>


<div class="about-section">
  <h1>Online Musical Shop</h1>
  <p></p>
  <p></p>
</div>

<h2 style="text-align:center"></h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="Images/Abhishek.jpg" alt="Jane" style="width:100%">
      <div class="container">
          
        <h2>Abhishek Gupta</h2>
        <p class="title">TY BSC IT </p>
        <p>Anand Vishwa Gurukul Sr Night College, Thane  .</p>
        <p>abhishekgupta02022000@gmail.com</p>
        <p><button class="button">Contact</button></p>
          
      </div>
    </div>
  </div>

    

</body>
</html>
