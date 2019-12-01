<!-- Objective:
               Create a code where the server checks if the user is logged in. If they are not logged in, the navagation bar will display
               "Login/Register", redirecting the user to the login/register page. If the user is logged in, the navagation bar will display
               "My Profile", where they will be redirected to their personal profile, and "Logout", where the user will be redirected to
               the logout.php page, confirming that the user is logged out
-->

<?php

// Connecting to the server and database, localhost and OHMs database
$servername = "localhost";
$dbuser = "root";
$password = "admin";
$dbname = "OHMs";
$con = mysqli_connect($servername, $dbuser, $password, $dbname);

// Checking the connections to all the selected server attributes
if (!$con) {

  die("Connection failed: " . mysqli_connect_error());
  
}

// Selecting the table "uploadtable" where the value "active" is equal to "yes"
$sql = "SELECT * FROM uploadtable WHERE active='yes'";

?>

<!-- Starting a new php, just for personal preference, seperation and organization -->
<?php 

// Setting $result, referring to $con and $sql, comparing the values in the server and user status, returning a boolean
$result = mysqli_query($con, $sql);

// Checking if the user is logged in, if $result is equal to 1, which is true, the nav bar will display "My Profile" and "Logout"
if (mysqli_num_rows($result) > 0) {

?>

  <!-- Creating an item on the navagation bar, displayed as "My Profile" -->
  <!-- "My Profile" will redirect the user to their personal profile -->
  <li class="nav-item active">
    <!-- Redirecting to userProfile.php when "My Profile" is clicked -->
    <a class="nav-link" href="../PHP/userProfile.php">My Profile
      
      <span class="sr-only">(current)</span></a>

  </li>

  <!-- Creating an item on the navagation bar, displayed as "Logout" -->
  <!-- "Logout" will redirect the user to a page that logs them out, and confirms to the user -->
  <li class="nav-item active">
    <!-- Redirecting to logout.php when "Logout" is clicked -->
    <a class="nav-link" href="../PHP/logout.php">Logout
    
      <span class="sr-only">(current)</span></a>
  </li>
<?php } else { ?>
  
  <!-- Creating an item on the navagation bar, displayed as "Login/Register" -->
  <!-- "Login/Register" will redirect the user to a page where they can login and/or register -->
  <li class="nav-item active">
    
  <!-- Redirecting to sign_up.php when "Login/Register" is clicked -->
    <a class="nav-link" href="sign_up.php">Login/Register
    
      <span class="sr-only">(current)</span></a>
 
  </li>

<?php 
// Finishing the "else" statement
}
?>