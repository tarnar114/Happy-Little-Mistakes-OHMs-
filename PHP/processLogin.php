
<?php
// session_start();

include '../HTML/nav.php';
if (!empty($_POST)) {

  $servername = "localhost";
  $dbuser = "root";
  $password = "admin";
  $dbname = "OHMs";

  //connect to sql database
  $con = mysqli_connect($servername, $dbuser, $password, $dbname);

  //check if the connection failed
  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
  }

  //reading and store info from the table
  $sql = "SELECT * FROM uploadtable WHERE EmailAddress='" . $email . "' AND Password='" . $pass . "' LIMIT 1";

  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
    $activeChar = 'yes';
    $active = "UPDATE uploadtable SET active='yes'WHERE EmailAddress='" . $email . "' AND Password='" . $pass . "' LIMIT 1";
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
      echo "<div class='container'>";
      echo "<div class='container masonry w3-animate-opacity'>";
      include "../PHP/showImages.php";
      echo "</div>";
      echo "</div>";
    }
  } else {
    echo "Incorrect login.";
  }

  mysqli_close($con);
}
?>
