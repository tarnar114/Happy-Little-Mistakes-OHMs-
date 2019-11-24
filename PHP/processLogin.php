<?php

if (!empty($_POST)) {

  $servername = "localhost";
  $dbuser = "root";
  $password = "admin";
  $dbname = "OHMs";

  $con = mysqli_connect($servername, $dbuser, $password, $dbname);

  if (!$con) {
    die ("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
  }

  $sql = "SELECT * FROM uploadtable WHERE EmailAddress='" . $email . "' AND Password='" . $pass . "' LIMIT 1";

  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
    $activeChar='yes';
    $active="UPDATE uploadtable SET active='yes'WHERE EmailAddress='" . $email . "' AND Password='" . $pass . "' LIMIT 1";
    $signout="UPDATE uploadtable SET active='no'WHERE active='yes'";
    $signOutQuery=$con->query($signout);
    $insert=$con->query($active);
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<h1>Welcome!</h1>" . $row["FirstName"] . "<br>" . $row["LastName"];
    }
  } else {
    echo "Incorrect login.";
  }

  mysqli_close($con);

}
?>
