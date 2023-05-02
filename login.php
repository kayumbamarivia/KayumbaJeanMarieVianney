<?php 
include 'connection.php';

if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = md5($_POST['password']);//you can also use sha1 but md5 is more higly secure
  
  $sql = "SELECT * FROM users WHERE email='$email'";
  $result=$conn->query($sql);
  if($result->num_rows>0){
   $row=mysqli_fetch_assoc($result);
$storedPassword=$row['password'];
if($storedPassword==$password){
    header('location:index.php');
}
else{
    echo "Invalid email or password";
}

  }
  else{
    echo "Invalid email or password";
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
    <h1>Login Here</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            Email:<br>
            <input type="email" name="email"><br>
            Password:<br>
            <input type="password" name="password"><br>
            <input type="submit" name="submit" value="Login">
        </fieldset>
    </form>
</body>
</html>
