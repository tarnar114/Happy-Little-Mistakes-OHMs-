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
  <?php include '../CSS/masonry.css'; ?><style>
  /* Including the style provided by the css masonry.css */
  <?php include '../CSS/masonry.css'; ?>
</style>

<body>

  <!-- <div class="container">
    <div class="notice">
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Want to interact with content and art work?</strong> Signup <a href="../PHP/sign_up.php">here</a> now!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div> -->
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

  <div style="height:50px"></div>



  <h1></h1>
  <div style="height:50px"></div>



  <div id="trending">
    <div style="height:150px"></div>
    <div class="container ">
      <div class="row">


        <div class="col-md">
          <hr class=" ">
        </div>


        <div class="col-sm-3">
          <h1>Editors Choices!</h1>
        </div>

        <div class="col-md">
          <hr class=" ">
        </div>

      </div>
    </div>


    <!-- Creating a button below the Editor's Choice heading, called "Description". When clicked, it displays an alert, telling the user about our voting system -->
    <p><button onclick="DescriptionAlert()" style="background-color:transparent; border-color:#85a2df; border-radius:2vw; ">Description</button></p>
    <br>


    <!-- Each Image corresponds to this pattern.
          Creating a class referred to as "container masonry". This will alow us to create containers to dislpay the images 
          with an animation and id known as votingpoll Where the images and voting poll will take place,
          Creates another class for styling the image, item, 
          Searches for the image selected by the editor 
          Referring and searching for the images for the voting system, 
          Create a type radio, referring to the name of vote. With the onclick of the function getVote(). This allows us to add a
          radio button for the user to select the image they like the best, then displaying an updated vote total. 
          Ending the division for the image -->
    <div class="container masonry">

      <div class=" container w3-animate-opacity" id="votingpoll">

        <div class="itemHome">
          <a href='../Images/o_A8fBmg.jpeg' data-lightbox="choice1" data-alt="editorschoice1">
            <img src="../Images/o_A8fBmg.jpeg">
            </a><input type="radio" name="vote" value="0" onclick="getVote(this.value)"> 
        </div>

        <div class="itemHome">
       <input type="radio" name="vote" value="1" onclick="getVote(this.value)">   <a href='../Images/o_A8fBmg.jpeg' data-lightbox="choice2" data-alt="editorschoice2">
            <img src="../Images/o_A8fBmg.jpeg">
          </a>
        </div>

        <div class="itemHome">
        <input type="radio" name="vote" value="2" onclick="getVote(this.value)">  <a href='../Images/o_A8fBmg.jpeg' data-lightbox="choice3" data-alt="editorschoice3">
            <img src="../Images/o_A8fBmg.jpeg">
          </a>
        </div>

        <div class="itemHome">
         <input type="radio" name="vote" value="3" onclick="getVote(this.value)"> <a href='../Images/o_A8fBmg.jpeg' data-lightbox="choice4" data-alt="editorschoice4">
            <img src="../Images/o_A8fBmg.jpeg">
          </a>
        </div>

        <div class="itemHome">
         <input type="radio" name="vote" value="4" onclick="getVote(this.value)">  <a href='../Images/o_A8fBmg.jpeg' data-lightbox="choice5" data-alt="editorschoice5">
            <img src="../Images/o_A8fBmg.jpeg">
          </a>
        </div>

        <div class="itemHome">
        <input type="radio" name="vote" value="5" onclick="getVote(this.value)">  <a href='../Images/o_A8fBmg.jpeg' data-lightbox="choice6" data-alt="editorschoice6">
            <img src="../Images/o_A8fBmg.jpeg">
          </a>
        </div>

        <div class="itemHome">
        <input type="radio" name="vote" value="6" onclick="getVote(this.value)">  <a href='../Images/o_A8fBmg.jpeg' data-lightbox="choice7" data-alt="editorschoice7">
            <img src="../Images/o_A8fBmg.jpeg">
          </a>
        </div>

        <div class="itemHome">
        <input type="radio" name="vote" value="7" onclick="getVote(this.value)"><a href='../Images/o_A8fBmg.jpeg' data-lightbox="choice8" data-alt="editorschoice8">
            <img src="../Images/o_A8fBmg.jpeg">
          </a>
        </div>

        <div class="itemHome">
          <input type="radio" name="vote" value="8" onclick="getVote(this.value)"><a href='../Images/o_A8fBmg.jpeg' data-lightbox="choice9" data-alt="editorschoice9">
            <img src="../Images/o_A8fBmg.jpeg">
          </a>
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
      } else {
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