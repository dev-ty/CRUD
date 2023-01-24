<?php
    include 'connect_db.php';

    //to show the users old input in the placeholders
    $id = $_GET['id'];
    $showUsers = "SELECT * FROM users WHERE id = '$id'";    
    $result = mysqli_query($conn, $showUsers);
    while ($row = mysqli_fetch_assoc($result)){
        $userID = $row['id'];
        $userFname = $row['first_name'];
        $userLname = $row['last_name'];
        $userAge = $row['age'];
        $userTel = $row['tel'];
        $userPob = $row['pob'];
        $userDob = $row['dob'];
        $userSalary = $row['salary'];
    }

?>
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <h1 style="text-align: center; margin-top: 40px;">Edit the user with ID = <?php echo $id;?></h1>
    
    <form method="POST" style="margin:20px 100px" action = "update_user.php?id=<?php echo $userID; ?>">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example1" class="form-control" name="first_name" value="<?php echo $userFname; ?>" />
                    <label class="form-label" for="form6Example1">First name:</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example2" class="form-control" name="last_name" value="<?php echo $userLname; ?>"/>
                    <label class="form-label" for="form6Example2">Last name:</label>
                </div>
            </div>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="number" id="form6Example3" class="form-control" name="age" value="<?php echo $userAge; ?>"/>
            <label class="form-label" for="form6Example3">Age:</label>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="number" id="form6Example4" class="form-control" name="tel" value="<?php echo $userTel; ?>"/>
            <label class="form-label" for="form6Example4">Telephone:</label>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="text" id="form6Example5" class="form-control" name="pob" value="<?php echo $userPob; ?>"/>
            <label class="form-label" for="form6Example5">Place of Birth:</label>
        </div>

        <!-- Number input -->
        <div class="form-outline mb-4">
            <input type="date" id="form6Example6" class="form-control" name="dob" value="<?php echo $userDob; ?>"/>
            <label class="form-label" for="form6Example6">Date of Birth:</label>
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
            <input type="text" id="form6Example6" class="form-control" name="salary" value="<?php echo $userSalary; ?>"/>
            <label class="form-label" for="form6Example7">Salary:</label>
        </div>

        <!-- Submit button -->
        <input type="submit" class="btn btn-primary btn-block mb-4" name="update"></input>
    </form>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>