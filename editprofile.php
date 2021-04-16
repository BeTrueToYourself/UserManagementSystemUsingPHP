<?php include_once('processForm.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>EditProfile</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
  <style>
    a {text-decoration: none;}
body  {
  background-image: url("userimage/bg.png");
  background-color: #cccccc;
}
</style>
</head>
<body>
<br>
<center><img src="userimage/user.png" alt="userimage/bg.png" width="500" height="100"><center>
  <div class="container"  >
    <div class="row" >
      <div class="col-4 offset-md-4 form-div" style="background-color:grey;">
        <a href="index.php" style="color:brown;"><b>View User Profile Story</b></a>
        <form action="editprofile.php" method="post" enctype="multipart/form-data">
          <h2 class="text-center mb-3 mt-3" style="color:skyblue;">Add A Story....!!!!</h2>
          <?php if (!empty($msg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4 style="color:brown;">Click Here To Add A Photo To Your Story....!!!!</h4>
              </div>
              <img src="userimage/avatar.png" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
            <label style="color:skyblue;"><b>Photo</b></label>
          </div>
          <div class="form-group">
            <label style="color:skyblue;"><b>Write The Story Here....!!!!<b></label>
            <textarea name="bio" class="form-control" rows="20" cols="10" style="background-color:brown;color:skyblue;">Write Your Story Here....!!!!</textarea>
          </div>
          <div class="form-group">
            <button type="submit" name="save_profile" class="btn btn-primary btn-block"><b>Add The Story<b></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<script src="scripts.js"></script>