<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
</head>
<body align="center">
    details   <br><br> 
</body>
</html>

<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'prac';
    
    $conn = new mysqli($host,$user,$pass,$db);

    $sql = "SELECT * FROM `data`;";
    $res = mysqli_query($conn,$sql);
    $rescheck = mysqli_num_rows($res);
    if($rescheck>0) {
        while($row = mysqli_fetch_assoc($res)) {
            echo $row['datas']."<br>".$row['atads']."<br>";

        }
    }
    ?>