<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./BaiTap/PHPvaFORM/Baitap5/style50.css">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $batdau=$_POST['batdau'];
        $ketthuc=$_POST['ketthuc'];
        $tongtien=0;
        $ketqua="";
        if($batdau<10 or $ketthuc>24) {
            $batdau="nhap tu 10-24";
            $ketthuc="nhap tu 10-24";
        }else{
            if($batdau<$ketthuc) {
                if ($batdau<=17 and $ketthuc<=17) {
                    $tongtien=($ketthuc-$batdau)*20000;
                }
                if ($batdau<=17 and $ketthuc>17) {
                    $tongtien=(17-$batdau)*20000+($ketthuc-17)*45000;
                }
                if ($batdau>=17 and $ketthuc>17) {
                    $tongtien=($ketthuc-$batdau)*45000;
                }
            }
            else{
                $tongtien="nhap lai";
            }
        }
    }   
    if (isset($_POST['reset'])) {
        $batdau="";
        $ketthuc="";
    }
    ?>
    <div class="container">
        <form action="" method="post">
            <p>TINH TIEN KARAOKE</p>
            <table>
                <tr>
                    <td>
                        <label for="">Gio bat dau</label>
                    </td>
                    <td>
                        <input type="text" name="batdau" class="button" value="<?php if (isset($batdau)) { echo $batdau;
}?>" />
                    </td>
                    <td>(h)</td>
                </tr>
                <tr>
                    <td>
                        <label for="">Gio ket thuc</label>
                    </td>
                    <td>
                        <input type="text" name="ketthuc" class="button" value="<?php if (isset($ketthuc)) { echo $ketthuc;
}echo "";?>" />
                    </td>
                    <td>(h)</td>
                </tr>
                <tr>
                    <td>
                        <label for="">Tien thanh toan</label>
                    </td>
                    <td>
                        <input type="text" name="tongtien" class="button" style="background-color: lightyellow" value="<?php if (isset($tongtien)) { echo $tongtien; 
} else { echo "";
                                                                                                                       }?>" readonly />
                    </td>
                    <td>(VND)</td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: center">
                        <input type="submit" value="submit" name="submit" class="button" />
                        <input type="submit" value="reset" name="reset" class="button" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
