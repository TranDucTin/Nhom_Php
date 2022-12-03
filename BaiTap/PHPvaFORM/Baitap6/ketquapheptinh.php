<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    if(is_numeric($_POST['sothunhat']) and is_numeric($_POST['sothuhai'])) {
        $sonhat= $_POST['sothunhat'];
        $sohai= $_POST['sothuhai'];
    }else{
        $sonhat="vui long nhap so";
        header('Location: pheptinh.php');
    }
    if(isset($_POST['pheptinh'])) {
        if($_POST['pheptinh']=='cong') {
            $ketqua=$sonhat+$sohai;
            $tinh = "Cộng";
        }
        if($_POST['pheptinh']=='tru') {
            $ketqua=$sonhat-$sohai;
            $tinh = "Trừ";
        }
        if($_POST['pheptinh']=='nhan') {
            $ketqua=$sonhat*$sohai;
            $tinh = "Nhân";
        }
        if($_POST['pheptinh']=='chia') {
            if($sohai==0) {
                $sohai="kh the chia cho 0";
                header('Location: pheptinh.php');
            }else{
                $ketqua=$sonhat/$sohai;                    
            }
            $tinh = "Chia";
        }
    }
    ?>
    <div class="container">
        <p>PHEP TINH TREN HAI SO</p>
            <table>
                <tr>
                    <td><label for="" style="color:red">Chon phep tinh</label></td>
                    <td>
                    <?php if (isset($tinh)) { echo $tinh;
                    }?>
                    </td>
                </tr>
                <tr>
                    <td><label for="">So thu nhat</label></td>
                    <td><input type="text" name="sothunhat" value="<?php if (isset($sonhat)) { echo $sonhat;
                                                                   }?>"></td>
                </tr>
                <tr>
                    <td><label for="">So thu hai</label></td>
                    <td><input type="text" name="sothuhai" value="<?php if (isset($sohai)) { echo $sohai;
                                                                  }?>"></td>
                </tr>
                <tr>
                    <td><label for="">Ket qua</label></td>
                    <td><input type="text" name="ketqua" value="<?php if (isset($ketqua)) { echo $ketqua;
                                                                }?>" readonly></td>
                </tr>
                <tr><td style="text-align: center" colspan="2"><a href="javascript:window.history.back(-1);">Tro ve trang truoc</a>
</td></tr>
            </table>


    </div>
    <a href="../../../index.php">Trở về</a>
</body>
</html>
