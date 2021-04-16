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
  background-image: url("userimage/bg.png");
  background-color: #cccccc;
}
</style>
   </head> 
   <body> 
   <br>
<center><img src="userimage/user.png" alt="userimage/bg.png" width="500" height="100"><center>
   <br>
   <form action="insertquote.php" method="post"> 
   <br>
   <br>
   <label style="color: brown;background-color:skyblue;font-weight:bold">  Quote Number :  </label> <br>
   <br>
   <input type="text" name ="id" required> 
   <br>
   <br><br>
   <label style="color: brown;background-color:skyblue;font-weight:bold" >  Write A Quote :  </label> <br>
   <br>
  <textarea  name ="quote"  required rows="10" cols="30" style="background-color:brown;color:skyblue;">Write Your Quote Here....!!!!</textarea>
   <br>
   <br>
   <input type="submit" vlaue="Insert Your Quote" style="color: brown;background-color:skyblue;font-weight:bold"> 
   </form> 
   <p> <a href="index.php" style="color: white;background-color:#F50324;" class="btn btn-danger"><b>Go Back</b></a> </p>
   <p> <a href="index.php?logout='1'" style="color: white;background-color:#F50324;" ><b>Log Out</b></a> </p>
   </body> 
   </html>