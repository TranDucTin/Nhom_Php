<?php
if (isset($_POST['submit'])) {
    //Kết nối tới database
    include '../connect_DB.php';
     
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
            $query = "SELECT UserName,Password FROM Users WHERE UserName='$username' and RoleID='RL-001'";
            $resultLogin=mysqli_query($conn, $query);
            if (mysqli_num_rows($resultLogin) == 0) {
                $validationUserName="Tên đăng nhập không tồn tại";
            }else{
                $row = mysqli_fetch_array($resultLogin);
                if($row['Password']==$password) {
                    session_start();
                    $_SESSION['admin']="$username";
                    header('Location: ./home/index.php');
                }else{
                    $validationPassWord="Mật khẩu sai rồi nha";
                }
            }
        }
    }
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    // if (!$username && !$password) {
    //     $validationUserName="Tên đăng nhập không được để trống";
    //     $validationPassWord="Mật khẩu không được để trống";
    // }else{
    //     // $query = mysql_query("SELECT UserName,Password FROM Users WHERE UserName='$username'");
    //     // //Kiểm tra tên đăng nhập có tồn tại không
    //     // if (mysql_num_rows($query) == 0) {
    //     //     echo "Tên đăng nhập này không tồn tại.";
    //     //     exit;
    //     // }
    // }
     
    
     
    // //Lấy mật khẩu trong database ra
    // $row = mysql_fetch_array($query);
     
    // //So sánh 2 mật khẩu có trùng khớp hay không
    // if (!password_verify($pass, $row['pass'])) {
    //     echo "Mật khẩu không đúng. Vui lòng nhập lại";
    //     exit;
    // }else{

    // }
     
    // //Lưu tên đăng nhập
    // $_SESSION['username'] = $username;
    // echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='/'>Về trang chủ</a>";
    // die();
}

?>