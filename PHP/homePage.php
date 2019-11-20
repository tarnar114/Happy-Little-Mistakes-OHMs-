<!DOCTYPE html>
<html lang="en">

<?php include_once '../HTML/nav.html'; ?>

<body>
  <div class="container py-5 ">
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



<div id="trending">
  <div style="height:100px"></div>
  <div class="container " >
    <div class="row">


      <div class="col-md">
        <hr class="my-4">
      </div>

      <!-- Contact links -->
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

        <div class="gal">

          <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

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







  <script>
    //  $(function navBackground() {
    //       $(document).scroll(function() {
    //           $('nav').toggleClass('scrolled', $(this).scrollTop() > 20);
    //       });
    //     }

    $(function() {
      $(document).scroll(function() {
        var $nav = $(".navbar-fixed-top");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
      });
    });
  </script>
</body>

<?php include_once '../HTML/foot.html'; ?>

</html>