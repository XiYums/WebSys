<?php
include 'config.php';

// sql query select all
$result = mysqli_query($db, "SELECT * FROM tbl_user");

// Login Button
if(isset ($_POST['Login'])){
    extract($_POST);

    $sql = mysqli_query($db, "SELECT * FROM tbl_user where Username='$username' and Password='$password'");
    $row = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_COOKIE['Username']=$row['Username'];
        setcookie('Username',$username,time()+86400*30); 

        header("Location: index.php");
    }

    else
    {
        echo "Invalid Username and Password";
    }
}

// lOGOUT
if(isset($_POST['Logout'])){
    $username=$_COOKIE['Username'];
    setcookie('Username',$username,time()-1);
    header("Location: index.php");
}

// Register Button
if(isset ($_POST['Register'])){
    header("Location: register.php");
}

// Cancel-edit 
if(isset($POST['cancel-edit'])){
    header("Location: index.php");
}

//Edit
$update=false;
if (isset($GET['edit'])){
    $ID=$_GET['edit'];
    $update=true;
    $sql = mysqli_query($db, "SELECT * FROM tbl_users WHERE ID=$ID");
    $row = mysqli_fetch_array($sql);
    if (is_array($row)){
        $ID=$row['ID'];
        $Username=$row['username'];
        $name=$row['Name'];
    }
}

//Update
if(isset($_POST['update'])){
    $ID=$_POST['ID'];
    $Username=$_POST['Username'];
    $Name=$_POST['Name'];
    $sql = "UPDATE tbl_users SET Username='$Username', Name='$Name' WHERE ID='$ID'";
    mysqli_query($db,$sql);
    header("Location: index.php");
}

// Submit Button
if (isset ($_POST['Submit'])){
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    if(empty($username) || empty($password) )
    {
        echo 'Please input Username and Password';
    }

    else
    {
        $sql = "INSERT INTO tbl_user (Username, Name, Password) VALUES ('$username', '$name', '$password')";
        mysqli_query($db, $sql);
        header("Location: index.php");
    }   
}
?>

   
