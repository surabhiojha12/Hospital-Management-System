
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

<h2 class="my">ENTER NEW PATIENT DETAILS</h2>

<?php
// define variables and set to empty values
$nameErr =$adderr = $diserr = $piderr = $pnoerr = $epnoerr = $doberr = $ageerr = $genderErr ="";
$name = $gender = $add = $dis = $pid = $pno = $epno= $dob = $age = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
 
  

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  

  if (empty($_POST["add"])) {
    $adderr = "Address is required";
  } else {
    $add = test_input($_POST["add"]);
    // check if name only contains letters and whitespace
    //if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      //$adderr = "Only letters and white space allowed"; 
    }
  

   if (empty($_POST["dis"])) {
    $diserr = "Speciality is required";
  } else {
    $dis = test_input($_POST["dis"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$dis)) {
      $diserr = "Only letters and white space allowed"; 
    }
  }

   if (empty($_POST["pid"])) {
    $piderr = "DoctorId is required";
  } else {
    $pid = test_input($_POST["pid"]);
    // check if name only contains letters and whitespace
    if (!is_numeric($pid)) {
      $piderr = "Only numbers allowed"; 
    }
  }

   if (empty($_POST["pno"])) {
    $pnoerr = "Phone Number is required";
  } else {
    $pno = test_input($_POST["pno"]);
    // check if name only contains letters and whitespace
    if (!is_numeric($pno)) {
      $pnoerr = "Only Numbers allowed"; 
    }
  }

  if (empty($_POST["epno"])) {
    $epnoerr = "Emergency Phone Number is required";
  } else {
    $epno = test_input($_POST["epno"]);
    // check if name only contains letters and whitespace
    if (!is_numeric($epno)) {
      $epnoerr = "Only Numbers allowed"; 
    }
  }

   if (empty($_POST["age"])) {
    $ageerr = "Experience is required";
  } else {
    $age = test_input($_POST["age"]);
    // check if name only contains letters and whitespace
    if (!is_numeric($age)) {
      $ageerr = "Only Numbers allowed"; 
    }
  }

   if (empty($_POST["dob"])) {
    $doberr = "Date of birth is required";
  } else {
    $dob = test_input($_POST["dob"]);
    // check if name only contains letters and whitespace
    }
 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="myform">
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  PatientId:<input id="number" type="number" name="pid" value="<?php echo $pid;?>">
  <span class="error"><?php echo $piderr;?></span>
  <br><br>
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  DOB:<input type="date" name="dob"  value="<?php echo $dob;?>"><br>
  <span class="error">* <?php echo $doberr;?></span>
  <br><br>
  Age:<input  type="number" name="age" value="<?php echo $age;?>">
  <span class="error"><?php echo $ageerr;?></span>
  <br><br>
  Phone Number:<input  type="number" name="pno" value="<?php echo $pno;?>">
  <span class="error"><?php echo $pnoerr;?></span>
  <br><br>
  Disease: <input type="text" name="dis" value="<?php echo $dis;?>">
  <span class="error"><?php echo $diserr;?></span>
  <br><br>
  Emergency Contact NUMBER:<input type="number" name="epno" value="<?php echo $epno;?>">
  <span class="error"><?php echo $epnoerr;?></span>
  <br><br>
  Address: <textarea name="add" rows="5" cols="40" width="100%"><?php echo $add;?></textarea>
   <span class="error"><?php echo $adderr;?></span>
  <br><br>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>

<?php
$conn = mysqli_connect("localhost","id2940472_hospital","12345","id2940472_hospital");

// Check connection
if (!$conn) 
{
   // echo "Connection failed: ";
} 
//echo "Connected successfully";

if (($name == "") || ($gender == "") || ($add == "" ) || ($dis =="") || ($pid == "") || ($epno =="") || ($dob =="") || ( $age =="") ||($pno ==""))
{echo "<br>";
echo " <h2> Enter the details properly </h2>";
}

else
// Create connection
{ 
  
  $result_1 = mysqli_query($conn,"SELECT did from Doctor where '$dis'= spe");
  $row1= mysqli_fetch_array($result_1);
 $sql = "INSERT INTO Patient ( pid,pname,dob,age,disease,did,pno,address,epno,gender)
VALUES ('$pid','$name','$dob','$age','$dis','{$row1['did']}','$pno','$add','$epno','$gender')";

if ($conn->query($sql) === TRUE) {
    echo "<br>";
    echo " <h2> New record created successfully </h2>";
} else {
    echo "Error: UNable to insert";
}

echo "<br>";
//echo " YOUR DATA OF DB";
}

 $result = mysqli_query($conn,"SELECT * FROM Patient");



?>
<div>
<!--<div class="w3-container">-->
  <h1>Detail Of Patients</h1>
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
              <th>DATE OF BIRTH</th>
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
                  <td><?php echo $row['dob']; ?></td> 
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