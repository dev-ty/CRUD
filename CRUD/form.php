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
    <h1 style="text-align: center; margin-top: 40px;">Form with PHP and MySQL database:</h1>
    <?php 
        include 'connect_db.php';  
    ?>
    <form action="inserted.php" method="POST" style="margin:20px 100px;">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example1" class="form-control" name="first_name" />
                    <label class="form-label" for="form6Example1">First name:</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example2" class="form-control" name="last_name" />
                    <label class="form-label" for="form6Example2">Last name:</label>
                </div>
            </div>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="number" id="form6Example3" class="form-control" name="age" />
            <label class="form-label" for="form6Example3">Age:</label>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="number" id="form6Example4" class="form-control" name="tel" />
            <label class="form-label" for="form6Example4">Telephone:</label>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="text" id="form6Example5" class="form-control" name="pob" />
            <label class="form-label" for="form6Example5">Place of Birth:</label>
        </div>

        <!-- Number input -->
        <div class="form-outline mb-4">
            <input type="date" id="form6Example6" class="form-control" name="dob" />
            <label class="form-label" for="form6Example6">Date of Birth:</label>
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
            <input type="text" id="form6Example6" class="form-control" name="salary" />
            <label class="form-label" for="form6Example7">Salary:</label>
        </div>

        <!-- Submit button -->
        <input type="submit" class="btn btn-primary btn-block mb-4" name="submit"></input>
    </form>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>