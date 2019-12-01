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
  <li class="nav-item active">
    <a class="nav-link" href="../PHP/userProfile.php">My Profile
      <span class="sr-only">(current)</span></a>

  </li>
  <li class="nav-item active">
    <a class="nav-link" href="../PHP/logout.php">Logout
    <span class="sr-only">(current)</span></a>
  </li>
<?php } else { ?>
  <li class="nav-item active">
    <a class="nav-link" href="sign_up.php">Login/Register
      <span class="sr-only">(current)</span></a>
  </li>
<?php } ?>