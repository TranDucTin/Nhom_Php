<?php 
session_start();
require './connect_DB.php';
function getUserID($conn)
{
    $a='SELECT UserID FROM users  ORDER BY UserID DESC  LIMIT 1';
    $result=mysqli_query($conn, $a);
    if(mysqli_num_rows($result)!=0) {
                $row = mysqli_fetch_array($result);
    }
    $dau = substr($row[0], 3);
    $dau++;
    return "US-".$dau;
}
function getCusID($conn)
{
    $a='SELECT CustomerID FROM customer  ORDER BY CustomerID DESC  LIMIT 1';
    $result=mysqli_query($conn, $a);
    if(mysqli_num_rows($result)!=0) {
                $row = mysqli_fetch_array($result);
    }
    $dau = substr($row[0], 3);
    $dau++;
    return "CS-".$dau;
}
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
    $idUser = getUserID($conn);
    $username = $_POST['Username'];
    $pass = $_POST['Password'];
    // echo $_POST['ConfirmPassword'];
    $CreatedByDate = date("Y/m/d");
    $idCus = getCusID($conn);
    $CustomerAddress = $_POST['Address'];
    $Gender = $_POST['Gender'];
    $Birth = $_POST['Birth'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Email = $_POST['Email'];
    $CustomerName = $_POST['CustomerName'];
    if($_POST['Password']==$_POST['ConfirmPassword']) {
        if(ktUserName($_POST['Username'], $conn)) {
            $passhash = password_hash($pass, PASSWORD_DEFAULT);
            $a = "INSERT INTO `users` (`UserID`, `UserName`, `Password`, `CreatedByDate`, `RoleID`) VALUES ('$idUser', '$username', '$passhash', '$CreatedByDate', 'RL-003')";
            $result=mysqli_query($conn, $a);
            $a = "INSERT INTO `customer` (`CustomerID`, `CustomerAddress`, `CustomerName`, `Gender`, `Birth`, `PhoneNumber`, `Email`, `UserID`) 
            VALUES ('$idCus', '$CustomerAddress', '$CustomerName', b'$Gender', '$Birth', '$PhoneNumber', '$Email', '$idUser')";
            $result=mysqli_query($conn, $a);
            header('Location: ./login.php');
            $_SESSION['res_type']="success";
            $_SESSION['response']="Đăng kí thành công!";
        }else{
            $validateusername = "Tên đăng nhập đã tồn tại";
        }
    }else{
        $validatepass = "Mật khẩu không khớp";
    }

}

?>