<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body style="max-width: 800px; margin: 0 auto">
    <?php
    $server = "localhost";
    $username= "root";
    $password= "";
    $dbname="quan_li_ban_sua";
    $conn= mysqli_connect($server, $username, $password, $dbname);
    if(!$conn) {
        die("Connecttion failed: " . mysqli_connect_error());
    } else { echo "Ket noi thanh cong<br>";
    } $query="SELECT * FROM hang_sua";
    $result=mysqli_query($conn, $query);
    echo "
    <table border='1'>
      <tr>
        <th colspan='5'>THÔNG TIN HANG SUA</th>
      </tr>
      "; 
    if(mysqli_num_rows($result)!=0) { 
        echo  "<tr>
                <th>Mã HS</th>
                <th>Tên hãng sữa</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
                <th>Email</th>
            </tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            for ($i=0; $i <mysqli_num_fields($result); $i++) { 
                echo "<td>".$row[$i]."</td>";
            } 
            echo "</tr>"; 
        }
    } echo "</table>"; 
    ?>
    <a href="../../../index.php">Trở về</a>
  </body>
</html>
