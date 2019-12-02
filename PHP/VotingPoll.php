<!DOCTYPE html>
<html lang="en">
<!-- Creating a PHP voting poll with AJAX -->
<?php
// Getting content from the voting.txt file, which stores all voting variables
$vote = $_REQUEST['vote'];
$nameoffile = "voting.txt";
// Placing the content in an array within the text document
$content = file($nameoffile);
$array = explode("||", $content[0]); // Explode() allows us to break a string into an array, initially a seperator in the array
// Creating 8 variables in the array
$photo1 = $array[0];
$photo2 = $array[1];
$photo3 = $array[2];
$photo4 = $array[3];
$photo5 = $array[4];
$photo6 = $array[5];
$photo7 = $array[6];
$photo8 = $array[7];

// If statements to change the array if a certain vote is selected
if ($vote == 0) {
  $photo1 = $photo1 + 1;
}
if ($vote == 1) {
  $photo2 = $photo2 + 1;
}
if ($vote == 2) {
  $photo3 = $photo3 + 1;
}
if ($vote == 3) {
  $photo4 = $photo4 + 1;
}
if ($vote == 4) {
  $photo5 = $photo5 + 1;
}
if ($vote == 5) {
  $photo6 = $photo6 + 1;
}
if ($vote == 6) {
  $photo7 = $photo7 + 1;
}
if ($vote == 7) {
  $photo8 = $photo8 + 1;
}
// Inserting the votes into the text file
$updatevote = $photo1 . "||" . $photo2 . "||" . $photo3 . "||" . $photo4 . "||" . $photo5 . "||" . $photo6 . "||" . $photo7 . "||" . $photo8;
$finalize = fopen($nameoffile, "w"); // Opens the file
fputs($finalize, $updatevote); // An alias to fwrite(), binary safe file writing 
fclose($finalize); // Closes an open file pointer, finalizes the changes to the array in text file
?>

<body>
<!-- Outputting the final values of the voting after the user has voted -->
  <style>
    /* Including the style provided by the css masonry.css */
    <?php include '../CSS/masonry.css'; ?>
  </style>

  <div class="container">
    <div class="container">
      <div class="itemHome">
        <?php echo "<p>Votes: " . (100 * round($photo1 / ($photo1 + $photo2 + $photo3 + $photo4 + $photo5 + $photo6 + $photo7 + $photo8), 2)) . "%</p>"; ?>
        <!-- <a href='../Images/o_A8fBmg.jpeg' data-lightbox="choice1" data-alt="editorschoice1"> -->

          <img src="../Images/o_A8fBmg.jpeg">
        <!-- </a> -->
      </div>




      <div class="itemHome">
        <?php echo "<p>Votes: " . (100 * round($photo2 / ($photo1 + $photo2 + $photo3 + $photo4 + $photo5 + $photo6 + $photo7 + $photo8), 2)) . "%</p>"; ?>
        <a href='../Images/o_A8fBmg.jpeg' data-lightbox="choice2" data-alt="editorschoice2">
          <img src="../Images/o_A8fBmg.jpeg">
        </a>
      </div>

      <div class="itemHome">
        <?php echo "<p>Votes: " . (100 * round($photo3 / ($photo1 + $photo2 + $photo3 + $photo4 + $photo5 + $photo6 + $photo7 + $photo8), 2)) . "%</p>"; ?>
        <a href='../Images/o_A8fBmg.jpeg' data-lightbox="choice3" data-alt="editorschoice3">
          <img src="../Images/o_A8fBmg.jpeg">
        </a>
      </div>

      <div class="itemHome">
        <?php echo "<p>Votes: " . (100 * round($photo4 / ($photo1 + $photo2 + $photo3 + $photo4 + $photo5 + $photo6 + $photo7 + $photo8), 2)) . "%</p>"; ?>
        <a href='../Images/o_A8fBmg.jpeg' data-lightbox="choice4" data-alt="editorschoice4">
          <img src="../Images/o_A8fBmg.jpeg">
        </a>
      </div>

      <div class="itemHome">
        <?php echo "<p>Votes: " . (100 * round($photo5 / ($photo1 + $photo2 + $photo3 + $photo4 + $photo5 + $photo6 + $photo7 + $photo8), 2)) . "%</p>"; ?>
        <a href='../Images/o_A8fBmg.jpeg' data-lightbox="choice5" data-alt="editorschoice5">
          <img src="../Images/o_A8fBmg.jpeg">
        </a>
      </div>

      <div class="itemHome">
        <?php echo "<p>Votes: " . (100 * round($photo6 / ($photo1 + $photo2 + $photo3 + $photo4 + $photo5 + $photo6 + $photo7 + $photo8), 2)) . "%</p>"; ?>
        <a href='../Images/o_A8fBmg.jpeg' data-lightbox="choice6" data-alt="editorschoice6">
          <img src="../Images/o_A8fBmg.jpeg">
        </a>
      </div>

      <div class="itemHome">
        <?php echo "<p>Votes: " . (100 * round($photo7 / ($photo1 + $photo2 + $photo3 + $photo4 + $photo5 + $photo6 + $photo7 + $photo8), 2)) . "%</p>"; ?>
        <a href='../Images/o_A8fBmg.jpeg' data-lightbox="choice7" data-alt="editorschoice7">
          <img src="../Images/o_A8fBmg.jpeg">
        </a>
      </div>

      <div class="itemHome">
        <?php echo "<p>Votes: " . (100 * round($photo8 / ($photo1 + $photo2 + $photo3 + $photo4 + $photo5 + $photo6 + $photo7 + $photo8), 2)) . "%</p>"; ?>
        <a href='../Images/o_A8fBmg.jpeg' data-lightbox="choice8" data-alt="editorschoice8">
          <img src="../Images/o_A8fBmg.jpeg">
        </a>
      </div>

    </div>
  </div>

</body>

</html>