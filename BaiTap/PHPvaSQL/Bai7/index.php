<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin các sản phẩm</title>
</head>
<style>
body {
    max-width: 100vh;
    margin: 0 auto;
}


.header {
    color: orange;
    background-color: lightyellow;
    padding: 5px;
    font-weight: bold;
    text-align: center;
}

td {
    border: 1px solid black;
}

ul {
    list-style-type: none;
}
</style>

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
    $query = "SELECT Ma_sua,Ten_sua,Trong_luong,Don_gia,Hinh FROM sua";
    $result = mysqli_query($conn, $query);
    ?>
    <form method="get">
        <table>
            <tr>
                <td colspan="5" class="header">THÔNG TIN CÁC SẢN PHẨM</td>
            </tr>
            <?php
            if(mysqli_num_rows($result)>0) {       
                $sosp1hang = 5;
                $sohang = 0;
                $dem = 0;
                while ($row=mysqli_fetch_row($result)){
                    if($dem == $sosp1hang) {
                        echo "<tr>";
                    }
                    echo "<td>
                    <ul align='center'>
                        <li><a href='detail.php?id=$row[0]'><b>$row[1]</b></a></li>
                        <li>$row[2] gr - $row[3] VNĐ</li>
                        <li><img src='./img/$row[4]' height='100px''</li>'
                    </ul>
                    </td>";
                    if($dem == $sosp1hang -1) {
                        echo '</tr>';
                        $dem = 0;
                    }
                    else { $dem +=1;
                    }
                }
            }?>
        </table>
    </form>
    <a href="../../../index.php">Trở về</a>
</body>

</html>
