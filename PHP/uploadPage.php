<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="UploadPgCSS.css">
  </head>
  <body>
      <fieldset>
        <form action="uploadPage.php" method="post"enctype="multipart/form-data"id="inputForm">
        <legend>IMG File Upload</legend>
        <input type="file"name="file"id="fileselect" >
        <br>
        <br>
          <button type="submit"name="submit" id="submit">UPLOAD</button>
        </form>
        <br>
      </fieldset>
    </form>
    <?php
    if (isset($_POST['submit'])){
      $file=$_FILES['file'];
      $fileName=$_FILES['file']['name'];
      $fileTempName=$_FILES['file']['tmp_name'];
      $fileSize=$_FILES['file']['size'];
      $fileError=$_FILES['file']['error'];
      $fileType=$_FILES['file']['type'];
      $fileExt=explode('.',$fileName);
      $fileActExt=strtolower(end($fileExt));
      $AllowedType=array('jpg','jpeg','png');
      if (in_array($fileActExt,$AllowedType)){
        if ($fileError===0){
          $fileNameNew=uniqid('',true).".".$fileActExt;
          $fileDestination='upload/'.$fileNameNew;
          move_uploaded_file($fileTempName,$fileDestination);
          header("Location: index.php?uploadsuccess");
        }
      }
    }
     ?>
     <form>
     <button class="searchbtn" id="searchIcon" type="button" data-toggle="collapse justify-content-end" data-target="#overlay" onclick="on()">
                    <img src="../Images/search.png" alt="search">
                </button>
                <div id="overlay" ondblclick="off()">
           <!-- <h2 font-weight: bolder;">Double click To Exit</h2> -->
           <h2 class="container mb-4 alert alert-primary" role="alert" style="text-align: center;padding-top:5px;">
               Double click to Exit!
           </h2>
           <form class="container py-4" action="../PHP/processSearch.php" method="GET" id="searchForm" onclick="on()">
               <input type="search" name="searchSubmit" placeholder="Search">
               <!-- value="<?php echo $_GET['searchSubmit'] ; ?>" -->
           </form>

       </div>
  </body>
</html>
