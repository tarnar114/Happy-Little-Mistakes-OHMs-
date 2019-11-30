<link href="https://fonts.googleapis.com/css?family=Lato:100|Pacifico|Permanent+Marker|Roboto:100,400|Satisfy|Shadows+Into+Light&display=swap&subset=latin-ext" rel="stylesheet">
<style>
    <?php include("../CSS/masonry.css") ?>
</style>
<?php



// echo "<div class='container' style='display:grid'> ";
$images = glob("$email/*.*");
foreach ($images as $image) {
    // $image = $images[$i];
    // echo basename($image) . "<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
    ?>
    <div class="container">
        <div class="masonry">
            <div class="  w3-animate-opacity" id="votingpoll">
                <div class="item">
                    <!-- <p> -->
                    <?php echo "<img src='$image'>"; ?>
                    <!-- <input type="radio" name="vote" value="0" onclick="getVote(this.value)"> -->
                    <!-- </p> -->

                </div>

            </div>
        </div>
    </div>
    <!-- </form> -->
    <!-- <br><br> -->
    <!-- </div> -->

<?php } ?>