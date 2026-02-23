<?php
include 'server.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>Login</h1>
    <form action="server.php" method="post">
        <div class="form-group">
            <label> Username </label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username">
        </div>

        <div class="form-group">
            <label> Password </label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
        </div>
        <br>
        <div class="d-flex flex-row-reverse">
            <input type="submit" name="Login" class="btn btn-outline-success" value="Login">
            <input type="submit" name="Register" class="btn btn-outline-danger" value="Register">
        </div>



    </form>


    </div>
    
</body>
</html>