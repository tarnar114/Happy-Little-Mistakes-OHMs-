<?php include '../HTML/nav.html'; ?>
<?php
 
if (!empty($_GET)) {

    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "OHMs";
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // $sql=;

    if (isset($_GET['searchSubmit'])) {
        $searchFor = $_GET['searchSubmit'];
    }

    //  
    #endregionsearchQry
    $sql = "SELECT * FROM uploadtable WHERE FirstName LIKE '%$searchFor%' OR LastName LIKE '%$searchFor%' OR Username LIKE '%$searchFor%' OR EmailAddress LIKE '%$searchFor%'";
    $result = mysqli_query($connection,$sql);

    if (mysqli_num_rows($result) > 0) {
       
      while ($row = mysqli_fetch_assoc($result)) {
          
            $fname = $row['FirstName'];
            $lname = $row['LastName'];
            $id = $row["Id"];

            // $result = '<div>' . $fname . '  ' . $lname . '</div>';
            echo " -Name: " . $row["FirstName"] . " Email: " . $row["EmailAddress"] . "<br>";
        }
    }
     else {
        // $result = "There was no search result";
     echo "No search results";  
    }
    mysqli_close($connection);
    // $row=;
    // $searchFor=$_GET['username'];
    // $searchFor=preg_replace("#[^0-9a-z]#","",$searchFor);
    // $searchFor='%' . $_GET['searchSubmit']. '%';

}


    // print ("$result");
    // $password=$_GET['password'];


// $searchFor='%' . $_GET['searchSubmit']. '%';

// $stmt->bind_param('s',$username);

// $stmt->execute();
// $val =  $stmt->get_result();
// $row_count= $val->num_rows;

// if($row_count>0)
// {
// $result =$val->fetch_assoc();

// print_r($result);
// }
// else
// {

// echo "identification_number not Match";
// }



// $stmt->close();
//  $conn->close();
// $statement= $pdo->prepare($sql);
// $statement->bindValue(1,$searchFor);
// $statement->execute();



?>
<?php include_once '../HTML/foot.html'; ?>