<!DOCTYPE html>
<html lang="en">

  <?php include_once '../HTML/nav.html'; ?>

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
    <div class="jumbotron">
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
  <!-- <div style="height:50px"></div> -->
  <!--


  <div id="trending">
    <div style="height:150px"></div>
    <div class="container ">
      <div class="row">


        <div class="col-md">
          <hr class="my-4">
        </div>

        Contact links
        <div class="col-sm-3">
          <h1>Top Trending</h1>
        </div>

        <div class="col-md">
          <hr class="my-4">
        </div>

      </div>


      <div class="col-md-12">
        <div class="row">
          <hr>
           <div id="mdb-lightbox-ui"></div>
          <div class="mdb-lightbox gal">
            <figure>
              <a href="https://preview.ibb.co/i0PmHk/1.jpg" data-size="1600x1067">
                <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt=""></a>
            </figure>

            <img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt="">

            <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

            <img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">



            <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
            <img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt="">

            <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

            <img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">

            <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
            <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt=""><img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
            <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

            <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
            <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
            <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
            <img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">

            <img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">

            <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
            <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
            <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
            <img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt="">

          </div>

        </div>
      </div>
    </div>
  </div>
  -->

<style>
<?php include '../CSS/masonry.css'; ?>
</style>
<hr /><hr /><br><br><br>

<script>
function DescriptionAlert() {
  alert("Welcome to the Editor's Choice section! Here at Only Happy Mistakes, we choose our favourite art each week, and set a voting poll for you to pick a winner! If you are featured, everyone who visits our Home Page can see your work!")
}
</script>

<h1>Editors Choices!</h1>
<p><button onclick="DescriptionAlert()">Description</button></p>
<br>




<script type="text/javascript">
var vote1 = 0;
function photo1() {
  vote1 +=1;
  document.getElementById("vote1").innerHTML = vote1;
};
</script>
<script type="text/javascript">
var vote2 = 0;
function photo2() {
  vote2 +=1;
  document.getElementById("vote2").innerHTML = vote2;
};
</script>
<script type="text/javascript">
var vote3 = 0;
function photo3() {
  vote3 +=1;
  document.getElementById("vote3").innerHTML = vote3;
};
</script>
<script type="text/javascript">
var vote4 = 0;
function photo4() {
  vote4 +=1;
  document.getElementById("vote4").innerHTML = vote4;
};
</script>
<script type="text/javascript">
var vote5 = 0;
function photo5() {
  vote5 +=1;
  document.getElementById("vote5").innerHTML = vote5;
};
</script>
<script type="text/javascript">
var vote6 = 0;
function photo6() {
  vote6 +=1;
  document.getElementById("vote6").innerHTML = vote6;
};
</script>
<script type="text/javascript">
var vote7 = 0;
function photo7() {
  vote7 +=1;
  document.getElementById("vote7").innerHTML = vote7;
};
</script>
<script type="text/javascript">
var vote8 = 0;
function photo8() {
  vote8 +=1;
  document.getElementById("vote8").innerHTML = vote8;
};
</script>




<div class="container masonry">
<div class="item">
    <p>Amount of votes: <a id="vote1">0</a></p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>

  <div class="item">
    <p>Amount of votes: <a id="vote2">0</a></p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>

  <div class="item">
    <p>Amount of votes: <a id="vote3">0</a></p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>

  <div class="item">
    <p>Amount of votes: <a id="vote4">0</a></p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>

  <div class="item">
    <p>Amount of votes: <a id="vote5">0</a></p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>

  <div class="item" onClick="photo6()">
    <p>Amount of votes: <a id="vote6">0</a></p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>

  <div class="item" onClick="photo7()">
    <p>Amount of votes: <a id="vote7">0</a></p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>

  <div class="item">
    <p>Amount of votes: <a id="vote8">0</a></p>
    <img src="../Images/o_A8fBmg.jpeg">
  </div>

</div>
<br><br>

<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("vote").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","VotingPoll.php?vote="+int,true);
  xmlhttp.send();
}
</script>
<div id="vote">
<h3>Do you like PHP and AJAX so far?</h3>
<form>
Photo 1
<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
<br>Photo 2
<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
<br>Photo 3
<input type="radio" name="vote" value="2" onclick="getVote(this.value)">
<br>Photo 4
<input type="radio" name="vote" value="3" onclick="getVote(this.value)">
<br>Photo 5
<input type="radio" name="vote" value="4" onclick="getVote(this.value)">
<br>Photo 6
<input type="radio" name="vote" value="5" onclick="getVote(this.value)">
<br>Photo 7
<input type="radio" name="vote" value="6" onclick="getVote(this.value)">
<br>Photo 8
<input type="radio" name="vote" value="7" onclick="getVote(this.value)">
</form>
</div>



<!--
  <script>
    //  $(function navBackground() {
    //       $(document).scroll(function() {
    //           $('nav').toggleClass('scrolled', $(this).scrollTop() > 20);
    //       });
    //     }
  </script>
-->

</body>

<?php include_once '../HTML/foot.html'; ?>

</html>
