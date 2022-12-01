<?php
$panigation_query = 'select * from orders';

if(isset($_GET['dateStart']) and $_GET['dateStart']!='' and isset($_GET['dateEnd']) and $_GET['dateEnd']!='') {
    $dateStart = $_GET['dateStart'];
    $dateEnd = $_GET['dateEnd'];
    // $panigation_query = 'select * from book order by book.TotalSell DESC';
    $panigation_query = "SELECT * FROM `orders` WHERE  orders.OrderByDate BETWEEN '$dateStart' and '$dateEnd'";
}
?>