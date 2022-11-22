<?php
echo "
<div class='product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12'>
    <div class='product__thumb'>
        <a class='first__img' href='./detail.php?id=$row[0]'>
            <img src='./images/books/$row[6]' alt='product image' />
        </a>
        <div class='hot__box'>
            <span class='hot-label'> - $row[3] %</span>
        </div>
    </div>
    <div class='product__content content--center'>
        <h4>
            <a href='single-product.html'>$row[1]</a>
        </h4>
        <ul class='prize d-flex'>
            <li>$giagiam VNĐ</li>
            <li class='old_prize'>$row[2] VNĐ</li>
        </ul>
        <div class='action'>
            <div class='actions_inner'>
                <ul class='add_to_links'>
                    <li>
                        <button class='cart addItem' title='Thêm vào giỏ hàng' href='#' data-id='BK-00007'>
                            <i class='bi bi-shopping-bag4'></i>
                        </button>
                    </li>
                    <li>
                        <button class='wishlist' title='Yêu thích' href='wishlist.html'>
                            <i class='bi bi-love'></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
";
?>