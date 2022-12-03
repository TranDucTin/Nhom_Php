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
    function taomang($mang)
    {
        $arr = array();
        $arr = explode(",", $mang);
        return $arr;
    }
    function taodayso($mang)
    {
        $arr = implode(",", $mang);
        return $arr;
    }
    function thaythe($mang,$old,$new)
    {
        for ($i=0; $i < count($mang); $i++) { 
            if($mang[$i]==$old) {
                $mang[$i]=$new;
            }
        }
        return $mang;
    }
    if(isset($_POST['submit'])) {
        $dayso = $_POST['dayso'];
        $old = $_POST['canthaythe'];
        $new = $_POST['thaythe'];
        if(is_numeric($new)) {

        }else{
            $new="Nhap so";
        }
        $dayso = taomang($dayso);
        $dayso = thaythe($dayso, $old, $new);
        $dayso = taodayso($dayso);
    }
    ?>
    <form action="" method="post">
        <table>
            <p>THAY THE</p>
            <tr style="background-color: lightpink">
                <td>Nhap cac phan tu</td>
                <td><input type="text" name="dayso" value="<?php if(isset($_POST['dayso'])) { echo $_POST['dayso']; 
} ?>" /></td>
            </tr>
            <tr style="background-color: lightpink">
                <td>Gia tri can thay the</td>
                <td><input type="text" name="canthaythe" value="<?php if(isset($old)) { echo $old; 
} ?>" /></td>
            </tr>
            <tr style="background-color: lightpink">
                <td>Gia tri thay the</td>
                <td><input type="text" name="thaythe" value="<?php if(isset($new)) { echo $new; 
} ?>" /></td>
            </tr>
            <tr style="background-color: lightpink">
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Thay the" style="background-color: antiquewhite" />
                </td>
            </tr>
            <tr style="background-color: blanchedalmond">
                <td>Mang cu</td>
                <td><input type="text" name="mangcu" class="inputdis" value="<?php if(isset($_POST['dayso'])) { echo $_POST['dayso']; 
} ?>" /></td>
            </tr>
            <tr style="background-color: blanchedalmond">
                <td>Mang sau khi thay the</td>
                <td><input type="text" name="mangmoi" class="inputdis" value="<?php if(isset($dayso)) { echo $dayso; 
} ?>" /></td>
            </tr>
            <tr style="background-color: blanchedalmond">
                <td colspan="2" style="text-align: center">
                    <span style="font-weight: bold; color: red">Ghi chu:</span>Cac phan
                    tu trong mang se cach nhau bang dau ","
                </td>
            </tr>
        </table>
    </form>
    <a href="../../../index.php">Trở về</a>
</body>

</html>
