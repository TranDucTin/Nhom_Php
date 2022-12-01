<?php
session_start();
require '../../connect_DB.php';
if(isset($_POST['them'])) {
    $id=$_POST['CategoryID'];
    $name=$_POST['CategoryName'];
    $Url=$_POST['Url'];
    $CateGroupID=$_POST['CateGroupID'];
    $CategoryDescription=$_POST['CategoryDescription'];
    
    $a = "INSERT INTO `category` (`CategoryID`, `CategoryName`, `CategoryDescription`, `Url`, `CateGroupID`) VALUES ('$id', '$name', '$CategoryDescription', '$Url', '$CateGroupID');";
    $result=mysqli_query($conn, $a);
    header('Location: ./indexCategory.php');
    $_SESSION['response']="Successfully Inserted to the database!";
}
if(isset($_POST['update'])) {
    $id=$_POST['CategoryID'];
    $name=$_POST['CategoryName'];
    $Url=$_POST['Url'];
    $CateGroupID=$_POST['CateGroupID'];
    $CategoryDescription=$_POST['CategoryDescription'];
    
    $a = "UPDATE `category` SET `CategoryName` = '$name', `CategoryDescription` = '$CategoryDescription', `Url` = '$Url', `CateGroupID` = '$CateGroupID' WHERE `category`.`CategoryID` = '$id';";
    $result=mysqli_query($conn, $a);
    header('Location: ./indexCategory.php');
    $_SESSION['response']="Successfully Updated to the database!";
}
?>