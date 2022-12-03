<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,
    th,
    td {
        margin: 0 auto;
        border: 1px solid black;
        border-collapse: collapse;
        padding-left: 5px;
    }

    th {
        color: brown;
        background-color: #deb887;
        font-size: 20px;
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
       
        $sql = "SELECT `Ten_sua`,hang_sua.Ten_hang_sua,loai_sua.Ten_loai,Trong_luong,Don_gia,Hinh FROM `sua` JOIN hang_sua on sua.Ma_hang_sua = hang_sua.Ma_hang_sua JOIN loai_sua on loai_sua.Ma_loai_sua = sua.Ma_loai_sua";
        $result = mysqli_query($conn, $sql);
        echo "<table>
              <tr>
              <th colspan='2' height='100px'>THÔNG TIN CÁC SẢN PHẨM</th>
              </tr>

        ";
    if(mysqli_num_rows($result) <>0) {
          
        while ($row = mysqli_fetch_array($result)) {
            $img = $row['Hinh'];  
            echo "<tr>";
            echo "<td width='200px' align='center'>";
            echo "<img src='./img/$img' alt='' srcset='' width='100px' height='100px'>";
            echo"</td>";
            echo "<td>
                <b>".$row['Ten_sua']."</b></br></br>
                <span>Nhà sản xuất: ".$row['Ten_hang_sua'] ."</span></br>
                <span>".$row['Ten_loai']."</span> - ".$row['Trong_luong']." - ".$row['Don_gia']." VNĐ 
            ";
        }
    }
    ?>
</body>

</html>