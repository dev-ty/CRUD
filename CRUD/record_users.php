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
<style>
    a {
        color: white;
    }
    th {
        font-weight: bold;
        text-transform: uppercase;
    }
    .id { 
        color: red;
    }
    
</style>

<body>
    <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Telephone</th>
                <th>Place of Birth</th>
                <th>Date of Birth</th>
                <th>Salary</th>
                <th>
                <button class="btn btn-success">
                        <a href="form.php">
                            ADD MORE
                        </a>
                    </button>
                </th>
            </tr>
        </thead>

        <?php

        include "connect_db.php"; // Using database connection file here

        $sql = "SELECT * FROM users"; 
        $records = mysqli_query($conn, $sql); // fetch data from database

        while($row = mysqli_fetch_array($records)) {
        ?> 
        <tbody>
            <tr>
                <td class="id"><?php echo $row['id']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['tel']; ?></td>
                <td><?php echo $row['pob']; ?></td>
                <td><?php echo $row['dob']; ?></td>
                <td><?php echo $row['salary']; ?></td>
                <td>
                    <button class="btn btn-warning">
                        <a href="edit.php?id=<?php echo $row['id']; ?>">
                            EDIT
                        </a>
                    </button>
                </td>
                <td>
                    <button class="btn btn-danger">
                        <a href="delete_db.php?deleteId=<?php echo $row['id']; ?>">
                            DELETE
                        </a>
                    </button>
                </td>
                    
                
            </tr>
        </tbody>
        <?php } ?>
    </table>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

</body>

</html>