<?php
$panigation_query = 'select * from book';

if(isset($_GET['tensach']) and $_GET['tensach']!='') {
    $tensach = $_GET['tensach'];
    // $panigation_query = 'select * from book order by book.TotalSell DESC';
    $panigation_query = "SELECT * FROM `book` WHERE book.BookName LIKE '%$tensach%'";
}
?>