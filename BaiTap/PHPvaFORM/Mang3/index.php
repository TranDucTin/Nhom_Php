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
    function taomang($n)
    {
        $mang = array();
        for($i=0;$i<$n;$i++){
            $mang[]=rand(0, 20);
        }
        return $mang;
    }
    function timmax($mang)
    {
        $max = $mang[0];
        foreach($mang as $item){
            if($item >= $max) {
                $max = $item;
            }
        }
        return $max;
    }
    function timmin($mang)
    {
        $min = $mang[0];
        foreach($mang as $item){
            if($item <= $min) {
                $min = $item;
            }
        }
        return $min;
    }
    function timsum($mang)
    {
        $sum = 0;
        foreach ($mang as $item) {
            $sum = $sum + $item;
        }
        return $sum;
    }
    if(isset($_POST['submit'])) {
        $soN = $_POST['sophantu'];
        if(!is_numeric($soN) or $soN<=0) {
            $soN = "So phan tu la so nguyen duong";
        }else{
            $mang1 = taomang($soN);
            $mang = implode(" ", $mang1);
            $max = timmax($mang1);
            $min = timmin($mang1);
            $sum = timsum($mang1);
        }
    }
    ?>

    <form action="" method="post">
      <table>
        <p>PHAT SINH MANG VA TINH TOAN</p>
        <tr style="background-color: lightpink">
          <td>Nhap so phan tu</td>
          <td><input type="text" name="sophantu" value="<?php if(isset($soN)) { echo $soN; 
                                                        } ?>" /></td>
        </tr>
        <tr style="background-color: lightpink">
          <td></td>
          <td>
            <input
              type="submit"
              style="background-color: lightyellow"
              name="submit"
              value="Phat sinh va tinh toan"
            />
          </td>
        </tr>
        <tr>
          <td>Mang</td>
          <td><input type="text" name="mang" class="dis" value="<?php if(isset($mang)) { echo $mang; 
                                                                } ?>" /></td>
        </tr>
        <tr>
          <td>GTLN (MAX) trong mang</td>
          <td><input type="text" name="max" class="dis" value="<?php if(isset($max)) { echo $max; 
                                                               } ?>" /></td>
        </tr>
        <tr>
          <td>GTNN (MIN) trong mang</td>
          <td><input type="text" name="min" class="dis" value="<?php if(isset($min)) { echo $min; 
                                                               } ?>" /></td>
        </tr>
        <tr>
          <td>Tong mang</td>
          <td><input type="text" name="tong" class="dis" value="<?php if(isset($sum)) { echo $sum; 
                                                                } ?>" /></td>
        </tr>
        <tr style="text-align: center">
          <td colspan="2">
            (
            <span style="color: red; font-weight: bold">Ghi chu:</span>
            Cac phan tu trong mang co gia tri tu 0 den 20)
          </td>
        </tr>
      </table>
    </form>
    <a href="../../../index.php">Trở về</a>
  </body>
</html>
