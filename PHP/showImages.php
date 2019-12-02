<!-- Include Bootstrap and masonry css -->
<!-- Bootstrap -->
<link href="https://fonts.googleapis.com/css?family=Lato:100|Pacifico|Permanent+Marker|Roboto:100,400|Satisfy|Shadows+Into+Light&display=swap&subset=latin-ext" rel="stylesheet">

<style>
    <?php include("../CSS/masonry.css") ?>
</style>

<?php




$images = glob("$email/*.*");
foreach ($images as $image) {

    ?>

    <?php
        echo "<div class='item'>";
        echo "<a href='$image' data-lightbox='image' data-title='User Images' data-alt='userimage'> ";
        echo "<img src='$image'>";
        echo "</div>" ?>


<?php } ?>