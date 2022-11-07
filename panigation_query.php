<?php
$panigation_query = 'select * from book';
if(isset($_GET['orderby']) and $_GET['orderby']!='') {
    if($_GET['orderby']=='moinhat') {
        $panigation_query = 'select * from book order by book.CreateByDate DESC';
    }
    if($_GET['orderby']=='thapcao') {
        $panigation_query = 'select * from book order by book.Price ASC';
    }
    if($_GET['orderby']=='caothap') {
        $panigation_query = 'select * from book order by book.Price DESC';
    }
    if($_GET['orderby']=='banchay') {
        $panigation_query = 'select * from book order by book.TotalSell DESC';
    }
}
if(isset($_GET['category']) and $_GET['category']!='') {
    $cate = $_GET['category'];
    // $panigation_query = 'select * from book order by book.TotalSell DESC';
    $panigation_query = "SELECT * from book JOIN book_category on book.BookID = book_category.BookID JOIN category on book_category.CategoryID = category.CategoryID where category.Url='$cate'";
}
?>