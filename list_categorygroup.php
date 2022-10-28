<?php
require './connect_DB.php';
$query="SELECT * FROM categorygroup";
$result=mysqli_query($conn, $query);
if(mysqli_num_rows($result)!=0) { 
    while($row = mysqli_fetch_array($result)){
        $cate = $row[0];
        echo "
        <ul class='item item03'>
            <li class='title'>$row[1]</li>";
            include "./list_category.php";
        echo "</ul>";
    }
}
?>