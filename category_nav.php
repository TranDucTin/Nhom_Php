<!-- SELECT CategoryName,COUNT(CategoryName) FROM category JOIN book_category ON category.CategoryID = book_category.CategoryID Group by CategoryName -->
<!-- SELECT CategoryName,COUNT(CategoryName) FROM category LEFT JOIN book_category ON category.CategoryID = book_category.CategoryID Group by CategoryName -->
<!-- SELECT CategoryName,COUNT(BookID) FROM category LEFT JOIN book_category ON category.CategoryID = book_category.CategoryID Group by CategoryName36
+ -->
<div class="shop__sidebar">
    <aside class="wedget__categories poroduct--cat">
        <h3 class="wedget__title">Danh mục Thể loại</h3>
        <ul>
            <?php 
            require 'connect_DB.php';
            $query="SELECT CategoryName,COUNT(BookID) FROM category LEFT JOIN book_category ON category.CategoryID = book_category.CategoryID Group by CategoryName";
            $result=mysqli_query($conn, $query);
            if(mysqli_num_rows($result)!=0) {
                while($row = mysqli_fetch_array($result)){
                    echo "
                    <li>
                        <a href='/danh-muc/kinh-te'>$row[0] <span>($row[1])</span></a>
                    </li>
                    ";
                }
            }
            ?>
        </ul>
    </aside>
</div>