<?php

$host="localhost";
$username="root";
$password="";
$dbname="mydb";

$con=mysqli_connect($host,$username,$password,$dbname);
if($con->connect_error){
    die("connection failed" .$con->connect_error);
    }
?>