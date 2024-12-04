<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $FullName=$_POST['FullName'];
    $MobileNo=$_POST['MobileNo'];
    $Items=$_POST['Items'];
    $Address=$_POST['Address'];
    $NGO=$_POST['NGO']; // Retrieve the selected NGO name
}


$con = new mysqli('localhost','root','','test');

if($con){
    //echo"Connecction successful";

    $sql = "insert into donation(FullName,MobileNo,Items,Address,Ngo)
    values('$FullName',$MobileNo,$Items,'$Address','$NGO')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"<h1>Thank you for your donation. Pick up will be done soon.<h1>";
        header("refresh:2;url=index.html");
        exit; // Ensure no further output is sent
    }else{
        echo"Connecction failed";
    }
    }else{
        echo"Connecction failed";
    }
?>