<!-- Bootstrap -->
<link href="https://fonts.googleapis.com/css?family=Lato:100|Pacifico|Permanent+Marker|Roboto:100,400|Satisfy|Shadows+Into+Light&display=swap&subset=latin-ext" rel="stylesheet">

<style>
    <?php include("../CSS/masonry.css") ?>
</style>
<!-- W3 School CSS -->
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<?php




$images = glob("$email/*.*");
foreach ($images as $image) {
    
    ?>
    <div class="container">
        <div class="masonry">
            <div class="w3-animate-opacity" id="votingpoll">
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