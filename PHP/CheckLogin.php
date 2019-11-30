<?php
$servername = "localhost";
$dbuser = "root";
$password = "admin";
$dbname = "OHMs";
$con = mysqli_connect($servername, $dbuser, $password, $dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM uploadtable WHERE active='yes'";
?>
<?php $result = mysqli_query($con, $sql); 
  if (mysqli_num_rows($result) > 0) { ?>
    <a href="../PHP/userProfile.php">My Profile</a>
    <a href="../PHP/logout.php">Logout</a>
<?php } else { ?>
    <a href="sign_up.php">Login/Register</a>
<?php } ?>