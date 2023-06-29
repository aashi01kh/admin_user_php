<?php
include("connection.php");

if(isset($_POST['submit1'])){
  

  $username = $_POST['username'];
  $password = $_POST['password'];
  $errors= array();

  if($username === "user" && $password === "web"){
    header("Location:display.php");
  }
  else if(empty($username) OR empty($password)){
   
    array_push($errors,"All fields are required");
  }
  else{

    $sql = "SELECT * FROM `login` WHERE `logi` = '$username' ";
    $result = mysqli_query($conn,$sql) ;
    $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
    //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($user){
      if(password_verify($password, $user['pass'])){
        header("Location:index.php");
        die();
      }
      else{
        echo'<script>alert("error");</script>';
      }
    }

    else{
      echo'<script>alert("Wrong ID or PASSWORD");</script>';
    }
  }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login-page.css">
  <!-- <script defer src="login-page.js"></script> -->
  <script src="particles.js"></script>
  

</head>

<div id="particles">
  <div id="webcoderskull">
    
    <main id="main-holder">
      
      <h1 id="login-header"  ><p style="color :#66FCF1;"> Login </p></h1>
      
      <div id="login-error-msg-holder">
        <p id="login-error-msg">Invalid username <span id="error-msg-second-line">and/or password</span></p>
      </div>
      <a href="register.php" style="color: #66fcf1;">Register?</a>
      <form id="login-form" method="POST" >
        <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Username" style="color :#C5C6C7;">
        <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password" style="color :#C5C6C7;">
        <button type="submit" name="submit1" value="Submit" id="login-form-submit">Submit</button>
      </form>
    
    </main>
    
  </div>
</div>



</body>




</html>