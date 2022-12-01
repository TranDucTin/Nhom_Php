<?php
require_once '../../connect_DB.php';
require './panigation_query_book.php';
$re = mysqli_query($conn, $panigation_query);
$numRows = mysqli_num_rows($re); 
//tổng số trang
$maxPage = floor($numRows/$rowsPerPage)+1;
// 
if(!isset($_GET['dateStart']) and !isset($_GET['dateEnd'])) {
    $_GET['dateStart']='';
    $_GET['dateEnd']='';
}

//gắn thêm nút Back
if($_GET['page']>1) {
    echo "<li class='page-item PagedList-skipToNext'>
    <a href=".$_SERVER['PHP_SELF']."?dateStart=".($_GET['dateStart'])."&dateEnd=".($_GET['dateEnd'])."&page=".($_GET['page']-1)." rel='next'>«</a>
    <li/>";
}
for ($i=1 ; $i<=$maxPage ; $i++) //tạo link tương ứng tới các trang
{   
    if ($i == $_GET['page']) {
        echo "<li class='page-item active'><a>$i</a></li>";
    } else {
        echo "<li class='page-item'>
    <a href=".$_SERVER['PHP_SELF']."?dateStart=".($_GET['dateStart'])."&dateEnd=".($_GET['dateEnd'])."&page=".$i.">$i</a>
    <li/>";
    }
}
//gắn thêm nút Next
if($_GET['page']<$maxPage) {
    echo "<li class='page-item PagedList-skipToNext'>
    <a href=".$_SERVER['PHP_SELF']."?dateStart=".($_GET['dateStart'])."&dateEnd=".($_GET['dateEnd'])."&page=".($_GET['page']+1)." rel='next'>»</a>
    </li>";
}

?>