<?php 
require './connect_DB.php';
session_start();
function getReViewID($conn)
{
    $a='SELECT ReviewID FROM review  ORDER BY ReviewID DESC  LIMIT 1';
    $result=mysqli_query($conn, $a);
    if(mysqli_num_rows($result)!=0) {
        $row = mysqli_fetch_array($result);
    }
    $dau = substr($row[0], 3);
    $dau++;
    return "RV-".$dau;
}
function getCusID($usID,$conn)
{
    $a = "SELECT customer.CustomerID FROM `customer` JOIN users ON customer.UserID = users.UserID WHERE users.UserID='$usID'";
    $result=mysqli_query($conn, $a);
    if(mysqli_num_rows($result)!=0) {
        $row = mysqli_fetch_array($result);
    }
    return $row[0];
}
if(isset($_POST['submit'])) {
    $id = getReViewID($conn);
    $create = date("Y/m/d");
    $content = $_POST['noidung'];
    $idCus = getCusID($_SESSION['user'][4], $conn);
    $a = "INSERT INTO `review` (`ReviewID`, `ReviewByDate`, `Content`, `BookID`, `CustomerID`) VALUES ('$id', '$create', '$content', 'BK-00001', '$idCus')";
    $result=mysqli_query($conn, $a);
    header('Location: ./index.php');
}
?>