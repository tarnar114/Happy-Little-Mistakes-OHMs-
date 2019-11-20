function on() {

    document.getElementById("overlay").style.display = "block";

    // document.getElementById("overlay").
}


function off() {
    document.getElementById("overlay").style.display = "none";
}
// init Masonry
var $grid = $('.grid').masonry({
    itemSelector: '.grid-item',
    percentPosition: true,
    columnWidth: '.grid-sizer'
});

// layout Masonry after each image loads
$grid.imagesLoaded().progress(function() {
    $grid.masonry();
});