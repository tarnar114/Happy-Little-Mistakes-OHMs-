<link href="https://fonts.googleapis.com/css?family=Lato:100|Pacifico|Permanent+Marker|Roboto:100,400|Satisfy|Shadows+Into+Light&display=swap&subset=latin-ext" rel="stylesheet">
<style>
  <?php include('../CSS/nav.css'); ?>
</style>
<?php

// if the inputs aren't empty the browser accesses the browser and creates a new Id and fills a column of the table with the new users credentials
if (!empty($_POST)) {

  $servername = "localhost";
  $dbuser = "root";
  $password = "admin";
  $dbname = "OHMs";

  $con = mysqli_connect($servername, $dbuser, $password, $dbname);

  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $email = $_POST['email'];
  $activeString = "no";
  $sql = "INSERT INTO uploadtable (FirstName, LastName, Username, Password, EmailAddress,active) VALUES ('{$con->real_escape_string($_POST['fname'])}', '{$con->real_escape_string($_POST['lname'])}',
    '{$con->real_escape_string($_POST['user'])}', '{$con->real_escape_string($_POST['password'])}', '{$con->real_escape_string($_POST['email'])}','{$con->real_escape_string($activeString)}')";
  $insert = $con->query($sql);
  if ($insert == TRUE) {
    mkdir($email);
    echo "<h1 class='sign w3-display-middle w3-animate-opacity'  style='font-size:8vw' >Welcome!";

    echo "<br><a href='../PHP/homepage.php' role='button' style='font-size:50%;background-color:transparent; border-color:#85a2df; border-radius:2vw;'>OHM Page</a>";

    echo "</h1>";

  } else {
    die("Error: {$con->erroron} : {$con->error}");
  }

  $con->close();
}
?>
