function on() {

    document.getElementById("overlay").style.display = "block";
}


function off() {
    document.getElementById("overlay").style.display = "none";
}

function onUpload() {

    document.getElementById("upload").style.display = "block";
}


function offUpload() {
    document.getElementById("upload").style.display = "none";
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