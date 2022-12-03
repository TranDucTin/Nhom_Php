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
        font-size: 25px;
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
        $sql1 = 'select * from loai_sua';
        $sql2 = 'select * from hang_sua';
        $query1 = mysqli_query($conn, $sql1);
        $query2 = mysqli_query($conn, $sql2);
    if(isset($_POST['submit'])) {
        $tensua =  $_POST['tensua'];
        $tenloai = $_POST['tenloai'];
        $tenhang = $_POST['tenhang'];
        $sql = "Select * from sua join loai_sua on loai_sua.Ma_loai_sua = sua.Ma_loai_sua join hang_sua on hang_sua.Ma_hang_sua = sua.Ma_hang_sua where Ten_sua like N'%$tensua%' and Ten_hang_sua like N'%$tenhang%' and Ten_loai like N'%$tenloai%' ";
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
                <td colspan="2" class='td'>Loại sữa:
                    <select name="tenloai" id="">
                        <?php 
                        if(mysqli_num_rows($query1)) {
                            while($row1= mysqli_fetch_array($query1)){
                                    echo "<option value='".$row1['Ten_loai']."'";
                                if(isset($tenloai) and $row1['Ten_loai'] == $tenloai) { echo " selected";
                                } else { echo "";
                                }
                                    echo ">".$row1['Ten_loai']."</option>";
                            }
                        }
                        ?>
                    </select>
                    <select name="tenhang" id="">
                        <?php 
                        if(mysqli_num_rows($query2)) {
                            while($row2= mysqli_fetch_array($query2)){
                                    echo "<option value='".$row2['Ten_hang_sua']."'";
                                if(isset($tenhang) and $row2['Ten_hang_sua'] == $tenhang) { echo " selected";
                                } else { echo "";
                                }
                                    echo ">".$row2['Ten_hang_sua']."</option>";
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" class='td'>Tên sữa: &nbsp; <input type="text" name="tensua" value="<?php if(isset($tensua)) { echo $tensua; 
} ?>"> <input type="submit" name="submit" value="Tìm kiếm"> <input type="submit" name="reset" value="Xóa">
                </td>
            </tr>
            <tr>
                <td colspan="2" class='td'><?php if(isset($count) and $count <> 0) { echo "<h3>Có $count sản phẩm tìm được</h3>"; 
} else { echo "<h3>Không tìm thấy sản phẩm nào<h3>";
                                           } ?></td>
            </tr>
            <?php 
            if(isset($_POST['submit']) or isset($_POST['reset'])) {
                if($count <> 0) {
                    echo "<tr><td><table align='center'>";
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
</body>

</html>