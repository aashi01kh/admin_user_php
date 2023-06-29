<?php
include("connection.php");

if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $errors= array();
    $password = password_hash($pass,PASSWORD_DEFAULT);
    if(empty($user) OR empty($pass)){
      array_push($errors,"All fields are required");
      echo'<script>alert("Fill");</script>';
    }
    else{
        $sql = "INSERT INTO `login` (`logi`,`pass`) VALUES(?,?); ";
        $stmt = mysqli_stmt_init($conn);
        $pre = mysqli_stmt_prepare($stmt,$sql);
        if($pre){
            mysqli_stmt_bind_param($stmt,"ss",$user,$password);
            mysqli_stmt_execute($stmt);
            header("Location:login.php");
        }
        else{
            echo'<script>alert("error");</script>';
        }
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>register</title>
  <link rel="stylesheet" href="login-page.css">
  <script src="particles.js"></script>
  

</head>

<div id="particles">
  <div id="webcoderskull">
    
    <main id="main-holder">
      <h1 id="login-header"  ><p style="color :#66FCF1;"> Register </p></h1>
      
      <div id="login-error-msg-holder">
        <p id="login-error-msg">Invalid username <span id="error-msg-second-line">and/or password</span></p>
      </div>
      <a href="login.php" style="color: #66fcf1;">login?</a>
      <form id="login-form"  method="POST">
        <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Username" style="color :#C5C6C7;">
        <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password" style="color :#C5C6C7;">
        <input type="submit" name="submit" value="Submit" id="login-form-submit">
      </form>
    
    </main>
    
  </div>
</div>



</body>




</html>