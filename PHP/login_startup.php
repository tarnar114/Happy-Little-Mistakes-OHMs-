<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../CSS/startup.css">
</head>
<body>

<div class="login-box">

<div id="loginform">
  <h2> Login Here </h2><br>
  <form action="processLogin.php" method="post">
    <div class="form-group">
      <label>Email-Address</label><br>
      <input type="text" name="email" placeholder="Enter Email Address" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Password</label><br>
      <input type="password" name="password" placeholder="Enter Password" class="form-control" required>
    </div>
    <br>
    <div class="form-group">
      <small id="emailHelp" class="form-text text-muted">Don't have an account? Sign up <a href="../PHP/start_up.php">here</a></small>
    </div>
    <br>
    <button type="submit" class="btn"> Login </button>
  </form>
</div>
</div>

</body>
</html>
