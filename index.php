<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>
<body>
   <div class="container">
    <div class="navbar">
        <ul>
           <li><a href="index.php">HOME</a></li>
           <li><a href="create.php">ADD USER</a></li>
           <li><a href="#">ABOUT US</a></li>
           <li><a href="#">CONTACT US</a></li>
           <li><a href="pdf.php">PDF DOC</a></li>
           <li><a href="csv.php">DOWNLOAD</a></li>
           <li><a href="signUp.php">LOG OUT</a></li>
        </ul>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>FIRST NAME</th>
                <th>SECOND NAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>GENDER</th>
                <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include "connection.php";
             $sql = "select * from users";
             $result = $conn->query($sql);
             if (!$result) {
                 die("Invalid query");
             }
             while($row=$result->fetch_assoc()){
                 echo"
             <tr>
               <td>$row[id]</td>
               <td>$row[fname]</td>
               <td>$row[lname]</td>
               <td>$row[email]</td>
               <td>$row[password]</td>
               <td>$row[gender]</td>
               <td>
               <a href='edit.php?id=$row[id]'>Edit</a>
               <a href='delete.php?id=$row[id]'>Delete</a>
               </td>
             </tr>
             ";
             }
    ?>
        </tbody>
    </table>
   </div> 
</body>
</html>