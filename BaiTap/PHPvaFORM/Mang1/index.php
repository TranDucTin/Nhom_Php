<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>

<body>
    <?php
    function sapxep($mang)
    {
        for($i=0;$i<count($mang);$i++){
            for($j=$i+1;$j<count($mang);$j++){
                if($mang[$i]>$mang[$j]) {
                    $tam = $mang[$i];
                    $mang[$i]=$mang[$j];
                    $mang[$j]=$tam;
                }
            }
        }
        return $mang;
    }
    function invitri0($mang)
    {
        $vitri = array();
        for($i=0;$i<count($mang);$i++){
            if($mang[$i]==0) {
                $vitri[]=$i;
            }
        }
        if(count($vitri) == 0) {
            return "Khong co vi tri 0";
        }else { return $vitri;
        }
    }
    function taomang($n)
    {
        $mang = array();
        for ($i=0; $i < $n; $i++) { 
            $mang[]=rand(-150, 150);
        }
        return $mang;
    }
    function sophantuchan($mang)
    {
        $dem=0;
        foreach($mang as $item){
            if($item%2 ==0) {
                $dem=$dem+1;
            }
        }
        return $dem;
    }
    function sophantunho100($mang)
    {
        $dem=0;
        foreach($mang as $item){
            if($item < 100) {
                $dem=$dem+1;
            }
        }
        return $dem;
    }
    function tongam($mang)
    {
        $dem=0;
        foreach($mang as $item){
            if($item < 0) {
                $dem=$dem+$item;
            }
        }
        return $dem;
    }
    if(isset($_POST['submit'])) {
        if(empty($_POST['son'])) {
            $soN = "Ban chua nhap n";
        }else{
            $soN = $_POST['son'];
            if(is_numeric($soN) and $soN>0) {
                // lam b c d e f g
                $mang=taomang($soN);
                $mang1=implode(",", $mang);
                $sophantuchanne = sophantuchan($mang);
                $sophantunhohon100 = sophantunho100($mang);
                $tongamne = tongam($mang);
                $vitribang = invitri0($mang);
                if(empty($vitribang)) {
                    $vitribang = implode(",", $vitri);
                }else{
              
                }
                $xep = sapxep($mang);
                $xep = implode(",", $xep);
            }else{
                $soN="n la so nguyen duong";
            }
        }
    }
    ?>
    <form action="" method="post">
        <table>
            <p>BAI TAP 1</p>
            <tr>
                <td>Nhap n</td>
                <td><input type="text" name="son" id="" value="<?php if (isset($soN)) { echo $soN;
}?>" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Thuc hien" /></td>
            </tr>
            <tr>
                <td>Mang</td>
                <td><input type="text" name="mang" value="<?php if (isset($mang1)) { echo $mang1;
}?>" class="dis" /></td>
            </tr>
            <tr>
                <td>So phan tu chan</td>
                <td><input type="text" name="sochan" id="" class="dis" value="<?php if (isset($sophantuchanne)) { echo $sophantuchanne;
}?>" /></td>
            </tr>
            <tr>
                <td>So phan tu nho hon 100</td>
                <td><input type="text" name="sonho100" id="" class="dis" value="<?php if (isset($sophantunhohon100)) { echo $sophantunhohon100;
}?>" /></td>
            </tr>
            <tr>
                <td>Tong am</td>
                <td><input type="text" name="tongam" id="" class="dis" value="<?php if (isset($tongamne)) { echo $tongamne;
}?>" /></td>
            </tr>
            <tr>
                <td>Vi tri 0</td>
                <td><input type="text" name="vitri0" id="" class="dis" value="<?php if (isset($vitribang)) { echo $vitribang;
}?>" /></td>
            </tr>
            <tr>
                <td>Sap xep</td>
                <td><input type="text" name="sapxep" id="" class="dis" value="<?php if (isset($xep)) { echo $xep;
}?>" /></td>
            </tr>
        </table>
    </form>
    <a href="../../../index.php">Trở về</a>
</body>

</html>
