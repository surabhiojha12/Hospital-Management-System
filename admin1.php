<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="dbms.css">

</head>
<body onscroll="myFunction()" onscroll="myFunction2()">





<div id="fix"><image src="hos.jpg" class="top" width="50%" ><image src="hos.jpg" class="top" width="50%" ></div>

<div id="navbar">
  <a class="active" href="one.html">Home</a>
  <a href="admindoc.php">DOCTOR DETAILS</a>
  <a href="adminpat.php">PATIENT DETAILS</a>
  <a href="adminrec.php">RECEPTIONIST DETAILS</a>
</div>

<div class="header" id="header1">
  <h1>WELCOME TO LIVE LIFE</h1>
  <p>LIVE A HEALTHY LIFE</p>
</div>

<script>
var navbar = document.getElementById("navbar");

var sticky = navbar.offsetTop;

function myFunction() {
  if (window.scrollY >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

</script>



<h1 class="my">WELCOME ADMIN</h1>

<h2 class="my">DOCTOR DETAILS</h2>

<div class="container">
  
  <form method="get" action="admindoc.php">
  <button type="submit" class="btn btn-primary btn-block">ACCESS AND ADD DOCTORS DETAILS</button>
  </form>
</div>


<h2 class="my">PATIENTS DETAILS</h2>
<div class="container">
  
  <form method="get" action="adminpat.php">
  <button type="submit" class="btn btn-primary btn-block">ACCESS AND ADD PATIENTS DETAILS</button>
  </form>
</div>

<h2 class="my">RECEPTIONIST DETAILS</h2>

<div class="container">
  
  <form method="get" action="adminrec.php">
  <button type="submit" class="btn btn-primary btn-block">ACCESS AND ADD RECEPTIONIST DETAILS</button>
</form>
  
</div>

<h3><a href = "logout.php">Sign Out</a></h3>

<footer class="text-center">
  <a class="up-arrow" href="#fix" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>LIVE LIFE<a href="https://www.shopiteasyshop.com" title="Visit w3schools"></br>www.livelife.com</a></p>
  <p>THIS IS MY DBMS PROJECT</br>Email at coderstechcodeit@gmail.com if you wish to build any dynamic and static websites</p>  
</footer>
</body>
</html>