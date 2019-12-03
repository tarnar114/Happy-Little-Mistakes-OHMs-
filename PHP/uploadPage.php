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

<!-- COMMENT YOUR CODE -->

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
$servername = "localhost"; //connect to database by setting database variables and connecting to database
$dbuser = "root";
$password = "admin";
$dbname = "OHMs";
$con = mysqli_connect($servername, $dbuser, $password, $dbname);
if (isset($_POST['submit'])) { //if statement occurs when submit button is pressed
  //variables for the file type, name, size, errors, etc.
  $file = $_FILES['file'];
  $fileName = $_FILES['file']['name'];
  $fileTempName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];
  //directory destination for new files in certain categories
  $Category = $_POST['Categories'];
  //seperates the file name from file etension and sets extension to variable
  $fileExt = explode('.', $fileName);
  $fileActExt = strtolower(end($fileExt));
  //array for allowed image type files
  $AllowedType = array('jpg', 'jpeg', 'png');
  //selects the user that is logged in
  $sql = "SELECT * FROM uploadtable WHERE active='yes'";
  $result = mysqli_query($con, $sql); //accesses the query for logged in user
  //statements that checks if any users are logged in, if the file type is allowed and if the file has any errors when submitting the file
  if (mysqli_num_rows($result) > 0) {
    if (in_array($fileActExt, $AllowedType)) {
      if ($fileError === 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $fileNameNew = uniqid('', true) . "." . $fileActExt; //makes a unique id for each photo
          $fileDestination = $row['EmailAddress'] . '/' . $fileNameNew; //gets the email address from user
          $CategoryDest = $Category . '/' . $fileNameNew; //file destination for category sorting for each photo
          $RecentDest = "Recently Uploaded/" . $fileNameNew; //file destination for recently uploaded photots
          move_uploaded_file($fileTempName, $fileDestination); //first moves the photo to the users file directory
          copy($fileDestination, $CategoryDest); //copies the file in the user directory and puts it in the category file (category file depends on user choice)
          copy($CategoryDest, $RecentDest); //copies the file in the category directory and puts it in the recently uploaded file (category file depends on user choice)
          //tells user that the file was uploaded also shows a picture when successfully uploaded
          echo "<h1>file uploaded
          <br><img src='https://icon.now.sh/done_all' alt='success' style='align-content: center; height:50px; width:50px;'>
          </h1>";
        }
      }
      //tells user that there is a error with the file
      else {
        echo "<h1>Error Occured with picture file</h1>";
      }
    }
    //makes sure a user uploads jpg, jpeg or png files
    else {
      echo "<h1>Please enter either a png, jpg, or jpeg</h1>";
    }
  } else {
    echo "<h1>Please Sign Up</h1>";
  }
  //tells user to sign up first before uploading
}
?>