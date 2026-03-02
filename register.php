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
    <style>
         body {
            background: linear-gradient(135deg, #fa0202 0%, #0f02fc 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 40px rgb(245, 216, 2);
            padding: 40px;
            max-width: 500px;
            width: 100%;
        }
        h1 {
            color: #4d9eef;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
        }
        .form-group label {
            color: #333;
            font-weight: 600;
            margin-bottom: 8px;
        }
        .form-control {
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            padding: 12px 15px;
            font-size: 15px;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #66bcea;
            box-shadow: 0 0 0 3px rgb(237, 206, 5);
        }
        .btn-outline-success {
            background: #f11d01;
            border: none;
            color: white;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 8px;
            transition: all 0.3s ease;
            width: 48%;
        }
        .btn-outline-success:hover {
            background: #800303;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        .btn-outline-danger {
            background: #0571e4;
            border: none;
            color: white;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 8px;
            transition: all 0.3s ease;
            width: 48%;
        }
        .btn-outline-danger:hover {
            background: #0ab6d4;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(118, 75, 162, 0.4);
        }
        .d-flex {
            gap: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Registration</h1>
    <form action="server.php" method="post">
        <div class="form-group">
            <label> Username </label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username">
        </div>

        <div class="form-group">
            <label> Name </label>
            <input type="text" name="name" class="form-control" placeholder="Enter Name">
        </div>

        <div class="form-group">
            <label> Password </label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
        </div>
        <br>
        <div class="d-flex flex-row-reverse">
            <input type="submit" name="Submit" class="btn btn-outline-success" value="Submit">
            <input type="submit" name="Cancel" class="btn btn-outline-danger" value="Cancel">
        </div>



    </form>


    </div>
    
</body>
</html>