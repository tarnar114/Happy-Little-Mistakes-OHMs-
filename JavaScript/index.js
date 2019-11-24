function on() {

    document.getElementById("overlay").style.display = "block";
}


function off() {
    document.getElementById("overlay").style.display = "none";
}

function DescriptionAlert() {
    alert("Welcome to the Editor's Choice section! Here at Only Happy Mistakes, we choose our favourite art each week, and set a voting poll for you to pick a winner! If you are featured, everyone who visits our Home Page can see your work!")
}




// init Masonry
// var $grid = $('.grid').masonry({
//     itemSelector: '.grid-item',
//     percentPosition: true,
//     columnWidth: '.grid-sizer'
// });

// // layout Masonry after each image loads
// $grid.imagesLoaded().progress(function() {
//     $grid.masonry();
// });