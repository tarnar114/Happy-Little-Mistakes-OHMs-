<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- W3 School CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:100|Pacifico|Permanent+Marker|Roboto:100,400|Satisfy|Shadows+Into+Light&display=swap&subset=latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <!-- Startup CSS -->
  <link rel="stylesheet" href="../CSS/startup.css">
</head>

<body>
  <!-- A login form to permit the right user into the website. If no account is present, a link will be provided to signup -->
  <div class="container w3-rounded w3-animate-opacity w3-animate-zoom login-box" style="animation-duration: 1s;">

    <form class="container py-4 col-form-label-lg" action="processLogin.php" method="post">
      <h2> Login Here </h2><br>
      <div class="form-group">

        <input type="text" name="email" placeholder="Email Address" class="form-control" required>
      </div>
      <div class="form-group">

        <input type="password" name="password" placeholder="Password" class="form-control" required>
      </div>
      <br>

      <small id="emailHelp" class="form-text text-muted">Don't have an account? Sign up <a href="../PHP/start_up.php"> <b style="color:#85a2df; font-size:large">here</b> </a></small>

      <br>
      <button type="submit" class="btn"> Login </button>
    </form>
  </div>



</body>

</html>