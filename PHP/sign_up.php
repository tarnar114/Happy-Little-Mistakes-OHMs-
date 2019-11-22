<!DOCTYPE html>
<html lang="en">

<?php include '../HTML/nav.html';?>
<head>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>

<body >

	<div class="container">
		<div class="login-box">
			<div class="login-left">
				<h2> Login Here </h2><br>
				<form action="processLogin.php" method="post">
					<div class="form-group">
						<label>Email-Address</label><br>
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
				<form action="processSignup.php" method="post">
          <div class="form-group">
            <label>First Name</label><br>
            <input type="text" name="fname" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Last Name</label><br>
            <input type="text" name="lname" class="form-control" required>
          </div>
					<div class="form-group">
						<label>Username</label><br>
						<input type="text" name="user" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label><br>
						<input type="password" name="password" placeholder="Enter Password" class="form-control" required>
					</div>
          <div class="form-group">
            <label>Email-Address</label><br>
            <input type="text" name="email" placeholder="Enter Email Address" class="form-control" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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


<?php include '../HTML/foot.html'; ?>

</html>
