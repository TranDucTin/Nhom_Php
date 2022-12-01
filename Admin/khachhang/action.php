<?php
session_start();
require '../../connect_DB.php';
if(isset($_POST['update'])) {
    $id=$_POST['CustomerID'];
    $CustomerAddress=$_POST['CustomerAddress'];
    $Gender=$_POST['Gender'];
    $Birth=$_POST['Birth'];
    $PhoneNumber=$_POST['PhoneNumber'];
    $Email=$_POST['Email'];
    $CustomerName=$_POST['CustomerName'];
    $a = "UPDATE `customer` SET `CustomerAddress` = '$CustomerAddress', `CustomerName` = '$CustomerName', `Gender` = b'$Gender', `Birth` = '$Birth', `PhoneNumber` = '$PhoneNumber', `Email` = '$Email' WHERE `customer`.`CustomerID` = '$id'";
    $result=mysqli_query($conn, $a);
    header('Location: ./indexCus.php');
    $_SESSION['response']="Successfully Updated to the database!";
}
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $a = "DELETE FROM `customer` WHERE `customer`.`CustomerID` = '$id'";
    $result=mysqli_query($conn, $a);
    header('Location: ./indexCus.php');
    $_SESSION['response']="Successfully Deleted to the database!";

}
?>