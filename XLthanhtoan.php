<?php 
require './connect_DB.php';
session_start();
function getCusID($conn,$id)
{
    $a="SELECT CustomerID FROM customer where UserID='$id'";
    $result=mysqli_query($conn, $a);
    if(mysqli_num_rows($result)!=0) {
        $row = mysqli_fetch_array($result);
    }
    return $row[0];
}
function getOrderID($conn)
{
    $a='SELECT OrderID FROM orders  ORDER BY OrderID DESC  LIMIT 1';
    $result=mysqli_query($conn, $a);
    if(mysqli_num_rows($result)!=0) {
        $row = mysqli_fetch_array($result);
    }
    $dau = substr($row[0], 3);
    $dau++;
    return "OD-".$dau;
}
if(isset($_POST['submit'])) {
    $id = getOrderID($conn);
    $tenkh=$_POST['tenkh'];
    $sdt=$_POST['sdt'];
    $diachi=$_POST['address'];
    $orderbydate = date("Y/m/d");
    $status = "Chờ duyệt";
    $note = $_POST['note'];
    $total=0;
    foreach($_SESSION['cart'] as $item){
        $total=$total+($item[3]*$item[4]);
    }
    $cusid=getCusID($conn, $_SESSION['user'][4]);
    $pay = $_POST['payment'];
    $a = "INSERT INTO `orders` (`OrderID`, `Address`, `OrderByDate`, `Status`, `Notes`, `Total`, `CustomerID`, `PaymentID`, `sdt`, `tenkh`) VALUES ('$id', '$diachi', '$orderbydate', '$status', '$note', '$total', '$cusid', '$pay', '$sdt', '$tenkh')";
    $result=mysqli_query($conn, $a);
    foreach($_SESSION['cart'] as $item){
        $bookid = $item[0];
        $soluong = $item[4];
        $gia = $item[3];
        $a = "INSERT INTO `orderdetail` (`Quantity`, `Price`, `OrderID`, `BookID`) VALUES ('$soluong', '$gia', '$id', '$bookid')";
        $result=mysqli_query($conn, $a);
    }
    header('Location: ./payment_success.php');
}

?>