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
  function taomang($dayso)
  {
      $arr=array();
      $arr = explode(",", $dayso);
      return $arr;
  }
  function taodayso($mang)
  {
      $arr = implode(",", $mang);
      return $arr;
  }
  function tangdan($mang)
  {
      for ($i=0; $i < count($mang); $i++) { 
          for ($j=$i+1; $j < count($mang); $j++) { 
              if($mang[$i]>=$mang[$j]) {
                  $tam = $mang[$i];
                  $mang[$i]=$mang[$j];
                  $mang[$j]=$tam;
              }
          }
      }
      return $mang;
  }
  function giamdan($mang)
  {
      for ($i=0; $i < count($mang); $i++) { 
          for ($j=$i+1; $j < count($mang); $j++) { 
              if($mang[$i]<=$mang[$j]) {
                  $tam = $mang[$i];
                  $mang[$i]=$mang[$j];
                  $mang[$j]=$tam;
              }
          }
      }
      return $mang;
  }
  if(isset($_POST['submit'])) {
      $dayso = $_POST['dayso'];
      $dayso = taomang($dayso);
      $tang = tangdan($dayso);
      $giam = giamdan($dayso);
      $tang = taodayso($tang);
      $giam = taodayso($giam);
  }
    ?>

    <form action="" method="post">
      <table>
        <p>SAP XEP MANG</p>
        <tr style="background-color: rgb(198, 240, 240)">
          <td>Nhap mang</td>
          <td><input type="text" name="dayso" value="<?php if(isset($_POST['dayso'])) { echo $_POST['dayso']; 
                                                     } ?>" /></td>
        </tr>
        <tr style="background-color: rgb(198, 240, 240)">
          <td></td>
          <td>
            <input type="submit" name="submit" value="Sap xep tang/giam" />
          </td>
        </tr>
        <tr style="background-color: aquamarine">
          <td style="color: red; font-weight: bold">Sau khi sap xep</td>
          <td></td>
        </tr>
        <tr style="background-color: aquamarine">
          <td>Tang dan</td>
          <td><input type="text" name="tang" value="<?php if(isset($tang)) { echo $tang; 
                                                    } ?>" /></td>
        </tr>
        <tr style="background-color: aquamarine">
          <td>Giam dan</td>
          <td><input type="text" name="giam" value="<?php if(isset($giam)) { echo $giam; 
                                                    } ?>" /></td>
        </tr>
        <tr style="background-color: rgb(198, 240, 240)">
          <td colspan="2" style="text-align: center">
            <span style="color: red; font-weight: bold">(*)</span>Cac so duoc
            nhap cach nhau bang dau ",
          </td>
        </tr>
      </table>
    </form>
    <a href="../../../index.php">Trở về</a>
  </body>
</html>
