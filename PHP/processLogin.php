
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

  // Collects the users input for login and stores them to be used as a variable
  if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
  }

  //reading and store info from the database table
  $sql = "SELECT * FROM uploadtable WHERE EmailAddress='" . $email . "' AND Password='" . $pass . "' LIMIT 1";

  $result = mysqli_query($con, $sql);

  // If the input from the user matches the data collected from the database access is granted to the user and a welcome page and users images are displayed. 
  // Else not correct, a message will be displayed for the user to try again
  if (mysqli_num_rows($result) > 0) {
    $activeChar = 'yes';
    $active = "UPDATE uploadtable SET active='yes'WHERE EmailAddress='" . $email . "' AND Password='" . $pass . "' LIMIT 1";
    $insert = $con->query($active);
    while ($row = mysqli_fetch_assoc($result)) {

      $fname = $row['FirstName'];
      $lname = $row['LastName'];
      $uname = $row['Username'];
      $email = $row['EmailAddress'];
      
      $ID = $row["Id"];
      
      echo "<h1 class:'sign' style='font-size: 7vw'>";
      echo "Welcome <br> ";
      echo " Name: " . $fname . " " . $lname . "";
      echo "<hr>";
      echo "</h1>'";
      echo "<div class='container'>";
      echo "<div class='container masonry w3-animate-opacity'>";
      include "../PHP/showImages.php";
      echo "<div style='height:150px'></div>";
      echo "</div>";
      echo "</div>";
    }
  } else {
    echo "<h1>Incorrect login.</h1>";
  }

  mysqli_close($con);
}
?>
