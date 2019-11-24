<?php include '../HTML/nav.html'; ?>
<?php

if (!empty($_POST)) {

  $servername = "localhost";
  $dbuser = "root";
  $password = "admin";
  $dbname = "assignment3";

  $con = mysqli_connect($servername, $dbuser, $password, $dbname);

  if (!$con) {
    die ("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
  }

  $sql = "SELECT * FROM users WHERE EmailAddress='" . $email . "' AND Password='" . $pass . "' LIMIT 1";

  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
    $activeChar='yes';
    $active="UPDATE uploadtable SET active='yes'WHERE EmailAddress='" . $email . "' AND Password='" . $pass . "' LIMIT 1";
    $signout="UPDATE uploadtable SET active='no'WHERE active='yes'";
    $signOutQuery=$con->query($signout);
    $insert=$con->query($active);
    while ($row = mysqli_fetch_assoc($result)) {

      $fname = $row['FirstName'];
      $lname = $row['LastName'];
      $uname = $row['Username'];
      $email = $row['EmailAddress'];
      global $ID;
      $ID = $row["Id"];
      echo "'<h1> Name: " . $fname . " " . $lname. "</h1>'";
    }

  } else {
    echo "Incorrect login.";
  }

  mysqli_close($con);

}
?>
