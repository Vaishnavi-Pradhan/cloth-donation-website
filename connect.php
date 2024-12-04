<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $PhoneNo=$_POST['PhoneNo'];
    $Password=$_POST['Password'];
}

$con = new mysqli('localhost','root','','test');

if($con){
    //echo"Connecction successful";

    //if email already exixts
    $sql="select * from registration where Email='$Email'";
    $result=mysqli_query($con,$sql);
    $rowcount=mysqli_num_rows($result);
    if($rowcount> 0){
        echo"Email already exits..!";
        exit();
    }
    $sql = "insert into registration(Name,Email,Phonenum,Password)
    values('$Name','$Email',$PhoneNo,'$Password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"<h1>You have registered successfully...!<h1>";
        header("refresh:2;url=login.html");
        exit; // Ensure no further output is sent
    }else{
        echo"Connecction failed";
    }
    }else{
        echo"Connecction failed";
    }
?>