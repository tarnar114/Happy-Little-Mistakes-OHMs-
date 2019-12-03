<?php include_once '../HTML/nav.php'; ?>
<style>
  #inputForm {
    align-self: center;
    margin: auto;
    top: 30px;
    background-color: whitesmoke;
    width: max-content;
    padding: 5px;
    border-radius: 5px;

  }
</style>



<form class="my-5 w3-animate-zoom" action="uploadPage.php" method="post" enctype="multipart/form-data" id="inputForm">

  <h1><img src="https://icon.now.sh/cloud" alt="upload" style="align-content: center; height:80px; width:80px;"> <br> IMG File Upload</h1>

  <div class="py-4"> <input type="file" name="file" id="fileselect">
    <br>
    <br>

    <select name="Categories" id="Categories">
      <option value="Landscape">Landscape</option>
      <option value="Portrait">Portrait</option>
      <option value="Interior">Interior Design</option>
    </select>
    <br>
    <br>
    <button type="submit" name="submit" id="submit">UPLOAD</button>
    <br></div>

</form>

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
  $Category = $_POST['Categories'];
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
          $CategoryDest = $Category . '/' . $fileNameNew;
          $RecentDest = "Recently Uploaded/" . $fileNameNew;
          move_uploaded_file($fileTempName, $fileDestination);
          copy($fileDestination, $CategoryDest);
          copy($CategoryDest, $RecentDest);
          echo "<h1>file uploaded
          <br><img src='https://icon.now.sh/done_all' alt='success' style='align-content: center; height:50px; width:50px;'>
          </h1>";
        }
      } else {
        echo "<h1>Error Occured with picture file</h1>";
      }
    } else {
      echo "<h1>Please enter either a png, jpg, or jpeg</h1>";
    }
  } else {
    echo "<h1>Please Sign Up</h1>";
  }
}
?>