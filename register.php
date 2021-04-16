<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
body  {
  background-image: url("userimage/bg.png");
  background-color: #cccccc;
}
</style>
  
</head>
<body class="container">

<br>
<center><img src="userimage/user.png" alt="userimage/bg.png" width="500" height="100"><center>
  <div class="header">
  	<h2>Register</h2>
  </div>

  <form method="post" action="register.php">

  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label><b>Username</b></label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label><b>Email</b></label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label><b>Password</b></label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label><b>Confirm Password</b></label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user"><b>Register</b></button>
  	</div>
  	<p>
	  <b>Already Have An Account? </b><a href="login.php"><br><b>Sign In</b></a>
  	</p>
  </form>
</body>
</html>