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

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $query = "SELECT  `email`, `password` FROM `prac` WHERE email = '$email' and password = '$password'";
    $c = mysqli_query($conn,$query);
    if(mysqli_num_rows($c)>0)
    {
        header("location:main.html");
    }
    else {
        echo '<script> alert("invalid pass") </script>';
    }

    ?>