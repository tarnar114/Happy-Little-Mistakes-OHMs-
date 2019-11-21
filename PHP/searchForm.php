<?php 

// if(!empty($_GET)){

    $servername="localhost";
    $username="root";
    $password="pass";
    $dbname="assignment3";
    $connection=mysqli_connect ($servername,$username, $password,$dbname);
    // Check connection
    if (!$connection){
        die ("Connection failed: " . mysqli_connect_error());
        
    }
    if(isset($_GET['username'])){
        $username=$_GET['username'];
        $password=$_POST['password'];
    }
// $searchFor='%' . $_GET['searchSubmit']. '%';
$sql="SELECT * FROM users WHERE username '".$username."'LIMIT 1";
$stmt->bind_param('s',$username);

$stmt->execute();
$val =  $stmt->get_result();
$row_count= $val->num_rows;

if($row_count>0)
{
$result =$val->fetch_assoc();

print_r($result);
}
else
{

echo "identification_number not Match";
}



$stmt->close();
 $conn->close();
// $statement= $pdo->prepare($sql);
// $statement->bindValue(1,$searchFor);
// $statement->execute();



// }
