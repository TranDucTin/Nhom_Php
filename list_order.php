<?php 
$trang = $_GET['page'];
if($maxPage == 0) {
    $maxPage =1;
}
echo "
<div class='row'>
    <div class='col-lg-12'>
        <div class='shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between'>
            <p>Hiển thị sách $trang - $maxPage trên tổng $maxPage sách</p>
            <form action='./danhmuc.php' method='get'>
                <div class='orderby__wrapper'>
                    <span>Sắp xếp theo</span>
                    <select class='shot__byselect' name='orderby'>
                        <option value='moinhat'>Mới nhất</option>
                        <option value='thapcao'>Giá từ thấp đến cao</option>
                        <option value='caothap'>Giá từ cao đến thấp</option>
                        <option value='banchay'>Bán chạy</option>
                    </select>
                    <input type='submit' class='btn btn-light btn-sm' value='Sắp xếp'></input>
                </div>
            </form>
        </div>
    </div>
</div>

";

?>