<!DOCTYPE html> 
<html lang="en">
 <head>
  <meta charset="UTF-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <title>InsertQuote</title> 
   <style>
   a {text-decoration: none;}
body  {
   font-weight:bold;
   color:brown;
  background-color: skyblue;
}
</style>
   </head> 
   <body> 
   <br>
<center><img src="userimage/user.png" alt="userimage/bg.png" width="500" height="100"><center>
   <br>
<?php 
$conn= mysqli_connect('127.0.0.1','root', "","usermanagement"); 
if($conn == false) { 
    die("Could not connect".mysqli_connect_error()); 
} 
$id = $_POST['id']; 
$quote = $_POST['quote'];

$sql="INSERT INTO quotes(id, quote) VALUES ('$id', '$quote')"; 
if(mysqli_query($conn,$sql))
{ 
    echo "Inserted Quote Successfully<br>"; 
    echo "Quote Number :- ". $id."<br>";
    echo "Your Qoute :- ". $quote."<br>";

}
else{ echo "Sorry....!! The Quote is not inserted."; 
}
 mysqli_close($conn); ?>

<p> <a href="index.php" style="color: white;background-color:#F50324;" class="btn btn-danger"><b>Go Back</b></a> </p>
   <p> <a href="index.php?logout='1'" style="color: white;background-color:#F50324;" ><b>Log Out</b></a> </p>
   </body> 
   </html>