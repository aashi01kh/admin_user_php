<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login-page.css">
  <script defer src="login-page.js"></script>
  <script src="particles.js"></script>
  

</head>

<div id="particles">
  <div id="webcoderskull">
    
    <main id="main-holder">
      <h1 id="login-header"  ><p style="color :#66FCF1;"> Login </p></h1>
      
      <div id="login-error-msg-holder">
        <p id="login-error-msg">Invalid username <span id="error-msg-second-line">and/or password</span></p>
      </div>
      
      <form id="login-form">
        <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Username" style="color :#C5C6C7;">
        <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password" style="color :#C5C6C7;">
        <input type="submit" value="Login" id="login-form-submit">
      </form>
    
    </main>
    
  </div>
</div>



</body>




</html>