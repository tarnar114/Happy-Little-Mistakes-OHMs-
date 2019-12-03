<?php include '../HTML/nav.php'; ?>

<style>
    <?php include '../CSS/masonry.css'; ?>
</style>
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
 
// Gets the search query and sets as a local variable
    if (isset($_GET['searchSubmit'])) {
        $searchFor = $_GET['searchSubmit'];
    }

    // Checks the database for a match within the fields for the users info and categories.
    // If a match is found it will be displayed alon with its corresponding contents
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
        //   Displays the user idenity and images
            echo "<h1>  Name: " . $fname . ' ' . $lname . '<br>' . ' Username: ' . $uname . " </h1>";
          
            echo "<div class='container masonry w3-animate-opacity'>";
            echo include 'showImages.php';
            echo "</div>";
            


        }
    }
   
    // Search to display list of categories from categories.php
    else if (mysqli_num_rows($result2) > 0) {

        while ($row2 = mysqli_fetch_assoc($result2)) {


            $categories = $row2['category'];
          
// Displays a list of the categories
            $Id = $row2["Id"];
            echo '<h1 class=" w3-animate-opacity" >';
           
            echo '<a href="homePage.php?category=' . $Id . '" style="border-radius: 0.5vw;background-color:#85a2df;>';
            
            echo '</a>';
            echo '<a href="interiordesign.php?category=' . $Id . '" style="border-radius: 0.5vw;background-color:#85a2df;">';
            
            echo '</a>';
            echo '<a href="landscape.php?Landscape=' . $Id . '" style="border-radius: 0.5vw;background-color:#85a2df;">';
            
            echo '</a>';
            echo '<a href="portrait.php?category=' . $Id . '" style="border-radius: 0.5vw;background-color:#85a2df;">';
            
            echo '</a>';
            echo '<a href="recentlyuploaded.php?category=' . $Id . '" style="border-radius: 0.5vw;background-color:#85a2df;">';
            
            echo '</a>';
            echo '<a href="categories.php?category=' . $Id . '" style="border-radius: 0.5vw;background-color:#85a2df;">';
            
            echo $categories;
            echo '</a>';
           
            echo '</h1>';
        }
    } else {
        
// Else the search query didn't find any results
        echo "<h1>No search results</h1>";
    }
    mysqli_close($connection);
}



?>
<?php

function displayImages()
{

    ?>

    <?php

        $images = glob("Interior Design/*.*");
        foreach ($images as $image) {
            ?>


        <?php
                echo "<div class='item'>";
                echo "<a href='$image'>";
                echo "<img src='$image'>";
                echo "</div>"
                ?>



    <?php } ?>
<?php
}

?>