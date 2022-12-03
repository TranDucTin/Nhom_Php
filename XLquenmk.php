<?php
if(!isset($_SESSION)) {
    session_start();
}
require './connect_DB.php';

function ktUserName($username,$conn)
{
    $flag = true;
    $a = "SELECT users.UserName FROM `users`WHERE users.RoleID='RL-003'";
    $result=mysqli_query($conn, $a);
    if(mysqli_num_rows($result)!=0) { 
        while($row = mysqli_fetch_array($result)){
            if($row[0]==$username) {
                $flag = false;
                break;
            }
        }
    }
    return $flag;
}
function getUserIDtoUSerName($username,$conn)
{
    $a = "SELECT users.UserID FROM `users` WHERE users.UserName='$username'";
    $result=mysqli_query($conn, $a);
    $row = mysqli_fetch_array($result);
    return $row[0];
}
if(isset($_POST['submit'])) {

    if(!ktUserName($_POST['Username'], $conn)) {
        $key = rand(100000, 999999);
        $username = $_POST['Username'];
        $_SESSION['key']=$key;
        $_SESSION['username']=$username;
        $UserID = getUserIDtoUSerName($username, $conn);
        $a = "SELECT customer.Email FROM `customer` WHERE customer.UserID='$UserID'";
        $result=mysqli_query($conn, $a);
        $row = mysqli_fetch_array($result);
        $to      = "$row[0]";
        $subject = "Quên mật khẩu";
        $message = "Nhập $key để được cấp lại mật khẩu";
        $header  =  "From:myemail@exmaple.com \r\n";
        $success = mail($to, $subject, $message, $header);
        header('Location: ./Createpassword.php');
    }else{
        $validationUserName = "Không tồn tại tài khoản này";
    }
}
if(isset($_POST['createpass'])) {
    if($_SESSION['key'] == $_POST['key']) {
        $passhash = password_hash($_POST['Passnew'], PASSWORD_DEFAULT);
        $UserID = getUserIDtoUSerName($_SESSION['username'], $conn);
        $a = "UPDATE `users` SET `Password` = '$passhash' WHERE `users`.`UserID` = '$UserID';";
        $result=mysqli_query($conn, $a);
        $_SESSION['res_type']="success";
        $_SESSION['response']="Đổi mật khẩu thành công!";
        header('Location: ./login.php');

    }else{
        $validationkey = "Mã xác nhận không đúng";
    }
}
?>