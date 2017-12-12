						<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      //$myusername = mysqli_real_escape_string($db,$_POST['email']);
      //$mypassword = mysqli_real_escape_string($db,$_POST['psw']); 

      $myusername = $_POST['email'];
      $mypassword = $_POST['psw']; 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
         
         header("location: admin1.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
         
         
      }
   }
?>