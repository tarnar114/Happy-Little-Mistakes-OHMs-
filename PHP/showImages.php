<?php



echo "<div class='container' style='display:grid'> ";
$images = glob("$email/*.*");
for ($i = 0; $i < count($images); $i++) {
    $image = $images[$i];
    // echo basename($image) . "<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
    echo "<img src=' $images[$i]' style='width:100px;height:100px;'><br>";

}
echo "</div>";

?>
