<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
  </head>
  <body style="max-width: 800px; margin: 0 auto">
    <?php
    $server = "localhost";
    $username= "root";
    $password= "";
    $dbname="quan_li_ban_sua";
    $conn= mysqli_connect($server,$username,$password,$dbname);
    if(!$conn){
        die("Connecttion failed: " . mysqli_connect_error());
    } else echo "Ket noi thanh cong<br>"; $query="SELECT * FROM khach_hang";
    $result=mysqli_query($conn, $query);
    echo "
    <table border='1'>
      <tr>
        <th colspan='5'>THÔNG TIN HANG SUA</th>
      </tr>
      "; 
      if(mysqli_num_rows($result)!=0){ 
        echo  "<tr>
                <th>Mã KH</th>
                <th>Tên khack hang</th>
                <th>Gioi tinh</th>
                <th>Dia chi</th>
                <th>So dien thoai</th>
            </tr>";
        while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row["Ma_khach_hang"]."</td>";
        echo "<td>".$row["Ten_khach_hang"]."</td>";
        //echo "<td>".$row["Phai"]."</td>";
        if ($row["Phai"]==0) {
            echo "<td>
            <div class='anh'>
            <img src='./img/nam.png' />
          </div>
            </td>";
        }else{
            echo "<td>
            <div class='anh'>
            <img src='./img/nu.jpg' />
          </div>
            </td>";
        }
        echo "<td>".$row["Dia_chi"]."</td>";
        echo "<td>".$row["Dien_thoai"]."</td>";
        echo "</tr>"; 
        }
    } echo "</table>"; 
    ?>
  </body>
</html>
