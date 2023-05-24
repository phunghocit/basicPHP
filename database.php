<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $port = 3306;
    $database = "green_php";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database, $port);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // if($conn->query($sql) === TRUE){
    //     echo "New user create successfully";
    // }else {
    //     echo "Error: ".$sql."<br>".$conn->error;
    // }

    // $conn->close();
?>