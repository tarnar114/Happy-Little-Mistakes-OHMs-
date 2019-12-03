<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- W3 School CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="../CSS/lightbox.css">
    <!-- Lightbox Javascript -->
    <script src="../JavaScript/lightbox-plus-jquery.min.js"></script>

    <!-- Our Javascript and CSS -->
    <!-- Navbar CSS -->
    <link rel="stylesheet" href="../CSS/nav.css">
    <!-- Footer CSS -->
    <link rel="stylesheet" href="../CSS/foot.css">

    <!-- Index Javascript -->
    <script src="../JavaScript/index.js"></script>



    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100|Pacifico|Permanent+Marker|Roboto:100,400|Satisfy|Shadows+Into+Light&display=swap&subset=latin-ext" rel="stylesheet">


    <!-- Material Icons -->
    <!-- can be used with a span, i, img, or svg element. -->


    <!-- <<<<<<< HEAD  -->
</head>
<!-- ======= >>>>>>> 3f010a13c91cd935fa69dec9c67e4afee892f68c -->

<header class="sticky-top">
    <div class="container w3-animate-opacity">

        <nav class="navbar navbar-light">

            <a class="navbar-brand" href="../PHP/homePage.php">
                <!-- <div class="fas fa-palette"> -->
                <!-- <a ></a> -->
                <img src="../Images/twotone_palette_black_18dp.png" alt="pallete">
                <!-- </div> -->
                Only Happy Mistakes
            </a>

            <a class="brand" href="../PHP/homePage.php">
                <img src="../Images/twotone_palette_black_18dp.png" alt="pallete">
            </a>
            <nav class="dropbtn">
                <!-- <div class="dropdown"> -->
                <div class="collapse" id="navitems">
                    <ul class="nav nav-pills">

                        <!-- Categories -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <!-- RECENTLY UPLOADED PAGE NAV-LINK -->
                                <a class="dropdown-item" href="recentlyuploaded.php">
                                    RECENTLY UPLOADED
                                </a>
                                <div class="dropdown-divider"></div>
                                <!-- INTERIOR DESIGN PAGE NAV-LINK -->
                                <a class="dropdown-item" href="interiordesign.php">
                                    INTERIOR DESIGN
                                </a>
                                <div class="dropdown-divider"></div>
                                <!-- LANDSCAPE PAGE NAV-LINK -->
                                <a class="dropdown-item" href="landscape.php">
                                    LANDSCAPE
                                </a>
                                <div class="dropdown-divider"></div>
                                <!-- PORTRAIT PAGE NAV-LINK -->
                                <a class="dropdown-item" href="portrait.php">
                                    PORTRAIT
                                </a>
                                <div class="dropdown-divider"></div>

                            </div>
                        </li>


                        <!-- Sign Up/Login -->
                        <?php include_once '../PHP/CheckLogin.php'; ?>

                    </ul>
                </div>

                <!-- Menu Button -->
                <button class="navbutton" type="menu" data-toggle="collapse" data-target="#navitems"><span class="navbar-toggler-icon"></span>
                </button>

                <!-- Search Button -->
                <button class="searchbtn" id="searchIcon" type="button" data-toggle="collapse justify-content-end" data-target="#overlay" onclick="on()">
                    <img src="../Images/search.png" alt="search">
                </button>
            </nav>


        </nav>

        <!-- A search overlay form is generated when the search btn is clicked. Double click to turnoff. Uses Javascript to turnoff -->
        <div id="overlay" ondblclick="off()">

            <h2 class="container mb-4 alert alert-primary" role="alert" style="text-align: center;padding-top:5px;">
                Double click to Exit!
            </h2>
            <form class="container py-4" action="../PHP/processSearch.php" method="GET" id="searchForm" onclick="on()">
                <input type="search" name="searchSubmit" placeholder="Search">
            </form>

        </div>
    </div>

    <!-- Floarting upload button @ bottom corner of page -->
    <a class="uploadbtn w3-round-xxlarge" type="button" href="../PHP/uploadPage.php">
        <img src="../Images/round_post_add_black_18dp.png" alt="Upload">
    </a>
    <!-- Floarting user pprofile button @ bottom corner of page -->
    <a class="profilebtn w3-round-xxlarge" type="button" href="../PHP/userProfile.php">
        <img src="https://icon.now.sh/face" alt="Profile" style="height: 40px; width: 40px">
    </a>



    <!-- Optional JavaScript -->
    <!--Bootstrap jQuery, Popper, then Bootstrap.JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<!-- Lightbox resize duration -->
    <script>
        lightbox.option({
            'resizeDuration': 300,
            'wrapAround': true
        })
    </script>


</header>

</html>