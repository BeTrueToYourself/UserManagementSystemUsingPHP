<!DOCTYPE html> 
<html lang="en">
 <head>
  <meta charset="UTF-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <title>InsertQuote</title> 
   <style>
   table{
    background-color: skyblue;

   }
   th{
    background-color: orange;
    color:brown;
    font-weight:bold;

   }
   td{
    background-color: pink;
    color:brown; 
    font-weight:bold;  
   }
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

<?php 
$link = mysqli_connect('localhost','root', "","usermanagement"); 
if($link == false) {
     die("Could not connect". mysqli_connect_error());
     } 
     $sql = "SELECT * FROM quotes"; 
     if($result= mysqli_query($link, $sql)) { 
         if(mysqli_num_rows($result)>0) 
         { echo "<table border = 2>"; 
            echo "<tr>";
            echo "<th>Quote Number</th>";
            echo "<th>Your Quote</th>"; 
            echo "</tr>"; 
            while($row = mysqli_fetch_array($result)) { 
                echo "<tr>"; echo "<td>".$row['id']."</td>"; 
                echo "<td>".$row['quote']."</td>"; 

                echo "</tr>"; } 
                echo "</table>"; } 
                else 
                { echo "No Quote found"; 
                } }
                 else{ 
                    echo "Query could not be executed";
                 } 
                 mysqli_close($link);
?>
</div>
                 <p> <a href="index.php" style="color: white;background-color:#F50324;" class="btn btn-danger"><b>Go Back</b></a> </p>
                 <p> <a href="index.php?logout='1'" style="color: white;background-color:#F50324;" ><b>Log Out</b></a> </p>
                 </body> 
                 </html>