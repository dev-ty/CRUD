<?php  
    include 'connect_db.php';
   
    $id = $_GET['deleteId'];
    $deleteCol = "DELETE FROM users WHERE id= '$id'";

    if (mysqli_query($conn, $deleteCol)){
        header("Location: record_users.php");
    }
    else {
        echo "Delete unsuccessfully"; 
    }
    // include 'record_users.php';
?>