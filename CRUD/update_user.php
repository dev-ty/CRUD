<?php

    include 'connect_db.php';

    if (isset($_POST['update'])){
        $id = $_GET['id'];
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $age = $_POST['age'];
        $tel = $_POST['tel'];
        $placeOfBirth = $_POST['pob'];
        $dateOfBirth = $_POST['dob'];
        $salary = $_POST['salary'];
    }
    $sqlUpdate  = "UPDATE `users` SET
                    `first_name`='$fname',
                    `last_name`='$lname',
                    `tel`='$tel',
                    `pob`='$placeOfBirth',
                    `age`='$age',
                    `dob`='$dateOfBirth',
                    `salary`='$salary' WHERE `id` = $id";

    $result = mysqli_query($conn, $sqlUpdate);

    if (!$result){
        echo "update the data unsuccessfully."; 
    }
    else {
        header("Location: record_users.php");
    }

?>