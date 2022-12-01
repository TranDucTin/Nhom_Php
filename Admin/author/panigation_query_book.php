<?php
$panigation_query = 'select * from author';

if(isset($_GET['hoten']) and $_GET['hoten']!='') {
    $hoten = $_GET['hoten'];
    // $panigation_query = 'select * from book order by book.TotalSell DESC';
    $panigation_query = "SELECT * FROM `author` WHERE author.AuthorName LIKE '%$hoten%'";
}
?>