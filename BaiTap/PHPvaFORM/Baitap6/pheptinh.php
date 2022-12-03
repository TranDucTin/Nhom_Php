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
    <div class="container">
        <p>PHEP TINH TREN HAI SO</p>
        <form action="ketquapheptinh.php" method="post">
            <table>
                <tr>
                    <td><label for="" style="color:red">Chon phep tinh</label></td>
                    <td>
                        <input type="radio" value="cong" name="pheptinh">Cong
                        <input type="radio" value="tru" name="pheptinh">Tru
                        <input type="radio" value="nhan" name="pheptinh">Nhan
                        <input type="radio" value="chia" name="pheptinh">Chia
                    </td>
                </tr>
                <tr>
                    <td><label for="">So thu nhat</label></td>
                    <td><input type="text" name="sothunhat"></td>
                </tr>
                <tr>
                    <td><label for="">So thu hai</label></td>
                    <td><input type="text" name="sothuhai"></td>
                </tr>
                <tr><td style="text-align: center" colspan="2"><input name="submit" type="submit" value="Tinh"></td></tr>
            </table>

        </form>

    </div>
    <a href="../../../index.php">Trở về</a>
</body>
</html>
