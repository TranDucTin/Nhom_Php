<?php 
$trang = $_GET['page'];
echo "
<div class='row'>
    <div class='col-lg-12'>
        <div class='shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between'>
            <p>Hiển thị sách $trang - 6 trên tổng 6 sách</p>
            <div class='orderby__wrapper'>
                <span>Sắp xếp theo</span>
                <select class='shot__byselect'>
                    <option>Mới nhất</option>
                    <option>Giá từ thấp đến cao</option>
                    <option>Giá từ cao đến thấp</option>
                    <option>Bán chạy</option>
                </select>
            </div>
        </div>
    </div>
</div>

";

?>