
<?php include '../HTML/nav.php'; ?>
<?php
$servername = "localhost";
$dbuser = "root";
$password = "admin";
$dbname = "OHMs";
$connection = mysqli_connect($servername, $dbuser, $password, $dbname);
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM uploadtable WHERE active='yes'";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $fname = $row['FirstName'];
        $lname = $row['LastName'];
        $uname = $row['Username'];
        $email = $row['EmailAddress'];
        // $id = $idValue;

        echo "'<h1> Name: " . $fname . " " . $lname . '<br>' . " Username: " . $uname . "<br>" . " Email: " . $email . "</h1>";
        echo "<div class='container'>";
        echo "<div class='container masonry w3-animate-opacity'>"; 
        include "../PHP/showImages.php";
        echo "</div>";
        echo "</div>";
    }
}

mysqli_close($connection);
