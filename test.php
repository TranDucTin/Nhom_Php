<?php
session_start();
// if(isset($_SESSION['cart'])) {
//     // var_dump($_SESSION['cart']);
//     // echo json_encode($_SESSION['cart']);
//     foreach($_SESSION['cart'] as $item){
//         var_dump($item);
//     }
// }else{
//     echo 'chua co ma oi'
//     ;
// }
require './connect_DB.php';
// function ktQuantity($id,$qty,$conn)
// {
//     $a="SELECT book.Quantity FROM `book` WHERE BookID='$id'";
//     $result=mysqli_query($conn, $a);
//     if(mysqli_num_rows($result)!=0) { 
//         $row = mysqli_fetch_array($result);
//         if($qty<=$row[0]) {
//             echo true;
//         }else { 
//             echo false;
//         }
//     }
// }
// echo ktQuantity('BK-00001', 9, $conn);
// echo $_SESSION['cart'][1][4];


// function kt($id)
// {
//     foreach($_SESSION['cart'] as $item){
//         if($item[0]==$id) {
//             return true;
//         }
//     }
//     return false;
// }

// echo kt('BK-000dfg01');
// echo $_SESSION['cart']['BK-00001'][4];
// $a='SELECT OrderID FROM Orders  ORDER BY OrderID DESC  LIMIT 1';
// $result=mysqli_query($conn, $a);
// if(mysqli_num_rows($result)!=0) {
//     $row = mysqli_fetch_array($result);
// }
// // echo $row[0];
// $dau = substr($row[0], 3);
// $dau++;
// echo "$dau";
// function getOrderID($conn)
// {
//     $a='SELECT OrderID FROM orders  ORDER BY OrderID DESC  LIMIT 1';
//     $result=mysqli_query($conn, $a);
//     if(mysqli_num_rows($result)!=0) {
//         $row = mysqli_fetch_array($result);
//     }
//     $dau = substr($row[0], 3);
//     $dau++;
//     return "OD-".$dau;
// }
// echo getOrderID($conn);
// $time = time();
// echo date("Y/m/d");
// var_dump($_SESSION['cart']);
// function getCusID($conn,$id)
// {
//     $a="SELECT CustomerID FROM customer where UserID='$id'";
//     $result=mysqli_query($conn, $a);
//     if(mysqli_num_rows($result)!=0) {
//         $row = mysqli_fetch_array($result);
//     }
//     return $row[0];
// }
// echo getCusID($conn, 'US-004');

// function getBookID($conn)
// {
//     $a='SELECT BookID FROM book  ORDER BY BookID DESC  LIMIT 1';
//     $result=mysqli_query($conn, $a);
//     if(mysqli_num_rows($result)!=0) {
//         $row = mysqli_fetch_array($result);
//     }
//     $dau = substr($row[0], 3);
//     $dau++;
//     return "BK-".$dau;
// }
// echo getBookID($conn);

// function ktQuantity($id,$conn)
// {
//     $a="SELECT book.Quantity FROM `book` WHERE BookID='$id'";
//     $result=mysqli_query($conn, $a);
//     if(mysqli_num_rows($result)!=0) { 
//         $row = mysqli_fetch_array($result);
//         return $row[0];
//     }
// }

// echo ktQuantity('BK-00001', $conn);
// function getReViewID($conn)
// {
//     $a='SELECT ReviewID FROM review  ORDER BY ReviewID DESC  LIMIT 1';
//     $result=mysqli_query($conn, $a);
//     if(mysqli_num_rows($result)!=0) {
//         $row = mysqli_fetch_array($result);
//     }
//     $dau = substr($row[0], 3);
//     $dau++;
//     return "RV-".$dau;
// }
// echo getReViewID($conn);
// function getCusID($usID,$conn)
// {
//     $a = "SELECT customer.CustomerID FROM `customer` JOIN users ON customer.UserID = users.UserID WHERE users.UserID='$usID'";
//     $result=mysqli_query($conn, $a);
//     if(mysqli_num_rows($result)!=0) {
//         $row = mysqli_fetch_array($result);
//     }
//     return $row[0];
// }
// echo getCusID('US-003', $conn);
// echo password_hash(123456, PASSWORD_DEFAULT);
// function getUserID($conn)
// {
//     $a='SELECT UserID FROM users  ORDER BY UserID DESC  LIMIT 1';
//     $result=mysqli_query($conn, $a);
//     if(mysqli_num_rows($result)!=0) {
//                 $row = mysqli_fetch_array($result);
//     }
//     $dau = substr($row[0], 3);
//     $dau++;
//     return "US-".$dau;
// }
// echo getUserID($conn);
// $to      = "minhhuytruong09@gmail.com";
// $subject = "Quên mật khẩu";
// $message = "Nội dung email";
// $header  =  "From:myemail@exmaple.com \r\n";

// $success = mail($to, $subject, $message, $header);

// if($success == true ) {
//     echo "Đã gửi mail thành công...";
// }
// else
// {
//       echo "Không gửi đi được...";
// }
$key = rand(100000, 999999);
echo $key;
?>