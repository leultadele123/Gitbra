<?php

include('config.php');

if(isset($_POST['submit'])){
    $fr_name=$_POST['fname'];
    $la_name=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
}
$sql="INSERT INTO users (fname, lname, email, password) VALUES ( '$fr_name', '$la_name', '$email', '$password')";
if($sql){
    echo "successfully inserted";
}
else{
    die(mysqli_error($con));
}
?>
<html>
<head>
    <title>Dgggt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Signup Here</h1>
        <form action="" method="POST">
            <label>First name</label><br>
            <input type="text" name="fname" placeholder="Enter First name"><br>
            <label>Last name</label><br>
            <input type="text" name="lname" placeholder="Enter Last name"><br>
            <label>Email</label><br>
            <input type="text" name="email" placeholder="Enter Email"><br>
            <label>Password</label><br>
            <input type="text" name="password" placeholder="Enter Password"><br>
            <label>Gender</label><br>
            <input type="radio" name="male" value="male">male<br>
            <input type="radio" name="female" value="female">female
            <br><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
</body>
</html>