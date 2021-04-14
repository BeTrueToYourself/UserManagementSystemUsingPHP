<?php

$conn = mysqli_connect("localhost", "root", "", "usermanagement");
$results = mysqli_query($conn, "SELECT * FROM profile");
$users = mysqli_fetch_all($results, MYSQLI_ASSOC);

  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
body  {
  background-image: url("userimage/bg.png");
  background-color: #cccccc;
}
</style>
</head>
<body>
<br>
<center><img src="userimage/user.png" alt="userimage/bg.png" width="500" height="100"><center>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    

		<p><b>Welcome To The User Management System.....!!!! </b></P>
		<br>
		<p><em><b>Your Profile Name is </b></em><strong><?php echo $_SESSION['username']; ?></strong></p>
	
	<div class="container">
    <div class="row">
      <div class="col-4 offset-md-4" style="margin-top: 30px;">
     
       
        <table class="table table-bordered">
          
          
            <?php foreach ($users as $user): ?>
				<thead>
            <th>Photo</th>
          </thead>
		  <tbody>
              <tr>
                <td> <center><img src="<?php echo 'profileimg/' . $user['profile_image'] ?>" width="90" height="90" alt=""> </center></td>
                
              </tr>
			  <thead>
            <th>Story</th>
          </thead>
			  <tr> 
			  <td><center><b><em><?php echo $user['bio']; ?></em> </b></center></td>
			  </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
		<br>
		<br>
		<a href="editprofile.php" class="btn btn-success"><b>Click Here To Write A Story Please</b></a>
      </div>
    </div>
  </div>
  <br>
		<br>
    	<p> <a href="index.php?logout='1'" style="color: red;"><b>Log Out</b></a> </p>
    <?php endif ?>
</div>

</body>
</html>
