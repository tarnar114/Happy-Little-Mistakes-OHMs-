<!-- 
    Objectives:
               Create a homepage for the website. This page will include a navigation bar, allowing the user to direct the website at ease.
               Create a voting poll, where the user can vote on their favorite image from a select amount of images.
               Create a welcoming jumbotron for the website.
 -->
<!DOCTYPE html>
<html lang="en">

<!-- Including the navagation bar at the top of the homepage -->
<?php include_once '../HTML/nav.php'; ?>

<style>
/* Including the style provided by the css masonry.css */
<?php include '../CSS/masonry.css'; ?>
</style>

<body>

  <div class="container">
    <div class="notice">
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Want to interact with content and art work?</strong> Signup <a href="../PHP/sign_up.php">here</a> now!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="jumbotron w3-animate-opacity">
      <div class="container share">
        <h1 class="display-4 text-right">Hello, world!</h1>

        <blockquote class="blockquote text-right">
          <h2 class="display-10 mb-0">"We don't make mistakes, just happy little accidents.”</h2>
          <footer class="blockquote-footer">Bob Ross</footer>
        </blockquote>

        <hr class=" ">
        <p class="text-right">"Talent is a pursued interest. Anything that you're willing to practice, you can do.”</p>
        <a class="btn btn-primary btn-xlg" href="#trending" role="button">Editors Choices</a>
      </div>
      <img src="../Images/bobross.png" alt="bobross" style="width:90%;height=90%;">
    </div>

  </div>

<!-- Heading for the editors choice section -->
<h1>Editors Choices!</h1>

<!-- Creating a button below the Editor's Choice heading, called "Description". When clicked, it displays an alert, telling the user about our voting system -->
<p>
<button onclick="DescriptionAlert()" style="background-color:transparent; border-color:#85a2df; border-radius:2vw; ">Description</button>
</p>
<br>



      <!-- Creating a class referred to as "container masonry". This will alow us to create containers to dislpay the images -->
      <div class="container masonry">
        <!-- Creating a class container, with an animation and id known as votingpoll. Where the images and voting poll will take place-->
        <div class=" container w3-animate-opacity" id="votingpoll">
        <!-- Creating another class for the image, item -->
        <div class="item">
        <!-- Referring and searching for the images for the voting system -->
        <a href='$image'>
        <!-- Searching for the image selected by the editor -->
        <img src="../Images/o_A8fBmg.jpeg">
        <!-- Creating a type radio, referring to the name of vote. With the onclick of the function getVote(). This allows us to add a
        radio button for the user to select the image they like the best, then displaying an updated vote total. -->
        <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
          <!-- Ending the division for this specific image -->
          </div>

          <div class="item  ">
          <a href='$image'>
            <img src="../Images/o_A8fBmg.jpeg">   <input type="radio" name="vote" value="1" onclick="getVote(this.value)">


          </div>

          <div class="item  ">
          <a href='$image'>
            <img src="../Images/o_A8fBmg.jpeg">  <input type="radio" name="vote" value="2" onclick="getVote(this.value)">

          </div>

          <div class="item  ">
          <a href='$image'>
           <img src="../Images/o_A8fBmg.jpeg">   <input type="radio" name="vote" value="3" onclick="getVote(this.value)">

          </div>

          <div class="item  ">
          <a href='$image'>
           <img src="../Images/o_A8fBmg.jpeg">   <input type="radio" name="vote" value="4" onclick="getVote(this.value)">

          </div>

          <div class="item  ">
          <a href='$image'>
            <a href='$image'>
            <img src="../Images/o_A8fBmg.jpeg">  <input type="radio" name="vote" value="5" onclick="getVote(this.value)">

          </div>

          <div class="item  ">
          <a href='$image'>
            <img src="../Images/o_A8fBmg.jpeg">  <input type="radio" name="vote" value="6" onclick="getVote(this.value)">

          </div>

          <div class="item  ">
          <a href='$image'>
          <img src="../Images/o_A8fBmg.jpeg">    <input type="radio" name="vote" value="7" onclick="getVote(this.value)">

          </div>
          <div class="item  ">
          <a href='$image'>
          <img src="../Images/o_A8fBmg.jpeg">    <input type="radio" name="vote" value="8" onclick="getVote(this.value)">

      <!-- Ending the divisions -->

          </div>

        </div>

      </div>
    
    <!-- Creating 2 breaks in the website, providing spacing to the bottom of the page -->
    <br><br>

  </div>

 <script>
  //  Creating the function to calculate the amount of votes
      function getVote(int) {
        if (window.XMLHttpRequest) {
          // For general browsers
          xmlhttp = new XMLHttpRequest();
        } 
        else 
        { 
          // code for Internet explorer
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("votingpoll").innerHTML = this.responseText;
          }
        }
        // Opening and sending the VotingPoll.php to revieve, add and store the vote amount
        xmlhttp.open("GET", "VotingPoll.php?vote=" + int, true);
        xmlhttp.send();
      }
    </script>
</body>
<!-- Including the footnote -->
<?php include_once '../HTML/foot.html'; ?>

</html>
