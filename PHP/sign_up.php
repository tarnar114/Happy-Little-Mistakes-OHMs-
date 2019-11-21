<!DOCTYPE html>
<html lang="en">

<<<<<<< HEAD
<?php include '../HTML/nav.html';?>
<head>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>

<body >

	<div class="container">
		<div class="login-box">
			<div class="login-left">
				<h2> Login Here </h2><br>
				<form action="checkuser.php" method="post">
					<div class="form-group">
						<label>Email Address</label><br>
						<input type="text" name="email" placeholder="Enter Email Address" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label><br>
						<input type="password" name="password" placeholder="Enter Password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary"> Login </button>
				</form>
			</div>

			<div class="login-right">
				<h2> Signup Here </h2><br>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label>Username</label><br>
						<input type="text" name="user" class="form-control" required>
					</div>
          <div class="form-group">
            <label>Email-Address</label><br>
            <input type="text" name="email" placeholder="Enter Email Address" class="form-control" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
					<div class="form-group">
						<label>Password</label><br>
						<input type="password" name="password" placeholder="Enter Password" class="form-control" required>
					</div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
					<button type="submit" class="btn btn-primary"> Submit </button>
				</form>
			</div>
	</div>
	</div>
</body>

<?php include '../HTML/foot.html';?>
</html>
=======
<?php include '../HTML/nav.html'; ?>

<body><div class=" container ">
  <div class=" row">
    <div class="col-md-12">
      <div id="mdb-lightbox-ui"></div>
      <div class="mdb-lightbox no-margin">
        <figure class="col-md-4">
          <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(117).jpg" data-size="1600x1067">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(117).jpg" class="img-fluid">
          </a>
        </figure>
        <figure class="col-md-4">
          <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(98).jpg" data-size="1600x1067">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(98).jpg" class="img-fluid" />
          </a>
          <button></button>
        </figure>
        <figure class="col-md-4">
          <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(131).jpg" data-size="1600x1067">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(131).jpg" class="img-fluid" />
          </a>
        </figure>
        <figure class="col-md-4">
          <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(123).jpg" data-size="1600x1067">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(123).jpg" class="img-fluid" />
          </a>
        </figure>
        <figure class="col-md-4">
          <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(118).jpg" data-size="1600x1067">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(118).jpg" class="img-fluid" />
          </a>
        </figure>
        <figure class="col-md-4">
          <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(128).jpg" data-size="1600x1067">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(128).jpg" class="img-fluid" />
          </a>
        </figure>
        <figure class="col-md-4">
          <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(132).jpg" data-size="1600x1067">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(132).jpg" class="img-fluid" />
          </a>
        </figure>
        <figure class="col-md-4">
          <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(115).jpg" data-size="1600x1067">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(115).jpg" class="img-fluid" />
          </a>
        </figure>
        <figure class="col-md-4">
          <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(133).jpg" data-size="1600x1067">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(133).jpg" class="img-fluid" />
          </a>
        </figure>
      </div>
    </div>
  </div>
  </div>
  <script>
    $(function() {
      $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });
  </script>
</body>
<?php include '../HTML/foot.html'; ?>

</html>
>>>>>>> ee1c53fed1489e83f377cd440195c9d9e0822d36
