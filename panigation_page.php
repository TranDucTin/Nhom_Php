<?php
$re = mysqli_query($conn, 'select * from book');
$numRows = mysqli_num_rows($re); 
$rowsPerPage=6;
$maxPage = floor($numRows/$rowsPerPage);
if (!isset($_GET['page'])) {
    $_GET['page'] = 1;
}else{
    if($_GET['page']<1 || $_GET['page']>$maxPage) {
        $_GET['page'] = 1;
    }
}
$offset =($_GET['page']-1)*$rowsPerPage; 
$query="select * from book LIMIT $offset,$rowsPerPage";
$result=mysqli_query($conn, $query);
//demo branch quoc huy ne

?>