<?php include '../HTML/nav.html'; ?>
<?php

if (!empty($_GET)) {

    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "OHMs";
    $dbname2 = "category";
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $connection2 = mysqli_connect($servername, $username, $password, $dbname2);
    // Check connection
    if (!$connection && !$connection2) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // $sql=;

    if (isset($_GET['searchSubmit'])) {
        $searchFor = $_GET['searchSubmit'];
    }

    //  
    #endregionsearchQry
    // $sql = "SELECT * FROM users WHERE FirstName LIKE '%$searchFor%' OR LastName LIKE '%$searchFor%' OR Username LIKE '%$searchFor%' OR EmailAddress LIKE '%$searchFor%'";
    $sql = "SELECT * FROM uploadtable WHERE FirstName LIKE '%$searchFor%' OR LastName LIKE '%$searchFor%' OR Username LIKE '%$searchFor%' OR EmailAddress LIKE '%$searchFor%'";
    $sql2 = "SELECT * FROM categories WHERE category LIKE '%$searchFor%'";
    $result = mysqli_query($connection, $sql);
    $result2 = mysqli_query($connection2, $sql2);

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $fname = $row['FirstName'];
            $lname = $row['LastName'];
            $uname = $row['Username'];
            $email = $row['EmailAddress'];
            $id = $row["Id"];
            // $categories = $row['category'];


            // if ($row == $email) {
            echo "'<h1> Name: " . $fname . " " . $lname . '<br>' . " Username: " . $uname . "<br>" . " Email: " . $email . "</h1>'";
            // // }
            // // else{
            //     // if($row==$fname||$row==$lname||$row==$uname){
            //          echo '<h1 class=" w3-animate-opacity" >';
            // echo '<ul type="none" style="align-items: center">';
            // echo '<li>';
            // echo '<a href="userProfile.php?category=' . $id . '" style="border-radius: 0.5vw;background-color:#85a2df;">';
            // echo $categories;
            // echo '</a>';
            // echo '</li>';
            // echo '</ul>';
            // echo '</h1>';


        }
    }
    // else {

    //     echo "No search results";
    // }


    // Search to display list of categories from categories.php
    if (mysqli_num_rows($result2) > 0) {

        while ($row2 = mysqli_fetch_assoc($result2)) {


            $categories = $row2['category'];
            // $homePage = $row2['Home Page'];
            // $interiorDesign = $row2['Interior Design'];
            // $landscape = $row2['Landscape'];
            // $portrait = $row2['Portrait'];
            // $recentlyUploaded = $row2['Recently Updated'];


           
            $Id = $row2["Id"];
            echo '<h1 class=" w3-animate-opacity" >';
            // echo '<ul type="none" style="align-items: center">';
            // echo '<li>';
            
            echo '<a href="homePage.php?category=' . $Id . '" style="border-radius: 0.5vw;background-color:#85a2df;>';
            // echo $homePage;
            echo '</a>';
            echo '<a href="interiordesign.php?category=' . $Id . '" style="border-radius: 0.5vw;background-color:#85a2df;">';
            // echo $interiorDesign;
            echo '</a>';
            echo '<a href="landscape.php?Landscape=' . $Id . '" style="border-radius: 0.5vw;background-color:#85a2df;">';
            // echo $landscape;
            echo '</a>';
            echo '<a href="portrait.php?category=' . $Id . '" style="border-radius: 0.5vw;background-color:#85a2df;">';
            // echo $portrait;
            echo '</a>';
            echo '<a href="recentlyuploaded.php?category=' . $Id . '" style="border-radius: 0.5vw;background-color:#85a2df;">';
            // echo $recentlyUploaded;
            echo '</a>';
            echo '<a href="categories.php?category=' . $Id . '" style="border-radius: 0.5vw;background-color:#85a2df;">';
            // echo '</a>';
            echo $categories;
            echo '</a>';
            // echo '</li>';
            // echo '</ul>';
            echo '</h1>';
        }
    } else {
        // (mysqli_num_rows($result2) < 0) {

        echo "No search results";
    }
    mysqli_close($connection);
}



?>
<?php include_once '../HTML/foot.html'; ?>