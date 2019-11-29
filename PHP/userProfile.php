
<?php include '../HTML/nav.html'; ?>
<?php
// session_start();
// $idValue=$_GET['Id'];
// // if(!empty($_GET)){

// $servername = "localhost";
// $dbuser = "root";
// $password = "admin";
// $dbname = "assignment3";
// $connection = mysqli_connect($servername, $dbuser, $password, $dbname);
// // Check connection
// if (!$connection) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// if(isset($_GET[$idValue])){
//     $username=$_GET[$idValue];
//     // $password=$_POST['password'];
// }
// // $searchFor='%' . $_GET['searchSubmit']. '%';

// // WHERE username '".$username."'LIMIT 1";
// $sql = "SELECT * FROM users WHERE Id=$idValue";

// $result = mysqli_query($connection, $sql);
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
        echo "'<h1> Name: " . $fname . " " . $lname . '<br>' . " Username: " . $uname . "<br>" . " Email: " . $email . "</h1>'";

    }
}

mysqli_close($connection);
// $statement= $pdo->prepare($sql);
// $statement->bindValue(1,$searchFor);
// $statement->execute();



// }
