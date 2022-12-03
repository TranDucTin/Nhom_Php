<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <?php 
      
    if (isset($_POST['submit'])) {
        $tong = 0;
        $arr=array();
        $ngu = $_POST['dayso'];
        $arr=explode(",", $ngu);;
        for ($i=0; $i < count($arr); $i++) { 
            if(is_numeric($arr[$i])) {
                $tong = $tong+$arr[$i];
            }
        }
    }

      




    ?>

    <div style="max-width: 300px; margin: 0 auto; background-color: #eee">
        <form action="" method="post">
            <p style="color: red; text-align: center">NHAP VA TINH TREN DAY SO</p>
            <table style="width: 100%">
                <tr>
                    <td>Nhap day so</td>
                    <td>
                        <input type="text" name="dayso" placeholder="cac so cach nhau bang dau ," value="<?php if (isset($ngu)) { echo $ngu;
}?>" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Tinh tong" />
                    </td>
                </tr>
                <tr>
                    <td>Tong day so</td>
                    <td>
                        <input type="text" name="ketqua" value="<?php if (isset($tong)) { echo $tong;
}?>" readonly />
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <a href="../../../index.php">Trở về</a>
</body>

</html>
