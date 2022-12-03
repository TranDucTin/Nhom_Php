<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
        background-color: lightyellow;
    }

    th {
        color: brown;
        background-color: bisque;
        font-size: 15px;
    }

    table tr td {
        border: 2px solid black;
        padding: 1%;
    }

    .td {
        text-align: center;
        background-color: pink;
    }
    </style>
</head>

<body>
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
    if(isset($_POST['submit'])) {
        
        $tensua =  $_POST['tensua'];
        $sql = "Select * from sua join Hang_sua on hang_sua.Ma_hang_sua = sua.Ma_hang_sua where Ten_sua like N'%$tensua%'";
        $query = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($query);
    }
    if(isset($_POST['reset'])) {
        $tensua="";
        $sql = "Select * from sua join Hang_sua on hang_sua.Ma_hang_sua = sua.Ma_hang_sua where Ten_sua like N'%$tensua%'";
        $query = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($query);
    }
    ?>
    <form action="" method="post">
        <table align="center">
            <tr>
                <td colspan="2" class='td'>
                    <h1>Tìm kiếm thông tin sữa</h1>
                </td>
            </tr>
            <tr>
                <td colspan="2" class='td'>Tên sữa: &nbsp; <input type="text" name="tensua" value="<?php if(isset($tensua)) { echo $tensua; 
} ?>"> <input type="submit" name="submit" value="Tìm kiếm"> <input type="submit" name="reset" value="Xóa">
                </td>
            </tr>
            <tr>
                <td colspan="2" class='td'><?php if(isset($count) and $count <> 0) { echo "Có $count sản phẩm tìm được"; 
} else { echo "Không tìm thấy sản phẩm nào";
                                           } ?></td>
            </tr>
            <?php 
            if(isset($_POST['submit']) or isset($_POST['reset'])) {
                if($count <> 0) {
                    echo "<tr><td><table  align='center'>";
                    if(mysqli_num_rows($query) <> 0) {
                        while ( $row = mysqli_fetch_array($query)){
                            echo "<tr >";
                            echo "<th colspan='2' style='border:2px solid black'>".$row['Ten_sua']." - ".$row['Ten_hang_sua']."</th>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td style='text-align: center; width: 200px'>";
                            ?>
            <img width="60%" height="80%" src="./img/<?php echo $row['Hinh']; ?>">
                            <?php
                            echo "</td>";
                            echo "<td><b>Thành phần dinh dưỡng: </b><br>".$row['TP_Dinh_Duong'];
                            echo "<br><b>Lợi ích: </b><br>".$row['Loi_ich'];
                            echo "<br><b>Trọng lượng: </b>".$row['Trong_luong']." gr - "."<b>Đơn giá: </b>".$row['Don_gia']."</td>";
                            echo "</tr>";
                        }
                    }
                    echo "</table></td></tr>";
                }
            }
            ?>
        </table>
    </form>
    <a href="../../../index.php">Trở về</a>
</body>

</html>
