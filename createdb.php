<?php
    $localhost = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($localhost, $username, $password,);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "CREATE DATABASE php_project";
    
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }

    mysqli_select_db($conn, "php_project");
    // Create table
    $sql = "CREATE TABLE students (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100),
        email VARCHAR(150),
        phone VARCHAR(20),
        address VARCHAR(25),
        gender VARCHAR(10)
    )";
    if (mysqli_query($conn, $sql)) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    
?>



