// These functions determine weather the overlay is on or not. If on change the display style to block, and off to change it to none
function on() {

    document.getElementById("overlay").style.display = "block";
}


function off() {
    document.getElementById("overlay").style.display = "none";
}


// If button is clicked alert is displayed on screen
function DescriptionAlert() {
    alert("Welcome to the Editor's Choice section! Here at Only Happy Mistakes, we choose our favourite art each week, and set a voting poll for you to pick a winner! If you are featured, everyone who visits our Home Page can see your work!")
}