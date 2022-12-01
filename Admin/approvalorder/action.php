<?php
session_start();
require '../../connect_DB.php';

function ktQuantity($id,$conn)
{
    $a="SELECT book.Quantity FROM `book` WHERE BookID='$id'";
    $result=mysqli_query($conn, $a);
    if(mysqli_num_rows($result)!=0) { 
        $row = mysqli_fetch_array($result);
        return $row[0];
    }
}
if(isset($_GET['success'])) {
    $id = $_GET['success'];
    echo $id;
    $flag = true;
    // $a = "UPDATE `orders` SET `Status` = 'Đã duyệt' WHERE `orders`.`OrderID` = '$id'";
    // $result=mysqli_query($conn, $a);
    // kt con hang hay kh
    $a = "SELECT book.BookName, orderdetail.Quantity, orderdetail.Price, book.BookID FROM `orderdetail` JOIN `book` ON orderdetail.BookID = book.BookID WHERE orderdetail.OrderID = '$id'";
    $result=mysqli_query($conn, $a);
    if(mysqli_num_rows($result)!=0) { 
        while($row = mysqli_fetch_array($result)){
            if(ktQuantity($row[3], $conn)<$row[1]) {
                $flag = false;
                break;
            }
        }
    }

    
    if($flag) {
        // update bảng orders sang đã duyệt
        $a = "UPDATE `orders` SET `Status` = 'Đã duyệt' WHERE `orders`.`OrderID` = '$id'";
        $result=mysqli_query($conn, $a);
        // trừ số lượng tồn và cộng số lượng đã bán của từng sách
        $a = "SELECT book.BookName, orderdetail.Quantity, orderdetail.Price, book.BookID, book.TotalSell FROM `orderdetail` JOIN `book` ON orderdetail.BookID = book.BookID WHERE orderdetail.OrderID = '$id'";
        $result=mysqli_query($conn, $a);
        if(mysqli_num_rows($result)!=0) { 
            while($row = mysqli_fetch_array($result)){
                $soluongton = ktQuantity($row[3], $conn) - $row[1];
                $soluongban = $row[4] + $row[1];
                $sach = "UPDATE `book` SET `Quantity` = '$soluongton', `TotalSell` = '$soluongban' WHERE `book`.`BookID` = '$row[3]'";
                $resultsach=mysqli_query($conn, $sach);
            }
        }
        header('Location: ./index.php');
        $_SESSION['res_type']="success";
        $_SESSION['response']="Duyệt đơn thành công!";
    }else{
        header('Location: ./index.php');
        $_SESSION['res_type']="danger";
        $_SESSION['response']="Không thể duyệt vì số lượng sách trong kho không đủ!";
    }
}
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $a = "UPDATE `orders` SET `Status` = 'Đã hủy' WHERE `orders`.`OrderID` = '$id'";
    $result=mysqli_query($conn, $a);
    header('Location: ./index.php');
    $_SESSION['response']="Hủy đơn thành công!";
    $_SESSION['res_type']="success";
}

?>