<?php
session_start();

// initializing variables
$username = "root";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'usermanagement');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //if (empty($username)) { array_push($errors, "Username is required"); }

  if (empty($_POST["username"])) {
    array_push($errors, "Name is required");
  } else {
    $username = $_POST["username"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
      array_push($errors,"Only letters and white space allowed");
    }
  }
  if (empty($_POST["email"])) {
    array_push($errors,"Email is required");
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($errors,"Invalid email format");
    }
  }

  //if (empty($email)) { array_push($errors, "Email is required"); }
  //if (empty($password_1)) { array_push($errors, "Password is required"); }
  //if ($password_1 != $password_2) {
	//array_push($errors, "The two passwords do not match");
  //}
  
  if(!empty($_POST["password_1"]) && isset( $_POST['password_1'] )) {
    $password = $_POST["password_1"];
    $cpassword = $_POST["password_2"];
    if (mb_strlen($_POST["password_1"]) <= 8) {
      array_push($errors,"Your Password Must Contain At Least 8 Characters!");
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
      array_push($errors,"Your Password Must Contain At Least 1 Number!");
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
      array_push($errors,"Your Password Must Contain At Least 1 Capital Letter!");
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
      array_push($errors,"Your Password Must Contain At Least 1 Lowercase Letter!");
    }
    elseif(!preg_match("#[\W]+#",$password)) {
      array_push($errors,"Your Password Must Contain At Least 1 Special Character!");
    } 
    elseif (strcmp($password, $cpassword) !== 0) {
      array_push($errors,"Passwords must match!");
    }
} else {
  array_push($errors,"Please enter password   ");
}


  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password)
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// ...
// ...

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
