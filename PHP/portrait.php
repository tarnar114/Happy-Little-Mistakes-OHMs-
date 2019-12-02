<!DOCTYPE html>
<html lang="en">

<!-- Including the navagation bar at the top of the homepage -->
<?php include '../HTML/nav.php'; ?>

<style>
  /* Including the style provided by the css masonry.css */
  <?php include '../CSS/masonry.css'; ?>
</style>

<body>
  <!-- Creating the heading Landscape -->
  <div id="trending">
    
    <div class="container ">
      <div class="row">


        <div class="col-md">
          <hr >
        </div>


        <div class="col-sm-3">
          <h1>Portrait</h1>
        </div>

        <div class="col-md">
          <hr >
        </div>

      </div>
    </div>
  </div>
    <!-- Creating a class container to display the images uploaded in the landscape category -->
    <div class="container masonry w3-animate-opacity">
      <!-- Including the displayImages() method, to pull all the landscape images -->
      <?php displayImages(); ?>

</div>


</body>
<!-- Including the footnote at the bottom of the page -->
<?php include_once '../HTML/foot.html'; ?>
</html>

<?php
// Creating the displayImages() function, that will pull all the images uploaded to the landscape category
function displayImages()
{

  ?>

  <?php
    // for each image in the directory indicated, echo the image with these html embeded styles
    $images = glob("Portrait/*.*");
    foreach ($images as $image) {
      ?>


    <?php
        echo "<div class='item'>";
        echo "<a href='$image' data-lightbox='portrait' data-title='Portrait' data-alt='portrait'>";
        echo "<img src='$image'>";
        echo "</a>";
        echo "</div>"
        ?>



  <?php } ?>
<?php
}

?>