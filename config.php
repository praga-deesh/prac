<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'prac';
    
    $conn = new mysqli($host,$user,$pass,$db);

    if(!$conn){
        echo "db not connected";
    }
    else {
        echo "db connected successfullly";
    }    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "INSERT INTO `prac`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
    $insert = mysqli_query($conn,$query);
    if(!$insert){
        echo "datas not entered";
    }
    else {
        echo "registration successfull";
    }
?>