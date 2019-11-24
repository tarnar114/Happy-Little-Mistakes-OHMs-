
<?php include '../HTML/nav.html'; ?>
<?php
// session_start();
$idValue=$_SESSION['ID'];
// if(!empty($_GET)){

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "assignment3";
$connection = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
// if(isset($_GET['username'])){
//     $username=$_GET['username'];
//     $password=$_POST['password'];
// }
// $searchFor='%' . $_GET['searchSubmit']. '%';

// WHERE username '".$username."'LIMIT 1";
$sql = "SELECT * FROM users WHERE Id=$idValue";

$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $fname = $row['FirstName'];
        $lname = $row['LastName'];
        $uname = $row['Username'];
        $email = $row['EmailAddress'];
        $id = $row["Id"];
        echo "'<h1> Name: " . $fname . " " . $lname . '<br>' . " Username: " . $uname . "<br>" . " Email: " . $email . "</h1>'";
    }
}

mysqli_close($connection);
// $statement= $pdo->prepare($sql);
// $statement->bindValue(1,$searchFor);
// $statement->execute();



// }
