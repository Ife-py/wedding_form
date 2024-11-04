<?php 
include("db_connect.php");

$host='localhost';
$dbName='wedding_details';
$dbUser='root';
$password='';
try{
    $db=new PDO("mysql:host=$host;dbname=$dbName",$dbUser,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo"Connection failed:".$e->getMessage();
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['submit'])){
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
    

    if (isset($_POST['sign_up'])){
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);

        $sql="INSERT INTO users(name,email,password) values('$name','$email','$password')";
        if(mysqli_query($conn,$sql)){
            echo "Registration successful";
            header("Location:users.php");
        }else{
            die("An error occured");
        }

    }

    if (isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql=$db->prepare("SELECT id,email,password FROM users where email= :email");
        
        $sql->bindParam(':email', $email);
        $sql->execute();
        $row=$sql->fetch(PDO::FETCH_ASSOC);

        if($row&& $row['password']==$password){
            echo "Login successful";
            header("location:admin.php");
        }else{
            echo "Invalid log in details";
            header("location:users.php");
        }
    }

}


?>