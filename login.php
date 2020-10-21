<<?php 
  require "main.php"
 ?>
    <link rel="stylesheet" href="login-style.css">
    
  </head>
  <body>
      <div class="loginbox">
    <img src="img/avatar.png" class="avatar">
      <h1>Login Here</h1>
      <form action="includes/login.inc.php" method="post">
        <p>Username</p>
        <input type="text" name="" placeholder="Enter Username">
        <p>Password</p>
        <input type="password" name="" placeholder="Enter Password">
        <input type="submit" name="login-submit" value="Login"> 
        <a href="forgot.php">Forgot Password</a><br>
        <a href="signup.php">Create New Account</a>
      </form>
    </div>


</body>
</html>