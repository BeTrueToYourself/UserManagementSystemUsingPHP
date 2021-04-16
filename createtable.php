<?php
$link = mysqli_connect('localhost','root', "","usermanagement");
if($link == false)
{
die("Could not connect". mysqli_connect_error());
}
$sql = "create table quotes(
id int primary key AUTO_INCREMENT,
quote varchar(20)
)";
if(mysqli_query($link, $sql))
{
echo "Table created succsessfully";
}
else
{
    //echo "Database couldn't be created<br>";
    echo "Database table couldn't be created<br>".mysqli_error($link);
}
mysqli_close($link);