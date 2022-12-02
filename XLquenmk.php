<?php
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
if(isset($_POST['submit'])) {
    $username = $_POST['Username'];
    if(!ktUserName($username, $conn)) {
    }else{
        $validationUserName = "Không tồn tại tài khoản này";
    }
}
?>