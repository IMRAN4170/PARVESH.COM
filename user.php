<?php

$server = "localhost";
$username = "root";
$password = "";


$con=mysqli_connect($server,$username,$password);

if($con){

    echo  "Success connecting to the database";
}
else{
    echo "no connection";
}

mysqli_select_db($con,'userdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userinfodata(user,email,mobile,comment) values('$user','$email','$mobile','$comment')";

mysqli_query($con,$query);

echo "$query";

header('location:index.php');




?>
