<?php
$hoten=$_POST['fullname'];
$diachi=$_POST['address'];
$dienthoai=$_POST['phone'];
$gioitinh=$_POST['gender'];
$quocgia=$_POST['country'];
$study=$_POST['study'];
$note=$_POST['note'];
echo "Bạn đã nhập thành công dưới đây là những thông tin bạn đã nhập <br>";
echo "Ho ten:$hoten <br>";
echo "Address:$diachi <br>";
echo "Phone:$dienthoai <br>";
echo "Gender:$gioitinh <br>";
echo "Country:$quocgia <br>";
echo "Study:$study <br>";
echo "Note:$note";
?>