<?php 
 include "connection.php";
 $id = "";
 $fname = "";
 $lname = "";
 $email = "";
 $password = "";

 $error = "";
 $success = "";
 if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!isset($_GET['id'])) {
    header("Location:index.php");
    exit;
    }
    $id = $_GET['id'];
    $sql = "select * from users where id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
        header("Location:index.php");
        exit;  
    }
    $fname = $row["fname"];
    $lname = $row["lname"];
    $email = $row["email"];
    $password = $row["password"];
 }else{
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST["lname"];
    $email = $_POST['email'];
    $password = $_POST["password"]; 

    $sql = "update users set fname = '$fname', lname = '$lname', email = '$email', password = '$password' where id = '$id'";
    $result = $conn->query($sql);
    echo "Updated successfully!";
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>
<body>
<div class="navbar">
        <ul>
           <li><a href="index.php">HOME</a></li>
           <li><a href="create.php">ADD USER</a></li>
           <li><a href="#">ABOUT US</a></li>
           <li><a href="#">CONTACT US</a></li>
           <li><a href="#">DESIGN</a></li>
           <li><a href="#">HELP</a></li>
           <li><a href="signUp.php">LOG OUT</a></li>
        </ul>
    </div>
    <h1>Update a User Here</h1>
    <form action="edit.php" method="POST">
        <fieldset>
            <legend>Personal Information</legend>
            <input type="hidden" name="id" value="<?php echo $id ?>"><br>
            First Name:<br>
            <input type="text" name="fname" value="<?php echo $fname ?>"><br>
            Last Name:<br>
            <input type="text" name="lname" value="<?php echo $lname ?>"><br>
            Email:<br>
            <input type="email" name="email" value="<?php echo $email ?>"><br>
            Password:<br>
            <input type="password" name="password" value="<?php echo $password ?>"> <br>
            Gender:<br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="female">Female<br>
            <input type="submit" name="submit" value="Save">
            <button><a href="index.php">Cancel</a></button>
        </fieldset>
    </form>
</body>
</html>