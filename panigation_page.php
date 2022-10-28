<?php 
$re = mysqli_query($conn, 'select * from book');
$numRows = mysqli_num_rows($re); 
$rowsPerPage=6;
$maxPage = floor($numRows/$rowsPerPage) + 1;
if (!isset($_GET['page'])) {
    $_GET['page'] = 1;
}else{
    if($_GET['page']<1 || $_GET['page']>$maxPage) {
        $_GET['page'] = 1;
    }
}
$offset =($_GET['page']-1)*$rowsPerPage; 
$query="SELECT * FROM book LIMIT $offset,$rowsPerPage";
$result=mysqli_query($conn, $query);

?>