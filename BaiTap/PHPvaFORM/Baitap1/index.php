<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./BaiTap/PHPvaFORM/Baitap1/style.css" />
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $chieudai=$_POST['chieudai'];
        $chieurong=$_POST['chieurong'];
        $dientich=0;
        $chuvi=0;
        if($chieudai>0 and $chieurong>0 and $chieudai>$chieurong and is_numeric($chieudai) and is_numeric($chieurong)) {
            $chuvi=($chieudai+$chieurong)*2;
            $dientich=$chieudai*$chieurong;
        }else{
            $chieudai="Nhap lai";
            $chieurong="Nhap lai";
        }
    }   
    ?>



    <?php
    if(isset($_POST["reset"])) {
        $_POST["chieudai"]="";
        $_POST["chieurong"]="";
    }
    ?>
    <div class="container">
        <form action="" method="post">
            <p>DIEN TICH HINH CHU NHAT</p>
            <table>
                <tr>
                    <td>
                        <label for="">Chieu dai</label>
                    </td>
                    <td>
                        <input type="text" name="chieudai" class="button" value="<?php if (isset($chieudai)) { echo $chieudai;
}?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Chieu rong</label>
                    </td>
                    <td>
                        <input type="text" name="chieurong" class="button" value="<?php if (isset($chieurong)) { echo $chieurong;
}?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Dien tich</label>
                    </td>
                    <td>
                        <input type="text" name="dientich" class="button" style="background-color: rgb(213, 177, 231)"
                            value="<?php if (isset($dientich)) { echo $dientich;
}?>" readonly />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Chu vi</label>
                    </td>
                    <td>
                        <input type="text" name="chuvi" class="button" style="background-color: rgb(213, 177, 231)"
                            value="<?php if (isset($chuvi)) { echo $chuvi;
}?>" readonly />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center">
                        <input type="submit" value="submit" name="submit" class="button" />
                        <input type="submit" value="reset" name="reset" class="button" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>