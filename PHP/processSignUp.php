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

  $sql = "INSERT INTO uploadtable (FirstName, LastName, Username, Password, EmailAddress) VALUES ('{$con->real_escape_string($_POST['fname'])}', '{$con->real_escape_string($_POST['lname'])}',
    '{$con->real_escape_string($_POST['user'])}', '{$con->real_escape_string($_POST['email'])}', '{$con->real_escape_string($_POST['password'])}')";

    $insert = $con->query($sql);

    if ($insert == TRUE) {
      echo "<h1>Welcome!</h1>";
      header('location:homePage.php');
    } else {
      die ("Error: {$con->erroron} : {$con->error}");
    }

    $con->close();
}
?>
