<?php
    $conn = mysqli_connect("localhost", "root", "", "chatap");
    if(!$conn){
        echo "Database connected" . mysqli_connect_error();
    }
?>