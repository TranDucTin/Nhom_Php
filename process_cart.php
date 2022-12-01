<?php 
session_start();
require './connect_DB.php';
switch ($_GET['action']) {
case "add":
    $result = add_cart($conn);
    echo json_encode(
        array(
        'status'=>$result,
        'message'=>"Thêm sản phẩm thành công",
        'fail'=>"Thêm sản phẩm không thành công do không đủ số lượng"
        )
    );
    break;
case "remove":
    $result = remove_cart();
    echo json_encode(
        array(
        'status'=>$result,
        'message'=>"Xóa sản phẩm thành công"
        )
    );
    break;
case "update":
    $result = update($conn);
    echo json_encode(
        array(
        'status'=>$result,
        'message'=>"Thêm sản phẩm thành công",
        'fail'=>"Thêm sản phẩm không thành công do không đủ số lượng"
        )
    );
    break;
default:
    break;
}
function kt($id)
{
    foreach($_SESSION['cart'] as $item){
        if($item[0]==$id) {
            return true;
        }
    }
    return false;
}

function ktQuantity($id,$qty,$conn)
{
    $a="SELECT book.Quantity FROM `book` WHERE BookID='$id'";
    $result=mysqli_query($conn, $a);
    if(mysqli_num_rows($result)!=0) { 
        $row = mysqli_fetch_array($result);
        if($qty<$row[0]) {
            return true;
        }else { 
            return false;
        }
    }
}

function add_cart($conn)
{
    $id=$_POST['BookID'];
    $name=$_POST['BookName'];
    $img=$_POST['Image'];
    $price=$_POST['Price'];
    $quantity=$_POST['Quantity'];
    $dem=0;
    if(isset($_SESSION['cart'])) {
        if(kt($id)==true) {
            $vt=0;
            foreach($_SESSION['cart'] as $item){
                if($item[0]==$id) {
                    if(ktQuantity($id, $_SESSION['cart'][$vt][4], $conn)==true) {
                        $_SESSION['cart'][$vt][4]+=1;
                    }else{
                        return false;
                    }
                }
                $vt++;
            }
        }else{
            $listsp=array($id,$name,$img,$price,$quantity);
            array_push($_SESSION['cart'], $listsp);
        }
    }else{
        $_SESSION['cart']=array();
        $listsp=array($id,$name,$img,$price,$quantity);
        array_push($_SESSION['cart'], $listsp);
    }
    return $_SESSION['cart'];
}
function remove_cart()
{
    $id=$_POST['BookID'];
    $dem=0;
    foreach($_SESSION['cart'] as $item){
        if($item[0]==$id) {
            array_splice($_SESSION['cart'], $dem, 1);
            break;
        }
        $dem++;
    }
    // unset($_SESSION['cart'][5]);
    return true;
}

function update($conn)
{
    foreach ($_POST['quantity'] as $id => $quantity) {
        // code...
        // echo "$id =>$quantity";
        $vt=0;
        foreach($_SESSION['cart'] as $item){
            if($item[0]==$id) {
                if(ktQuantity($id, $quantity-1, $conn)==true) {
                    $_SESSION['cart'][$vt][4] = $quantity;
                }else{
                    return false;
                }
            }
            $vt++;
        }
    }
    return true;

}

?>