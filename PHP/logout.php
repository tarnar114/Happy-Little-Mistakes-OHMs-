<head>
  <link href="https://fonts.googleapis.com/css?family=Lato:100|Pacifico|Permanent+Marker|Roboto:100,400|Satisfy|Shadows+Into+Light&display=swap&subset=latin-ext" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- W3 School CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
  <?php include("../CSS/nav.css") ?>
</style>

<?php $servername = "localhost";
$dbuser = "root";
$password = "admin";
$dbname = "OHMs";

$con = mysqli_connect($servername, $dbuser, $password, $dbname);

$signout = "UPDATE uploadtable SET active='no' WHERE active='yes'";
$signOutQuery = $con->query($signout);
?>


<body>
  <h1 class="w3-display-middle w3-animate-opacity"> Thank you for using Only Happy Mistakes!
    <p style="font-size:40%"> Click
      <a href="../PHP/login_startup.php"> <b style="color:#85a2df; font-size:large">here</b>  </a>to undo your Happy Mistake! </p>
  </h1>