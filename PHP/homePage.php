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

<!-- Jumbotron image and quote from bob ross to greet the user as well as a button to direct the user to the editors Choices-->
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
  
  <div style="height:150px"></div>



  <div id="trending">
    <div style="height:100px"></div>
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

        <div class="item">
          <a href='../PHP/Recently Uploaded/5de4a5600f3437.18553115.jpg' data-lightbox="choice1" data-alt="editorschoice1">
            <img src="../PHP/Recently Uploaded/5de4a5600f3437.18553115.jpg">
          </a><input type="radio" name="vote" value="0" onclick="getVote(this.value)">
        </div>

        <div class="item">
          <a href='../PHP\Recently Uploaded\simon stalenhag landscape1.jpg' data-lightbox="choice2" data-alt="editorschoice2">
            <img src="../PHP\Recently Uploaded\simon stalenhag landscape1.jpg">
          </a><input type="radio" name="vote" value="1" onclick="getVote(this.value)">
        </div>

        <div class="item">
          <a href='../PHP\Recently Uploaded\stunning-portrait-48.jpg' data-lightbox="choice3" data-alt="editorschoice3">
            <img src="../PHP\Recently Uploaded\stunning-portrait-48.jpg">
          </a><input type="radio" name="vote" value="2" onclick="getVote(this.value)">
        </div>

        <div class="item">
          <a href='../PHP\Recently Uploaded\(Finished) Modern House Fliped-Podium edit 2016-12-06 15045500000 edit (1.2).jpg' data-lightbox="choice4" data-alt="editorschoice4">
            <img src="../PHP\Recently Uploaded\(Finished) Modern House Fliped-Podium edit 2016-12-06 15045500000 edit (1.2).jpg">
          </a> <input type="radio" name="vote" value="3" onclick="getVote(this.value)">
        </div>

        <div class="item">
          <a href='../PHP\Recently Uploaded\(Finished and cleaned) Modern House Fliped-0-0 2016-12-04 21535200000.jpg' data-lightbox="choice5" data-alt="editorschoice5">
            <img src="../PHP\Recently Uploaded\(Finished and cleaned) Modern House Fliped-0-0 2016-12-04 21535200000.jpg">
          </a><input type="radio" name="vote" value="4" onclick="getVote(this.value)">
        </div>

        <div class="item">
          <a href='../PHP\Recently Uploaded\im1503415478.png' data-lightbox="choice6" data-alt="editorschoice6">
            <img src="../PHP\Recently Uploaded\im1503415478.png">
          </a> <input type="radio" name="vote" value="5" onclick="getVote(this.value)">
        </div>

        <div class="item">
          <a href='../PHP\Recently Uploaded\Top-10-photographers-for-travel-portraits14__700.jpg' data-lightbox="choice7" data-alt="editorschoice7">
            <img src="../PHP\Recently Uploaded\Top-10-photographers-for-travel-portraits14__700.jpg">
          </a><input type="radio" name="vote" value="6" onclick="getVote(this.value)">
        </div>

        <div class="item">
          <a href='../Images/PHP\Recently Uploaded\Great-Depression-Portraits-by-Dorothea-Lange.jpg' data-lightbox="choice8" data-alt="editorschoice8">
            <img src="../PHP\Recently Uploaded\Great-Depression-Portraits-by-Dorothea-Lange.jpg">
          </a> <input type="radio" name="vote" value="7" onclick="getVote(this.value)">
        </div>

        <!-- <div class="item">
          <a href='../Images/o_A8fBmg.jpeg' data-lightbox="choice9" data-alt="editorschoice9">
            <img src="../Images/o_A8fBmg.jpeg">
          </a><input type="radio" name="vote" value="8" onclick="getVote(this.value)">
        </div> -->

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