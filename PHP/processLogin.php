
<?php
// session_start();

include '../HTML/nav.html';
if (!empty($_POST)) {

  $servername = "localhost";
  $dbuser = "root";
  $password = "admin";
  $dbname = "OHMs";

  $con = mysqli_connect($servername, $dbuser, $password, $dbname);

  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
  }

  $sql = "SELECT * FROM uploadtable WHERE EmailAddress='" . $email . "' AND Password='" . $pass . "' LIMIT 1";

  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
    $activeChar = 'yes';
    $active = "UPDATE uploadtable SET active='yes'WHERE EmailAddress='" . $email . "' AND Password='" . $pass . "' LIMIT 1";
    $signout = "UPDATE uploadtable SET active='no'WHERE active='yes'";
    $signOutQuery = $con->query($signout);
    $insert = $con->query($active);
    while ($row = mysqli_fetch_assoc($result)) {

      $fname = $row['FirstName'];
      $lname = $row['LastName'];
      $uname = $row['Username'];
      $email = $row['EmailAddress'];
      // global $ID;
      $ID = $row["Id"];
      // $idValue = $_SESSION[$ID];
      // $_SESSION['Id'] = $idValue;
      // include("userProfile.php");
      echo "'<h1 class:'sign' style='font-size: 7vw'>";
      echo "Welcome <br> ";
      echo " Name: " . $fname . " " . $lname . "";
      echo "<hr>";
      echo "</h1>'";
      include ("../PHP/showImages.php");


    }
  } else {
    echo "Incorrect login.";
  }

  mysqli_close($con);
}
?>