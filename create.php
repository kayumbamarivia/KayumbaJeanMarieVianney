<?php 
 include "connection.php";
 if(isset($_POST['submit'])){
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $gender = $_POST['gender'];
    $sql = "INSERT INTO users (fname, lname, email, password, gender) VALUES ('$first_name', '$last_name', '$email', '$password', '$gender')";
    $result = $conn->query($sql);
    
    if ($result == true) {
        echo "<br>User is added successfully!";
    } else {
        echo "Erro:".$sql."<br>".$conn->error;
    }
    $conn->close();
    
    // $query=$conn->stmt_init(); //INITIATE
    // if($query->prepare("INSERT INTO crud1(name,email,phone)VALUES(?,?,?)")){
    // $query->bind_param('ssi',$name,$email,$phone);//BIND THE ? TO THES VARIABLES
    // $query->execute();//NOW EXECUTE THEM
    // echo "A New User is Inserted Successfully!";
// }
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
    <h1>Add a New User</h1>
    <form action="create.php" method="POST">
        <fieldset>
            <legend>Personal Information</legend>
            First Name:<br>
            <input type="text" name="fname"><br>
            Last Name:<br>
            <input type="text" name="lname"><br>
            Email:<br>
            <input type="email" name="email"><br>
            Password:<br>
            <input type="password" name="password"> <br>
            Gender:<br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="female">Female<br>
            <input type="submit" name="submit" value="Save">
            <button><a href="index.php">Cancel</a></button>
        </fieldset>
    </form>
</body>
</html>