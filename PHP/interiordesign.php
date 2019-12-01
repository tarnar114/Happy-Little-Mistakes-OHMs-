<!DOCTYPE html>
<html lang="en">
<?php include '../HTML/nav.php'; ?>

<style>
  <?php include '../CSS/masonry.css'; ?>
</style>

<body>

  <div id="trending">
    <div style="height:50px"></div>
    <div class="container ">
      <div class="row">
        <div class="col-md">
          <hr class="my-4">
        </div>

        <!-- Contact links -->
        <div class="col-sm-3">
          <h1>Interior Design</h1>
        </div>

        <div class="col-md">
          <hr class="my-4">
        </div>
      </div>
    </div>


    <!-- <h1></h1> -->

    <div class="container masonry w3-animate-opacity">
    
        <?php displayImages(); ?>
     
    </div>
  </div>


</body>
<?php include_once '../HTML/foot.html'; ?>

</html>
<?php

function displayImages()
{

  ?>

  <?php

    $images = glob("Interior/*.*");
    foreach ($images as $image) {
      ?>


    <?php
        echo "<div class='item'>";
        echo "<a href='$image' data-lightbox='interior' data-title='Interior Design' data-alt='interior design'>";
        echo "<img src='$image'>";
        echo "</a>";
        echo "</div>"
        ?>



  <?php } ?>
<?php
}

?>