<?php include_once '../HTML/nav.html'; ?>
<!-- <fieldset> -->
<form class="container py-4" action="uploadPage.php" method="post" enctype="multipart/form-data" id="inputForm">
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
  if (in_array($fileActExt, $AllowedType)) {
    if ($fileError === 0) {
      $fileNameNew = uniqid('', true) . "." . $fileActExt;
      $fileDestination = 'upload/' . $fileNameNew;
      move_uploaded_file($fileTempName, $fileDestination);
      header("Location: index.php?uploadsuccess");
    }
  }
}
?>




<?php include_once '../HTML/foot.html'; ?>