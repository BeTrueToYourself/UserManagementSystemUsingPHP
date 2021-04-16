<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
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
  	<h2>Login</h2>
  </div>
 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label><b>Username</b></label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label><b>Password</b></label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user"><b>Login</b></button>
  	</div>
  	<p>
  		<b>Create An Account? </b> <a href="register.php"><br><b>Sign In</b></a>
  	</p>
  </form>
</body>
</html>
