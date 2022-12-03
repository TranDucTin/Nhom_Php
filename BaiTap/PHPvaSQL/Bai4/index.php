<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
    tr:nth-child(even) {
        background-color: #ffa756;
    }
    </style>
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
    $sql ="select  Ma_sua , ten_sua , Trong_luong , Don_gia from sua";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) <>0) {
        $rowsPerPage =5; // So mau tin tren moi trang , trong truong hop nay cho bang 5
        if (!isset($_GET['page']) ) {
            $_GET['page']= 1;
        }
        // Vi tri cua mau tin dau tien tren moi trang
        $offset =($_GET['page'] -1) * $rowsPerPage ;
        // Lay $rowsPerPage mau tin , bat dau tu vi tri $offset
        $query ="Select Ma_sua , ten_sua , Trong_luong , Don_gia from  sua  LIMIT  $offset,$rowsPerPage ";
        $result = mysqli_query($conn, $sql);
        $result1 = mysqli_query($conn, $query);
        echo "<p style='text-align:center;color:brown'>THONG TIN SUA</p>"
        ;
        echo "<table  align ='center' width = '700' border = '1' cellpadding
='2' style ='border-collapse : collapse '>";
        echo '<tr ><th width ="50" > STT </th >
 <th width ="50" > Ma Sua </th >
<th width ="150" > Ten Sua </th >
<th width ="200" > Trong Luong </th > </tr >';
        if(mysqli_num_rows($result) <>0) {
            $stt =($_GET['page']-1)*5;
            while ($rows = mysqli_fetch_row($result1)) {

                echo "<tr >";
                echo "<td >".++$stt."</td >";
                echo "<td > $rows[0] </td >";
                echo "<td > $rows[1] </td >";
                echo "<td > $rows[2] </td >";
                echo " </tr >";
            }
            echo "</table>";
        }
        // Tong so mau tin can hien thi
        $numRows = mysqli_num_rows($result);
        // Tinh tong so trang
        $maxPage = ceil($numRows / $rowsPerPage);
        //echo $numRows;
    }
    ?>
    <div style="text-align: center">
        <?php
        $re = mysqli_query($conn, 'select * from sua');
        $numRows = mysqli_num_rows($re);
        $maxPage = floor($numRows/$rowsPerPage) + 1;
        if ($_GET['page'] > 1) {
            echo "<a href=" .$_SERVER['PHP_SELF']."?page=".(1)."> << </a> ";
            echo "<a href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']-1)."> < </a> "; //gắn thêm nút Back
        }
        for ($i=1 ; $i<=$maxPage ; $i++)
        {
            if ($i == $_GET['page']) {
                echo '<b>'.$i.'</b> '; //trang hiện tại sẽ được bôi đậm
            }
            else { echo "<a href=" .$_SERVER['PHP_SELF']. "?page=".$i."> ".$i."</a> ";
            }
        }
        if ($_GET['page'] < $maxPage) {
            echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=".($_GET['page'] + 1) . "> > </a>";  //gắn thêm nút Next
            echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=".($maxPage) . "> >> </a>";
        }
        ?>
    </div>
</body>

</html>