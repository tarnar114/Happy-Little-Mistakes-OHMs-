<?php
function showImages()
{
    $servername = "localhost";
    $dbuser = "root";
    $password = "admin";
    $dbname = "OHMs";

    $con = mysqli_connect($servername, $dbuser, $password, $dbname);
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM uploadtable";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        // echo $file;
     }
     mysqli_close($con);
}
?>
