<?php 
    include 'connect_db.php';

    if (isset($_POST['submit'])){
        $id = $_GET['id'];
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $age = $_POST['age'];
        $tel = $_POST['tel'];
        $placeOfBirth = $_POST['pob'];
        $dateOfBirth = $_POST['dob'];
        $salary = $_POST['salary'];
    

    $sqlInsert = "INSERT INTO users (first_name, last_name, age, tel, pob, dob, salary) 
                    VALUES ('$fname', '$lname', '$age', '$tel', '$placeOfBirth', '$dateOfBirth', '$salary')";
    
    if (mysqli_query($conn, $sqlInsert)) {
        echo header("Location: record_users.php");
    } else {
        echo "Error: " . $sqlInsert . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
    
    }

?>


