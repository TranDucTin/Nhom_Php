<?php
$panigation_query = 'select * from category';

if(isset($_GET['theloai']) and $_GET['theloai']!='') {
    $theloai = $_GET['theloai'];
    // $panigation_query = 'select * from book order by book.TotalSell DESC';
    $panigation_query = "SELECT * FROM `category` WHERE category.CategoryName LIKE '%$theloai%'";
}
?>