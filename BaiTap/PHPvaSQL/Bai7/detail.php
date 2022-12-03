<?php
$server = "localhost";
$username= "root";
$password= "";
$dbname="quan_li_ban_sua";
$conn= mysqli_connect($server, $username, $password, $dbname);
if(!$conn) {
    die("Connecttion failed: " . mysqli_connect_error());
} else { echo "Ket noi thanh cong<br>";
}
if(!isset($_GET['id'])) {
    header("Location:../Bai2/2_7.php");
}
    $id = $_GET['id'];
    $query = "SELECT a.Ten_sua,b.Ten_hang_sua,a.TP_Dinh_Duong,a.Loi_ich,a.Trong_luong,a.Don_gia,a.Hinh FROM sua a JOIN hang_sua b ON a.Ma_hang_sua = b.Ma_hang_sua where Ma_sua = '$id'";
    $result = mysqli_query($conn, $query);
    $row=mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
</head>
<style>
body {
    max-width: 500px;
    margin: 0 auto;
}

table {
    width: 600px;
}

.header {
    font-size: 25px;
    color: #f96409;
    padding: 5px;
    font-weight: bold;
    text-align: center;
}

ul {
    list-style-type: none;
    margin: 10px 0 10px -35px;
    padding-right: 5px;
}

img {
    height: 150px;
}
</style>

<body>
    <form action="">
        <table border="1">
            <trclass="header">
                <td colspan="2"><?php echo "$row[0] - $row[1]" ?></td>
                </trclass=>
                <tr>
                    <td><img src="<?php echo "./img/$row[6]" ?>" alt=""></td>
                    <td>
                        <ul>
                            <li><b><i>Thành phần dinh dưỡng:</i></b></li>
                            <li><?php echo $row[2] ?></li>
                            <li><b><i>Thành phần dinh dưỡng:</i></b></li>
                            <li><?php echo $row[3] ?></li>
                            <li>
                                <?php echo "<b><i>Trọng lượng: </i></b>$row[4] gr - <b><i>Đơn giá: </i></b>$row[5] VNĐ" ?>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><a href='./index.php'>Quay về</a></td>
                    <td></td>
                </tr>
                <?php

                ?>
        </table>
    </form>
</body>

</html>