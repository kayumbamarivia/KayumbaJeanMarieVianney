<?php 
 include "connection.php";
 $id = "";
 $fname = "";
 $lname = "";
 $email = "";

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
 }else{
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST["lname"];
    $email = $_POST['email'];

    $sql = "update users set fname = '$fname', lname = '$lname', email = '$email' where id = '$id'";
    $result = $conn->query($sql);
    if ($result) {
        header('location:index.php');
    } else {
        die(mysqli_error($conn));
    }
    
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <fieldset>
            <legend>Personal Information</legend>
            <input type="hidden" name="id" value="<?php echo $id ?>"><br>
            First Name:<br>
            <input type="text" name="fname" value="<?php echo $fname ?>"><br>
            Last Name:<br>
            <input type="text" name="lname" value="<?php echo $lname ?>"><br>
            Email:<br>
            <input type="email" name="email" value="<?php echo $email ?>"><br>
            Gender:<br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="female">Female<br>
            <input type="submit" name="submit" value="Save">
            <button><a href="index.php">Cancel</a></button>
        </fieldset>
    </form>
</body>
</html>