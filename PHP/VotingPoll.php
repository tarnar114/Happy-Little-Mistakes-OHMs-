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

$updatevote = $photo1."||".$photo2."||".$photo3."||".$photo4."||".$photo5."||".$photo6."||".$photo7."||".$photo8;
$finalize = fopen($nameoffile,"w");
fputs($finalize,$updatevote);
fclose($finalize);
?>

<body>
  <div class="container masonry">
    <div class="item">
      <p>Votes: <?php echo(100*round($photo1/($photo1+$photo2+$photo3+$photo4+$photo5+$photo6+$photo7+$photo8),2)); ?>%</p>
      <img src="../Images/o_A8fBmg.jpeg">
    </div>

    <div class="item">
      <p>Votes: <?php echo(100*round($photo2/($photo1+$photo2+$photo3+$photo4+$photo5+$photo6+$photo7+$photo8),2)); ?>%</p>
      <img src="../Images/o_A8fBmg.jpeg">
    </div>

    <div class="item">
      <p>Votes: <?php echo(100*round($photo3/($photo1+$photo2+$photo3+$photo4+$photo5+$photo6+$photo7+$photo8),2)); ?>%</p>
      <img src="../Images/o_A8fBmg.jpeg">
    </div>

    <div class="item">
      <p>Votes: <?php echo(100*round($photo4/($photo1+$photo2+$photo3+$photo4+$photo5+$photo6+$photo7+$photo8),2)); ?>%</p>
      <img src="../Images/o_A8fBmg.jpeg">
    </div>

    <div class="item">
      <p>Votes: <?php echo(100*round($photo5/($photo1+$photo2+$photo3+$photo4+$photo5+$photo6+$photo7+$photo8),2)); ?>%</p>
      <img src="../Images/o_A8fBmg.jpeg">
    </div>

    <div class="item">
      <p>Votes: <?php echo(100*round($photo6/($photo1+$photo2+$photo3+$photo4+$photo5+$photo6+$photo7+$photo8),2)); ?>%</p>
      <img src="../Images/o_A8fBmg.jpeg">
    </div>

    <div class="item">
      <p>Votes: <?php echo(100*round($photo7/($photo1+$photo2+$photo3+$photo4+$photo5+$photo6+$photo7+$photo8),2)); ?>%</p>
      <img src="../Images/o_A8fBmg.jpeg">
    </div>

    <div class="item">
      <p>Votes: <?php echo(100*round($photo8/($photo1+$photo2+$photo3+$photo4+$photo5+$photo6+$photo7+$photo8),2)); ?>%</p>
      <img src="../Images/o_A8fBmg.jpeg">
    </div>

  </div>
</body>
</html>