<!-- <li><a href='/danh-muc/kinh-te'>Kinh Tế</a></li> -->
<?php 
require './connect_DB.php';

$query="SELECT * from category WHERE CateGroupID = '$cate'";
$resultcate=mysqli_query($conn, $query);
if(mysqli_num_rows($result)!=0) { 
    while($rowcate = mysqli_fetch_array($resultcate)){
        echo "<li><a href='danhmuc.php?category=$rowcate[3]'>$rowcate[1]</a></li>";
    }
}
?>