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
function ktQuantity($id,$qty,$conn)
{
    $a="SELECT book.Quantity FROM `book` WHERE BookID='$id'";
    $result=mysqli_query($conn, $a);
    if(mysqli_num_rows($result)!=0) { 
        $row = mysqli_fetch_array($result);
        if($qty<=$row[0]) {
            echo true;
        }else { 
            echo false;
        }
    }
}
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
echo $_SESSION['cart']['BK-00001'][4];
?>