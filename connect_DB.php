<?php
$server = "localhost";
$username= "root";
$password= "";
$dbname="bookstore";
$conn= mysqli_connect($server, $username, $password, $dbname);
if(!$conn) {
    die("Connecttion failed: " . mysqli_connect_error());
} else { 
    //Khong lam gi ca
} 
?>