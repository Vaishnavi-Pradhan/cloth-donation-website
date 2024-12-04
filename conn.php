<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
}

$con = new mysqli('localhost','root','','test');

if($con){
    $sql = "select * from registration where Email='$Email' and Password='$Password'";
    $result=mysqli_query($con,$sql);
    if($result && mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $name = $row['Name'];
        //Redirecting to home2 page
        header("Location: home2.php?name=" . urlencode($name));
        exit();
    }
    else{
        echo"<h1>Oops..! Login Failed. Try again<h1>";
        header("refresh:2;url=login.html");
        exit; // Ensure no further output is sent
    }
   }
    else{
        echo"Connecction failed";
    }
?>