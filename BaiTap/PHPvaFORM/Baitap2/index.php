<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./BaiTap/PHPvaFORM/Baitap2/style.css" />
    <title>Document</title>
  </head>
  <body>
  <?php
    define('PI', 3.14);
  if (isset($_POST['submit'])) {
      $r=$_POST['radius'];;
      if (isset($r) and is_numeric($r) and $r>0) {
          $s=round(PI*$r*$r, 1);
          $p=round(2*PI*$r, 1);
      }else{
          $r="ban kinh phai la so hoac khong duoc de trong";
      }
  }   
  if (isset($_POST['reset'])) {
      $s="";
      $p="";
      $r="";
  }
    ?>
    <div class="container">
      <form action="" method="post">
        <p>DIEN TICH va CHU VI HINH TRON</p>
        <table>
          <tr>
            <td>
              <label for="">Ban kinh</label>
            </td>
            <td>
              <input type="text" name="radius" class="button" value="<?php if (isset($r)) { echo $r;
                                                                     }?>" />
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Chu vi</label>
            </td>
            <td>
              <input type="text" readonly style="background-color: rgb(213, 177, 231)" name="chuvi" class="button" value="<?php if (isset($p)) { echo $p;
                                                                                                                          }echo "";?>"/>
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Dien tich</label>
            </td>
            <td>
              <input
                type="text"
                name="dientich"
                class="button"
                style="background-color: rgb(213, 177, 231)"
                value="<?php if (isset($s)) { echo $s; 
                       } else { echo "";
}?>"
                readonly
              />
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
