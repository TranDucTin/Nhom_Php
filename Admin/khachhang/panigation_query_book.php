<?php
$panigation_query = 'select * from customer';

if(isset($_GET['ten']) and $_GET['ten']!='') {
    $theloai = $_GET['ten'];
    // $panigation_query = 'select * from book order by book.TotalSell DESC';
    $panigation_query = "SELECT * FROM `customer` WHERE customer.CustomerName LIKE '%$theloai%'";
}
?>