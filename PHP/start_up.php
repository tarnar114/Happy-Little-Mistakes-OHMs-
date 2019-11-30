<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../CSS/startup.css">
</head>
<body>
  <div class="login-box">

    <div id="signupform">
      <h2> Signup Here </h2><br>
      <form action="processSignup.php" method="post">
        <div class="form-group">
          <label>First Name</label><br><br>
          <input type="text" name="fname" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Last Name</label><br><br>
          <input type="text" name="lname" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Username</label><br><br>
          <input type="text" name="user" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Password</label><br><br>
          <input type="password" name="password" placeholder="Enter Password" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Email-Address</label><br><br>
          <input type="text" name="email" placeholder="Enter Email Address" class="form-control" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <br>
        <div class="form-group">
          <small id="emailHelp" class="form-text text-muted">Already have an account? Log in <a href="../PHP/login_startup.php">here</a></small>
        </div>
        <br>
        <button type="submit" class="btn"> Submit </button>
      </form>
    </div>

  </div>

</body>
</html>
