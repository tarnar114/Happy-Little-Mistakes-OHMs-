<?php include_once '../HTML/nav.php'; ?>
<!-- <fieldset> -->
<br>
<form class="container w3-animate-opacity" action="uploadPage.php" method="post" enctype="multipart/form-data" id="inputForm">
  <legend>IMG File Upload</legend>
  <input type="file" name="file" id="fileselect">
<<<<<<< HEAD
  <br>
  <br>
  <select name="Categories" id="Categories">
    <option value="Landscape">landscape</option>
    <option value="Portrait">portrait</option>
    <option value="Interior">Interior</option>
  </select>
  <br>
  <br>
=======
  <br><br>
  <legend>Category</legend>
  <!-- <input type="" name="" value=""> -->
  <select  list="Category" style="border-color: #85a2df;">
    <!-- <datalist id="Category"> -->
     <option>Categories</option>
     <div class="dropdown-divider"></div>
      <option value="Interiour Design">Interior Design</option>
      
      <option value="Landscape">Landscape</option>
      <option value="Portrait">Portrait</option>
    <!-- </datalist> -->
  </select>
  <br><br>
>>>>>>> 89671ba8d42c591d436b6d9d2bc11f947d6c53f0
  <button type="submit" name="submit" id="submit">UPLOAD</button>
  <br>
</form>
<!-- <br> -->
<!-- </fieldset> -->
<!-- </form> -->


<?php
$servername = "localhost";
$dbuser = "root";
$password = "admin";
$dbname = "OHMs";
$con = mysqli_connect($servername, $dbuser, $password, $dbname);
if (isset($_POST['submit'])) {
  $file = $_FILES['file'];
  $fileName = $_FILES['file']['name'];
  $fileTempName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];
  $Category=$_POST['Categories'];
  $fileExt = explode('.', $fileName);
  $fileActExt = strtolower(end($fileExt));
  $AllowedType = array('jpg', 'jpeg', 'png');
  $sql="SELECT * FROM uploadtable WHERE active='yes'";
  $result=mysqli_query($con,$sql);
  if (mysqli_num_rows($result)>0){
    if (in_array($fileActExt,$AllowedType)){
      if ($fileError===0){

        while ($row=mysqli_fetch_assoc($result)) {
          $fileNameNew = uniqid('', true) . "." . $fileActExt;
          $fileDestination = $row['EmailAddress'].'/'. $fileNameNew;
          $CategoryDest=$Category.'/'.$fileNameNew;
          move_uploaded_file($fileTempName, $fileDestination);
          copy($fileDestination,$CategoryDest);
          echo "<h1>file uploaded</h1>";
<<<<<<< HEAD
=======
          // $context=  get_resource_type($fileType);

          // [, bool $use_include_path = FALSE [, resource $context ]] 
          // readfile($fileName, $fileDestination, $context)
          echo "<div class='container' style='display:grid'> ";
          include "../PHP/showImages.php";
          echo "</div>";
>>>>>>> 89671ba8d42c591d436b6d9d2bc11f947d6c53f0
        }
      }
      else{
        echo "<h1>Error Occured with picture file</h1>";
      }
    }
    else {
      echo "<h1>Please enter either a png, jpg, or jpeg</h1>";
    }
  }
<<<<<<< HEAD
else {
  echo"<h1>Please Sign Up</h1>";
}
=======
>>>>>>> 89671ba8d42c591d436b6d9d2bc11f947d6c53f0
}
?>
