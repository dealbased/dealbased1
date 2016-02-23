<?php
    
    session_start();
    $servername = "localhost";
    $username = "dealldsx_dealers";
    $password = "Qq03049835";
    $dbname = "dealldsx_dealers";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "DELETE FROM articles WHERE uid='".$_REQUEST['uid']."'  and user_id = '".$_SESSION['user_id']."'";
    $result = mysqli_query($conn, $sql);
    header("Location: profile.php")
    ?>
