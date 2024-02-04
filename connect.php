
<?php

//comments in php
$servername="localhost";
$username="root";
$password="";
$database="form";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
    die(mysqli_connect_error($con));
}
if(isset($_POST["submit"]))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $sql="INSERT into `table1`(`name`,`email`)values('$name','$email')";
    $result=mysqli_query($con,$sql);

if($result)
{
    echo "success";
}
}
?>
