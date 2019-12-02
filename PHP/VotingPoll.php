<!DOCTYPE html>
<html lang="en">

<?php
$vote = $_REQUEST['vote'];
$nameoffile = "voting.txt";
$content = file($nameoffile);
$array = explode("||", $content[0]);
$photo1 = $array[0];
$photo2 = $array[1];
$photo3 = $array[2];
$photo4 = $array[3];
$photo5 = $array[4];
$photo6 = $array[5];
$photo7 = $array[6];
$photo8 = $array[7];

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

$updatevote = $photo1 . "||" . $photo2 . "||" . $photo3 . "||" . $photo4 . "||" . $photo5 . "||" . $photo6 . "||" . $photo7 . "||" . $photo8;
$finalize = fopen($nameoffile, "w");
fputs($finalize, $updatevote);
fclose($finalize);
?>

<body>

  <style>
    /* Including the style provided by the css masonry.css */
    <?php include '../CSS/masonry.css'; ?>
  </style>

  <div class="container">
    <div class="container">
      <div class="item">
        <?php echo "<p>Votes: " . (100 * round($photo1 / ($photo1 + $photo2 + $photo3 + $photo4 + $photo5 + $photo6 + $photo7 + $photo8), 2)) . "%</p>"; ?>
        <a href='../PHP/Recently Uploaded/5de4a5600f3437.18553115.jpg' data-lightbox="choice1" data-alt="editorschoice1">
          <img src="../PHP/Recently Uploaded/5de4a5600f3437.18553115.jpg">
        </a>
      </div>




      <div class="item">
        <?php echo "<p>Votes: " . (100 * round($photo2 / ($photo1 + $photo2 + $photo3 + $photo4 + $photo5 + $photo6 + $photo7 + $photo8), 2)) . "%</p>"; ?>
        <a href='../PHP\Recently Uploaded\simon stalenhag landscape1.jpg' data-lightbox="choice2" data-alt="editorschoice2">
          <img src='../PHP\Recently Uploaded\simon stalenhag landscape1.jpg'>
        </a>
      </div>

      <div class="item">
        <?php echo "<p>Votes: " . (100 * round($photo3 / ($photo1 + $photo2 + $photo3 + $photo4 + $photo5 + $photo6 + $photo7 + $photo8), 2)) . "%</p>"; ?>
        <a href='../PHP\Recently Uploaded\stunning-portrait-48.jpg' data-lightbox="choice3" data-alt="editorschoice3">
          <img src='../PHP\Recently Uploaded\stunning-portrait-48.jpg'>
        </a>
      </div>

      <div class="item">
        <?php echo "<p>Votes: " . (100 * round($photo4 / ($photo1 + $photo2 + $photo3 + $photo4 + $photo5 + $photo6 + $photo7 + $photo8), 2)) . "%</p>"; ?>
        <a href='../PHP\Recently Uploaded\(Finished) Modern House Fliped-Podium edit 2016-12-06 15045500000 edit (1.2).jpg' data-lightbox="choice4" data-alt="editorschoice4">
          <img src="../PHP\Recently Uploaded\(Finished) Modern House Fliped-Podium edit 2016-12-06 15045500000 edit (1.2).jpg">
        </a>
      </div>

      <div class="item">
        <?php echo "<p>Votes: " . (100 * round($photo5 / ($photo1 + $photo2 + $photo3 + $photo4 + $photo5 + $photo6 + $photo7 + $photo8), 2)) . "%</p>"; ?>
        <a href='../PHP\Recently Uploaded\(Finished and cleaned) Modern House Fliped-0-0 2016-12-04 21535200000.jpg' data-lightbox="choice5" data-alt="editorschoice5">
          <img src="../PHP\Recently Uploaded\(Finished and cleaned) Modern House Fliped-0-0 2016-12-04 21535200000.jpg">
        </a>
      </div>

      <div class="item">
        <?php echo "<p>Votes: " . (100 * round($photo6 / ($photo1 + $photo2 + $photo3 + $photo4 + $photo5 + $photo6 + $photo7 + $photo8), 2)) . "%</p>"; ?>
        <a href='../PHP\Recently Uploaded\im1503415478.png' data-lightbox="choice6" data-alt="editorschoice6">
          <img src="../PHP\Recently Uploaded\im1503415478.png">
        </a>
      </div>

      <div class="item">
        <?php echo "<p>Votes: " . (100 * round($photo7 / ($photo1 + $photo2 + $photo3 + $photo4 + $photo5 + $photo6 + $photo7 + $photo8), 2)) . "%</p>"; ?>
        <a href='../PHP\Recently Uploaded\Top-10-photographers-for-travel-portraits14__700.jpg' data-lightbox="choice7" data-alt="editorschoice7">
          <img src="../PHP\Recently Uploaded\Top-10-photographers-for-travel-portraits14__700.jpg">
        </a>
      </div>

      <div class="item">
        <?php echo "<p>Votes: " . (100 * round($photo8 / ($photo1 + $photo2 + $photo3 + $photo4 + $photo5 + $photo6 + $photo7 + $photo8), 2)) . "%</p>"; ?>
        <a href='../Images/PHP\Recently Uploaded\Great-Depression-Portraits-by-Dorothea-Lange.jpg' data-lightbox="choice8" data-alt="editorschoice8">
          <img src="../PHP\Recently Uploaded\Great-Depression-Portraits-by-Dorothea-Lange.jpg">
        </a>
      </div>

    </div>
  </div>

</body>

</html>