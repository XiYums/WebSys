<?php 
include 'server.php';
if(!isset($_COOKIE['Username'])){
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="server.php" method="POST">
        <label><?php echo $_COOKIE['Username'] ;?></label>
        <input type="submit" name="Logout" class="btn btn-outline-danger" value="Logout">
</form>
<!--update-->
<?php if($update==true):
?>
<form method="POST" action="server.php">
    <div class="form-group container">
        <input type="test" name="ID" class="form control" value="<?php echo $row['ID']; ?>">
        <label> username</label>
        <input type="test" name="username" class="form control" value="<?php echo $row['username']; ?>" placeholder="Enter Username">
        <label>Name</label>
        <input type="test" name="name" class="form control" value="<?php echo $row['Name']; ?>" placeholder="Enter Name">
        <div class="form-group d-flex justify-content-end">
            <button type="submit" name="cancel-edit" class="btn btn-primary">Cancel</button>
            <button type="submit" name="update" class="btn btn-success">Update</button>
        </div>
    </div>
</form>
<?php
    endif;
?>
    <br>
    <table class="table table-striped container table-dark">
    <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Name</th>
    <th>Password</th>
    <th colspan="2" class="text-center">ACTION</th>
    </tr>
    <?php 
	while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
    <td><?php echo $row['ID']; ?></td>
    <td><?php echo $row['Username']; ?></td>
    <td><?php echo $row['Name']; ?></td>
    <td><?php echo $row['Password']; ?></td>
    <td class="text-center"><a href="server.php?edit=<?php echo $row['ID']; ?>" class="btn btn-outline-primary">Edit</a></td>
    <td class="text-center"><a href="server.php?delete=<?php echo $row['ID']; ?>" class="btn btn-outline-danger">Delete</a></td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>
