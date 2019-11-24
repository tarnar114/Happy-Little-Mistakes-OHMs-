<!DOCTYPE html>
<html lang="en">

<?php include_once '../HTML/nav.html'; ?>
 <style>
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
        <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> -->
        <hr class="my-4">
        <p class="text-right">"Talent is a pursued interest. Anything that you're willing to practice, you can do.”</p>
        <a class="btn btn-primary btn-xlg" href="#trending" role="button">Trending</a>
      </div>
      <img src="../Images/bobross.png" alt="bobross" style="width:90%;height=90%;">
    </div>

  </div>


 
  

  <!-- <br><br><br> -->

 
  <div style="height:50px"></div>



  <h1></h1>
  <div style="height:50px"></div>



  <div id="trending">
    <div style="height:150px"></div>
    <div class="container ">
      <div class="row">


        <div class="col-md">
          <hr class="my-4">
        </div>


        <div class="col-sm-3">
          <h1>Editors Choices!</h1>
        </div>

        <div class="col-md">
          <hr class="my-4">
        </div>

      </div>
    </div>



    <p ><button onclick="DescriptionAlert()" style="background-color:transparent; border-color:#85a2df; border-radius:2vw; ">Description</button></p>
    <br>

   

    <!-- <form> -->
      <div class="container">
        <div class=" masonry w3-animate-opacity" id="votingpoll">
          <div class="item">
            <!-- <p> -->
            <img src="../Images/o_A8fBmg.jpeg">
              <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
            <!-- </p> -->
            
          </div>

          <div class="item">
            <!-- <p> -->
            <img src="../Images/o_A8fBmg.jpeg">   <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
            <!-- </p> -->
            
           
          </div>

          <div class="item">
            <!-- <p> -->
            <img src="../Images/o_A8fBmg.jpeg">  <input type="radio" name="vote" value="2" onclick="getVote(this.value)">
            <!-- </p> -->
            
          </div>

          <div class="item">
            <!-- <p> -->
           <img src="../Images/o_A8fBmg.jpeg">   <input type="radio" name="vote" value="3" onclick="getVote(this.value)">
            <!-- </p> -->
            
          </div>

          <div class="item">
            <!-- <p> -->
           <img src="../Images/o_A8fBmg.jpeg">   <input type="radio" name="vote" value="4" onclick="getVote(this.value)">
            <!-- </p> -->
            
          </div>

          <div class="item">
            <!-- <p> -->
            <img src="../Images/o_A8fBmg.jpeg">  <input type="radio" name="vote" value="5" onclick="getVote(this.value)">
            <!-- </p> -->
            
          </div>

          <div class="item">
            <!-- <p> -->
            <img src="../Images/o_A8fBmg.jpeg">  <input type="radio" name="vote" value="6" onclick="getVote(this.value)">
            <!-- </p> -->
            
          </div>

          <div class="item">
            <!-- <p> -->
          <img src="../Images/o_A8fBmg.jpeg">    <input type="radio" name="vote" value="7" onclick="getVote(this.value)">
            <!-- </p> -->
            
          </div>
          <div class="item">
            <!-- <p> -->
          <img src="../Images/o_A8fBmg.jpeg">    <input type="radio" name="vote" value="8" onclick="getVote(this.value)">
            <!-- </p> -->
            
          </div>

        </div>
      </div>
    <!-- </form> -->
    <br><br>
  </div>
  
 <script>
      function getVote(int) {
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp = new XMLHttpRequest();
        } else { // code for IE6, IE5
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("votingpoll").innerHTML = this.responseText;
          }
        }
        xmlhttp.open("GET", "VotingPoll.php?vote=" + int, true);
        xmlhttp.send();
      }
    </script>
</body>

<?php include_once '../HTML/foot.html'; ?>

</html>