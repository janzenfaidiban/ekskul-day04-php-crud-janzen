<?php 

    // integrasi koneksi
    require_once('connection.php');

    // Create database
    $sql = "CREATE DATABASE sacode_course";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }
