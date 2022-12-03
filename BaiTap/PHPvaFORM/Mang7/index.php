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
      $mang_can = array("Quy","Giap","At","Binh","Dinh","Mau","Ky","Canh","Tan","Nham");
      $mang_chi = array("Hoi","Ti","Suu","Dan","Meo","Thin","Ti","Ngo","Mui","Than","Dau","Tuat");
      $mang_hinh = array("hoi.jpg","ti.jpg","suu.jpg","dan.jpg","meo.jpg","thin.jpg","ran.jpg","ngo.jpg","mui.jpg","than.jpg","dau.jpg","tuat.jpg");
    if(isset($_POST['submit'])) {
        $duong=$_POST['duonglich'];
        $nam=(int)$duong-3;
        $can=$nam%10;
        $chi=$nam%12;
        $nam_al=$mang_can[$can];
        $nam_al=$nam_al." ".$mang_chi[$chi];
        $hinh=$mang_hinh[$chi];
    }
    ?>
    <form action="" method="post">
        <p class="title">TINH NAM AM LICH</p>
        <div class="container">
            <p>Nam duong lich</p>
            <p>Nam am lich</p>
        </div>
        <div class="container">
            <input type="text" name="duonglich" class="input" />
            <input type="submit" name="submit" value="=>" />
            <input type="text" name="amlich" class="input inputam" value="<?php if(isset($nam_al)) { echo $nam_al; 
} ?>" />
        </div>
        <div class="anh">
            <img src="./img/<?php echo $hinh ?>" alt="" />
        </div>
    </form>
    <a href="../../../index.php">Trở về</a>
</body>

</html>