<?php
   include('session1.php');
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="dbms.css">
<style>
.error {color: #FF0000;}
</style>
<head></head>
<body onscroll="myFunction()" onscroll="myFunction2()">





<div id="fix"><image src="hos.jpg" class="top" width="50%" ><image src="hos.jpg" class="top" width="50%" ></div>

<div id="navbar">
  <a class="active" href="one.html">Home</a>
  
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
 <h1>Welcome <?php echo $login_session; ?></h1> 

<h1 class="my">WELCOME DOCTOR</h1>

<h2 class="my">YOUR DETAILS</h2>



<?php
$conn = mysqli_connect("localhost","id2940472_hospital","12345","id2940472_hospital");

// Check connection
if (!$conn) 
{
   // echo "Connection failed: ";
} 
//echo "Connected successfully";


// Create connection

 $result = mysqli_query($conn,"SELECT * FROM Doctor where email = $login_session");



?>
<div>
<!--<div class="w3-container">-->
    <table class="table table-hover">
          
              <th>DOCTORID</th>
              <th>NAME</th>
              <th>EXPERIENCE</th>
              <th>SPECIALITY</th>
              <th>DATE OF BIRTH</th>
              <th>PHONE NO</th>
              <th>ADDRESS</th>
              <th>EDUCATION</th>
              <th>GENDER</th>
              <th>EMAIL</th>
              <th>PASSWORD</th>
              <?php

                   
                     while($row = mysqli_fetch_array($result)) 
                     {  

                ?>
          <tr>
                  <td><?php echo $row['did']; ?></td> 
                  <td><?php echo $row['dname']; ?></td> 
                  <td><?php echo $row['exp']; ?></td> 
                  <td><?php echo $row['spe']; ?></td> 
                  <td><?php echo $row['dob']; ?></td> 
                  <td><?php echo $row['pno']; ?></td> 
                  <td><?php echo $row['address']; ?></td> 
                  <td><?php echo $row['edu']; ?></td> 
                  <td><?php echo $row['gender']; ?></td> 
                  <td><?php echo $row['email']; ?></td> 
                  <td><?php echo $row['password']; ?></td> 
                  
          </tr> 
                <?php

                }
                
                 ?>

              
                 </table>
         </div>

<?php
$result = mysqli_query($conn,"SELECT * FROM Patient where Patient.did = Doctor.did");



?>
<div>
<!--<div class="w3-container">-->
  <h1>Detail Of Patients </h1>
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Display</button>
   
   <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>


         <div class="form">
         <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          
              <th>PATIENTID</th>
              <th>NAME</th>
              <th>AGE</th>
              <th>DISEASE</th>
              <th>DOCTORID</th>
              <th>PHONE NO</th>
              <th>ADDRESS</th>
              <th>EMERGENCY CONTACT NO</th>
              <th>GENDER</th>
              <?php

                   
                     while($row = mysqli_fetch_array($result)) 
                     {  

                ?>
          <tr>
                  <td><?php echo $row['pid']; ?></td> 
                  <td><?php echo $row['pname']; ?></td> 
                  <td><?php echo $row['age']; ?></td> 
                  <td><?php echo $row['disease']; ?></td> 
                  <td><?php echo $row['did']; ?></td> 
                  <td><?php echo $row['pno']; ?></td> 
                  <td><?php echo $row['address']; ?></td> 
                  <td><?php echo $row['epno']; ?></td> 
                  <td><?php echo $row['gender']; ?></td> 
                  
                  
          </tr> 
                <?php

                }
                
                 ?>

              
                 </table>
              </div>
            </div>
      </div>
    </div>
  </div>
</div>





<h3><a href = "logout1.php">Sign Out</a></h3>

<footer class="text-center">
  <a class="up-arrow" href="#fix" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>LIVE LIFE<a href="https://www.shopiteasyshop.com" title="Visit w3schools"></br>www.livelife.com</a></p>
  <p>THIS IS MY DBMS PROJECT</br>Email at coderstechcodeit@gmail.com if you wish to build any dynamic and static websites</p>  
</footer>


</body>
</html>