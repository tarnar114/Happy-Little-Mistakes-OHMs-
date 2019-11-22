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
    <div class="container ">
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
          <!-- <div id="mdb-lightbox-ui"></div> -->
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



    $(function() {
      $("#trending").load("mdb-addons/mdb-lightbox-ui.html");
    });
  </script>
</body>

<?php include_once '../HTML/foot.html'; ?>

</html>
