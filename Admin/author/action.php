<?php
session_start();
require '../../connect_DB.php';
if(isset($_POST['them'])) {
    $id=$_POST['AuthorID'];
    $name=$_POST['AuthorName'];
    $sdt=$_POST['PhoneNumber'];
    $Url=$_POST['Url'];
    
    $a = "INSERT INTO `author` (`AuthorID`, `AuthorName`, `PhoneNumber`, `Url`) VALUES ('$id', '$name', '$sdt', '$Url')";
    $result=mysqli_query($conn, $a);
    header('Location: ./indexAuthor.php');
    $_SESSION['response']="Successfully Inserted to the database!";
}
if(isset($_POST['update'])) {
    $id=$_POST['AuthorID'];
    $name=$_POST['AuthorName'];
    $sdt=$_POST['PhoneNumber'];
    $Url=$_POST['Url'];
    
    $a = "UPDATE `author` SET `AuthorName` = '$name', `PhoneNumber` = '$sdt', `Url` = '$Url' WHERE `author`.`AuthorID` = '$id';";
    $result=mysqli_query($conn, $a);
    header('Location: ./indexAuthor.php');
    $_SESSION['response']="Successfully Updated to the database!";
}
?>