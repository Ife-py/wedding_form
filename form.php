<?php 
include("db_connect.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $address=mysqli_real_escape_string($conn,$_POST['address']);
    $number=mysqli_real_escape_string($conn,$_POST['phone_number']);
    $option=mysqli_real_escape_string($conn,$_POST['rsvp']);


    if(empty($name)||empty($email)||empty($address)||empty($number)||empty($option)){
        echo "Please fill out all fields";
        header("Location:index.php");
    }else{
        $sql="INSERT INTO details(Name,Email,Address,number,option,Reg_time)values('$name','$email','$address','$number','$option',Now())";
        if(mysqli_query($conn,$sql)){
            echo "Registration successful";
            header("location:index.php");
        }else{
            die("An error occured");
        }
    }


}


?>