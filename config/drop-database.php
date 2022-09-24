<?php 

    // integrasi koneksi
    require_once('connection.php');

    // Create database
    $sql = "DROP DATABASE sacode_course";
    if (mysqli_query($conn, $sql)) {
        echo "Database dropped successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }
