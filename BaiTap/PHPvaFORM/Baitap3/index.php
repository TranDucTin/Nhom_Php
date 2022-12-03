<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./BaiTap/PHPvaFORM/Baitap3/style1.css">
    <title>Document</title>
  </head>
  <body>
  <?php
  if (isset($_POST['submit'])) {
      $ten=$_POST['ten'];
      $socu=$_POST['socu'];
      $somoi=$_POST['somoi'];
      $dongia=$_POST['dongia'];
      $tiendien=0;
      if (isset($socu) and is_numeric($socu) and $socu>0 and isset($somoi) and is_numeric($somoi) and $somoi>0) {
          if($socu<$somoi) {
              $tiendien = ($somoi-$socu)*$dongia;
          }
      }
  }   
  if (isset($_POST['reset'])) {
      $socu="";
      $somoi="";
  }
    ?>
    <div class="container">
      <form action="" method="post">
        <p>THANH TOAN TIEN DIEN</p>
        <table>
          <tr>
            <td>
              <label for="">Ten chu ho</label>
            </td>
            <td>
              <input type="text" name="ten" class="button" value="<?php if (isset($ten)) { echo $ten;
                                                                  }?>" />
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Chi so cu</label>
            </td>
            <td>
              <input type="text" name="socu" class="button" value="<?php if (isset($socu)) { echo $socu;
                                                                   }echo "";?>"/>
            </td>
            <td>(Kw)</td>
          </tr>
          <tr>
            <td>
              <label for="">Chi so moi</label>
            </td>
            <td>
              <input type="text" name="somoi" class="button" value="<?php if (isset($somoi)) { echo $somoi;
                                                                    }echo "";?>"/>
            </td>
            <td>(Kw)</td>
          </tr>
          <tr>
            <td>
              <label for="">Don gia</label>
            </td>
            <td>
              <input type="text" name="dongia" class="button" value="<?php if (isset($dongia)) { echo $dongia; 
                                                                     } else { echo "2000";
}?>"/>
            </td>
            <td>(VND)</td>
          </tr>
          <tr>
            <td>
              <label for="">So tien thanh toan</label>
            </td>
            <td>
              <input
                type="text"
                name="sotien"
                class="button"
                style="background-color: rgb(213, 177, 231)"
                value="<?php if (isset($tiendien)) { echo $tiendien; 
                       } else { echo "";
}?>"
                readonly
              />
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
