<?php $servername = "localhost";
  $dbuser = "root";
  $password = "admin";
  $dbname = "OHMs";

  $con = mysqli_connect($servername, $dbuser, $password, $dbname);

  $signout = "UPDATE uploadtable SET active='no' WHERE active='yes'"; 
  $signOutQuery = $con->query($signout);
?>

<?php include_once '../HTML/nav.php'; ?>
<body>
    <h1> Thank you for using Only Happy Mistakes! </h1>
    <p href="homePage.php"> Click here to redirect back to the homepage! </p>