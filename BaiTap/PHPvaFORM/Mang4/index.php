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
    if(isset($_POST['submit'])) {
        $mang = $_POST['mang'];
        $sotim = $_POST['tim'];
        $arr = array();
        $mang = explode(",", $mang);
        for ($i=0; $i < count($mang); $i++) { 
            if(is_numeric($mang[$i])) {
                $arr[]=$mang[$i];
            }
        }
        $mang1 = implode(",", $mang);       
        $arr1 = implode(",", $arr);
        if(is_numeric($sotim)) {
            for ($i=0; $i < count($arr); $i++) { 
                if($arr[$i]==$sotim) {
                    $ketqua = "Da tim thay $sotim tai vi tri $i cua mang";
                    break;
                }else{
                    $ketqua = "Khong tim thay $sotim trong mang";
                }
            }
        }else{
            $sotim="Nhap so";
        }
    }
    ?>
    <form action="" method="post">
      <table>
        <p>TIM KIEM</p>
        <tr>
          <td>Nhap mang</td>
          <td><input type="text" name="mang" id="" value="<?php if(isset($mang1)) { echo $mang1; 
                                                          } ?>" /></td>
        </tr>
        <tr>
          <td>Nhap so can tim</td>
          <td><input type="text" name="tim" id="" value="<?php if(isset($sotim)) { echo $sotim; 
                                                         } ?>"/></td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input
              style="background-color: lightblue; border: 1px solid"
              type="submit"
              value="Tim kiem"
              name="submit"
            />
          </td>
        </tr>
        <tr>
          <td>Mang</td>
          <td><input type="text" name="mangin" id="" value="<?php if(isset($arr1)) { echo $arr1; 
                                                            } ?>" readonly/></td>
        </tr>
        <tr>
          <td>Ket qua tim kiem</td>
          <td><input style="background-color: lightblue;color: red" type="text" name="kq" id="" readonly value="<?php if(isset($ketqua)) { echo $ketqua; 
                                                                                                                } ?>" /></td>
        </tr>
        <tr style="text-align: center; background-color: aquamarine">
          <td colspan="2">(Cac phan tu trong mang se cach nhau bang dau ",")</td>
        </tr>
      </table>
    </form>
    <a href="../../../index.php">Trở về</a>
  </body>
</html>
