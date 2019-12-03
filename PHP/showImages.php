<!-- Include Bootstrap and masonry css -->
<!-- Bootstrap -->
<link href="https://fonts.googleapis.com/css?family=Lato:100|Pacifico|Permanent+Marker|Roboto:100,400|Satisfy|Shadows+Into+Light&display=swap&subset=latin-ext" rel="stylesheet">

<style>
    <?php include("../CSS/masonry.css") ?>
</style>

<?php



//For each image in the users dir the browser retrieves the images inside the directory. Glob indicates the file path and patterns in the types of filepath
// This will enable accessto each images without having to physically input the file path into the href and src parameters for every new image
$images = glob("$email/*.*");
foreach ($images as $image) {

    ?>

    <?php
        echo "<div class='item'>";
        echo "<a href='$image' data-lightbox='image' data-title='User Images' data-alt='userimage'> ";
        echo "<img src='$image'>";
        echo "</a>";
        echo "</div>" ?>


<?php } ?>