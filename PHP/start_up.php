<!DOCTYPE html>
<html lang="en">

<head>
  <!-- W3 School CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:100|Pacifico|Permanent+Marker|Roboto:100,400|Satisfy|Shadows+Into+Light&display=swap&subset=latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <!-- Startup CSS (Signup Page) -->
  <link rel="stylesheet" href="../CSS/startup.css">
</head>

<body>
  <div class="container w3-rounded w3-animate-opacity w3-animate-zoom login-box">

    <!-- create the signup form with all fields required to be completely filled-->
    <div id="signupform">

      <form class="container py-4 col-form-label-lg" action="processSignup.php" method="post">
        <h2> Signup Here </h2><br>
        <div class="form-group">
          
          <input type="text" name="fname" class="form-control" placeholder="First Name" required>
        </div>
        <div class="form-group">
          
          <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="form-group">
          
          <input type="text" name="user" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group">
          
          <input type="password" name="password" placeholder="Password" class="form-control" required>
        </div>
        <div class="form-group">
          
          <input type="text" name="email" placeholder="Enter Email Address" class="form-control" required>
          <small id="emailHelp" class="form-text py-1 text-muted" style="font-size:xx-small; align-content:center;">We'll never share your email with anyone else.</small>
        </div>
        
        <div class="">
          <small id="emailHelp" class="form-text text-muted">Already have an account? Log in <a href="../PHP/login_startup.php"><b style="color:#85a2df; font-size:large">here</b></a></small>
        </div>
        <br>
        <!-- create button for submitting the form -->
        <button type="submit" class="btn"> Submit </button>
      </form>
    </div>

  </div>

</body>

</html>
