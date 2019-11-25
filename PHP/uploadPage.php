<?php include_once '../HTML/nav.html'; ?>
<!-- <fieldset> -->
<form class="container w3-animate-opacity" action="uploadPage.php" method="post" enctype="multipart/form-data" id="inputForm">
  <legend>IMG File Upload</legend>
  <input type="file" name="file" id="fileselect">
  <br>
  <br>
  <button type="submit" name="submit" id="submit">UPLOAD</button>
</form>
<!-- <br> -->
<!-- </fieldset> -->
<!-- </form> -->


<?php
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
  $sql="SELECT * FROM uploadtable WHERE active='yes'";
  $result=mysqli_query($con,$sql);
  if (mysqli_num_rows($result)>0){
    if (in_array($fileActExt,$AllowedType)){
      if ($fileError===0){
        while ($row=mysqli_fetch_assoc($result)) {
          $fileNameNew = uniqid('', true) . "." . $fileActExt;
          $fileDestination = $row['EmailAddress'].'/'. $fileNameNew;
          move_uploaded_file($fileTempName, $fileDestination);
          echo "<h1>file uploaded</h1>";
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
  else {
  echo"<h1>Please Sign Up</h1>";
  }
  }
?>
