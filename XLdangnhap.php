<?php
if (isset($_POST['submit'])) {
    //Kết nối tới database
    include './connect_DB.php';
     
    //Lấy dữ liệu nhập vào
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    if (!$username && !$password) {
        $validationUserName="Tên đăng nhập không được để trống";
        $validationPassWord="Mật khẩu không được để trống";
    }
    if(!$username) {
        $validationUserName="Tên đăng nhập không được để trống";
    }else{
        if(!$password) {
            $validationPassWord="Mật khẩu không được để trống";
        }else{
            //code dang nhap o day
            $query = "SELECT * FROM Users JOIN customer ON users.UserID = customer.UserID WHERE UserName='$username' and RoleID='RL-003'";
            $resultLogin=mysqli_query($conn, $query);
            if (mysqli_num_rows($resultLogin) == 0) {
                $validationUserName="Tên đăng nhập không tồn tại";
            }else{
                $row = mysqli_fetch_array($resultLogin);
                if($row['Password']==$password) {
                    session_start();
                    $_SESSION['user']=array($row['CustomerName'],$row['PhoneNumber'],$row['Email'],$row['CustomerAddress']);
                    header('Location: ./index.php');
                }else{
                    $validationPassWord="Mật khẩu sai rồi nha";
                }
            }
        }
    }
     
    
}

?>