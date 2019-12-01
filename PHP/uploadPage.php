<?php include_once '../HTML/nav.php'; ?>
<!-- <fieldset> -->
<br>
<form class="container w3-animate-opacity" action="uploadPage.php" method="post" enctype="multipart/form-data" id="inputForm">
  <legend>IMG File Upload</legend>
  <input type="file" name="file" id="fileselect">
  <br><br>
  <legend>Category</legend>
  <!-- <input type="" name="" value=""> -->
  <select  list="Category" style="border-color: #85a2df;">
    <datalist id="Category">
     <option>Categories</option>
     <div class="dropdown-divider"></div>
      <option value="Interior Design">Interior Design</option>
      
      <option value="Landscape">Landscape</option>
      <option value="Portrait">Portrait</option>
    </datalist>
  </select>
  <br><br>
  <button type="submit" name="submit" id="submit">UPLOAD</button>
</form>
<!-- <br> -->
<!-- </fieldset> -->
<!-- </form> -->


<?php

// session_start();
// $idValue=$_GET['Id'];
// // if(!empty($_GET)){

$servername = "localhost";
$dbuser = "root";
$password = "admin";
$dbname = "OHMs";
$con = mysqli_connect($servername, $dbuser, $password, $dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['submit'])) {
  $file = $_FILES['file'];
  $fileName = $_FILES['file']['name'];
  $fileTempName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];
  $fileExt = explode('.', $fileName);
  $fileActExt = strtolower(end($fileExt));
  $AllowedType = array('jpg', 'jpeg', 'png');
  $sql = "SELECT * FROM uploadtable WHERE active='yes'";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    if (in_array($fileActExt, $AllowedType)) {
      if ($fileError === 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $fileNameNew = uniqid('', true) . "." . $fileActExt;
          $fileDestination = $row['EmailAddress'] . '/' . $fileNameNew;
          move_uploaded_file($fileTempName, $fileDestination);
          echo "<h1>file uploaded</h1>";
          // $context=  get_resource_type($fileType);

          // [, bool $use_include_path = FALSE [, resource $context ]] 
          // readfile($fileName, $fileDestination, $context)
          echo "<div class='container masonry w3-animate-opacity'> ";
          include "../PHP/showImages.php";
          echo "</div>";
        }
      } else {
        echo "<h1>Error Occured with picture file</h1>";
      }
    } else {
      echo "<h1>Please enter either a png, jpg, or jpeg</h1>";
    }
    // echo $file;
  } else {
    echo "<h1>Please Sign Up</h1>";
  }
}
?>