<?php
if($row[4]<=0) {
    $button="<p class='text-danger'>Hết hàng</p>";
}else{
    $button="<form action='' class='addItem' method='post'>
  <input type=hidden name='BookID' value='$row[0]' />
  <input type=hidden name='BookName' value='$row[1]' />
  <input type=hidden name='Image' value='$row[6]' />
  <input type=hidden name='Price' value='$giagiam' />
  <input type=hidden name='Quantity' value='1' />
  <button type='submit' name='add' class='cart' title='Thêm vào giỏ hàng'>
      <i class='bi bi-shopping-bag4'></i>
  </button>
</form>";
}
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
                        $button
                    </li>
                    <li>
                        <button type='submit' name='delete' class='wishlist' title='Yêu thích'>
                            <i class='bi bi-shopping-cart-full'></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
";
?>