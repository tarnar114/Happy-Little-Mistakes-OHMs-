<?php include_once '../HTML/nav.html'; ?>
<!-- <fieldset> -->
<br>
<form class="container w3-animate-opacity" action="uploadPage.php" method="post" enctype="multipart/form-data" id="inputForm">
  <legend>IMG File Upload</legend>
  <input type="file" name="file" id="fileselect">
  <br><br>
  <legend>Category</legend>
  <input list="Category">
  <datalist id="Category">
    <option value="Interiour Design">
    <option value="Landscape">
    <option value="Portrait">
  </datalist>
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
          echo "<div class='container' style='display:grid'> ";
          // echo ($fileDestination);
          // readfile($image)
          // $images = glob($fileDestination . "*.*");

          // for ($i = 0; $i < count($images); $i++) {

          //   $image = $images[$i];
          //   echo '<img style="width: 200px; height:200px;"  src="' . $image . '" alt="Random image" />' . "<br /><br />";
          // }


          // foreach (glob("'../'$fileDestination{*.gif,*.jpg,*.png,*.jpeg}", GLOB_BRACE) as $image) {
          //   // $image = ;
          //   // file_get_contents($fileDestination);
          //   
          // }



          // echo $fileDestination;
          // echo $image[1];
          // $images=array();
          // $images[]=$image;
          // foreach($fileDestination as $image){
          // if (is_dir($fileDestination)) {





          //   $images = scandir($fileDestination);
          //   for ($i = 0; $i <= count($images); $i++) {
          //     // if($images[$i] != '.' && $images!='..'){
          //     echo '<img style="width: 200px; height:200px;"  src="' . $fileDestination . $images[$i] . '" alt="Random image" />' . "<br /><br />";
          //     // }
          //   }
          // }
          // for ($i = 0; $i < count($fileD); $i++) {
          //   $image = $file[$i];
          //   echo basename($image) . "<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
          //   // echo '<img src="' . $image . '" alt="Random image" />' . "<br /><br />";

          // }


          // $files = glob($fileDestination);
          // for ($i = 0; $i < count($files); $i++) {
          //   $image = $files[$i];
          //   $supported_file = array(
          //     'gif',
          //     'jpg',
          //     'jpeg',
          //     'png'
          //   );

          //   while ($ext = strtolower(pathinfo($image, PATHINFO_EXTENSION))) {
          //     if (in_array($ext, $supported_file)) {
          //       echo basename($image) . "<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
          //       echo '<img style="width: 200px; height:200px;"  src="' . $image . '" alt="Random image" />' . "<br /><br />";
          //     } else {
          //       continue;
          //     }
          //   }


          // echo "<img style='width: 200px; height:200px; ,'". ($images[0])."> " ;
          // }
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