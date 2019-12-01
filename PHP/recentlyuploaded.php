<!-- 
    Objectives:
               Create a homepage for the website. This page will include a navigation bar, allowing the user to direct the website at ease.
               Create a voting poll, where the user can vote on their favorite image from a select amount of images.
               Create a welcoming jumbotron for the website.
 -->

<!DOCTYPE html>
<html lang="en">

<!-- Including the navagation bar at the top of the homepage -->
<?php include '../HTML/nav.php'; ?>

<style>
/* Including the style provided by the css masonry.css */
<?php include '../CSS/masonry.css'; ?>
</style>

<body>
<div style="height:50px"></div>
    <div class="container ">
      <div class="row">
        <div class="col-md">
          <hr class="my-4">
        </div>

        <!-- Contact links -->
        <div class="col-sm-3">
          <h1>Recently Uploaded</h1>
        </div>

        <div class="col-md">
          <hr class="my-4">
        </div>
      </div>
    </div>

<div class="container masonry w3-animate-opacity">
<a href="../PHP/trending.php">
  <div class="item">
    <p>@Cameron</p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>
</a>

<a href="../PHP/trending.php">
  <div class="item">
    <p>@Cameron</p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>
</a>
  
<a href="../PHP/trending.php">
  <div class="item">
    <p>@Tiwa</p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>
</a>
  
<a href="../PHP/trending.php">
  <div class="item">
    <p>@Deepak</p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>
</a>
  
<a href="../PHP/trending.php">
  <div class="item">
    <p>@Tiwa</p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>
</a>
  
<a href="../PHP/trending.php">
  <div class="item">
    <p>@John</p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>
</a>
  
<a href="../PHP/trending.php">
  <div class="item">
    <p>@Tanzir</p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>
</a>

<a href="../PHP/trending.php">
  <div class="item">
    <p>@Tiwa</p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>
</a>

<a href="../PHP/trending.php">
  <div class="item">
   <p>@Tanzir</p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>
</a>
  
<a href="../PHP/trending.php">
  <div class="item">
    <p>@Chris</p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>
</a>
  
<a href="../PHP/trending.php">
  <div class="item">
    <p>@Cameron</p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>
</a>

<a href="../PHP/trending.php">
    <div class="item">
    <p>@Deepak</p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>
</a>

</div>


</body>
<?php include_once '../HTML/foot.html'; ?>
</html>