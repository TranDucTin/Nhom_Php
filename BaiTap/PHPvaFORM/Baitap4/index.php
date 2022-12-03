<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./BaiTap/PHPvaFORM/Baitap4/style2.css">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $toan=$_POST['toan'];
        $ly=$_POST['ly'];
        $hoa=$_POST['hoa'];
        $diemchuan=$_POST['diemchuan'];
        $tongdiem=0;
        $ketqua="";
        if ($toan>0 and $ly>0 and $hoa>0) {
            if(($toan+$ly+$hoa)>=$diemchuan) {
                $tongdiem=$toan+$ly+$hoa;
                $ketqua="DAU";
            }else{
                $tongdiem=$toan+$ly+$hoa;
                $ketqua="ROT";
            }
        }else if($toan==0 || $ly==0 || $hoa==0) {
            $tongdiem=$toan+$ly+$hoa;
            $ketqua="ROT";
        }else{
            $toan="nhap so duong";
        }
    }   
    if (isset($_POST['reset'])) {
        $toan="";
        $ly="";
        $hoa="";
    }
    ?>
    <div class="container">
        <form action="" method="post">
            <p>KET QUA THI DAI HOC</p>
            <table>
                <tr>
                    <td>
                        <label for="">Toan</label>
                    </td>
                    <td>
                        <input type="text" name="toan" class="button" value="<?php if (isset($toan)) { echo $toan;
}?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Ly</label>
                    </td>
                    <td>
                        <input type="text" name="ly" class="button" value="<?php if (isset($ly)) { echo $ly;
}echo "";?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Hoa</label>
                    </td>
                    <td>
                        <input type="text" name="hoa" class="button" value="<?php if (isset($hoa)) { echo $hoa;
}echo "";?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Diem chuan</label>
                    </td>
                    <td>
                        <input type="text" name="diemchuan" style="color: red" class="button" value="<?php if (isset($diemchuan)) { echo $diemchuan; 
} else { echo "20";
                                                                                                     }?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Tong diem</label>
                    </td>
                    <td>
                        <input type="text" name="tongdiem" class="button" style="background-color: lightyellow" value="<?php if (isset($tongdiem)) { echo $tongdiem; 
} else { echo "";
                                                                                                                       }?>" readonly />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Ket qua thi</label>
                    </td>
                    <td>
                        <input type="text" name="ketqua" class="button" style="background-color: lightyellow" value="<?php if (isset($ketqua)) { echo $ketqua; 
} else { echo "";
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
