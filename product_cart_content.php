<div class="row">
    <div class="col-md-12 col-sm-12 ol-lg-12">
        <div id="cart-table-container">
            <div class="table-content wnro__table table-responsive">
                <table>
                    <thead>
                        <tr class="title-top">
                            <th class="product-thumbnail">Ảnh</th>
                            <th class="product-name">Sách</th>
                            <th class="product-price">Giá</th>
                            <th class="product-quantity">Số lượng</th>
                            <th class="product-subtotal">Tổng cộng</th>
                            <th class="product-remove">Xoá</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if(!isset($_SESSION)) { 
                            session_start(); 
                        }
                        if(!isset($_SESSION['cart']) ||empty($_SESSION['cart'])) {
                            echo '<tr class="text-center">
                                            <td colspan="6">Giỏ hàng trống</td>
                                        </tr>';
                        }else{
                            foreach($_SESSION['cart'] as $sach){
                                $tongtien=$sach[3]*$sach[4];
                                echo "
                                                <tr>
                                                <td class='product-thumbnail'>
                                                    <a href='#'><img src='./images/books/$sach[2]'
                                                            alt='product img' /></a>
                                                </td>
                                                <td class='product-name'>
                                                    <a href='/chi-tiet/harry-potter-va-bao-boi-tu-than'>$sach[1]</a>
                                                </td>
                                                <td class='product-price'>
                                                    <span class='amount'>$sach[3] VNĐ</span>
                                                </td>
                                                <td class='product-quantity'>
                                                    <form action='' class='updateItem' method='post'>
                                                        <input class='txtQuantity' name='quantity[$sach[0]]'
                        oninput='abc(this.value)' type='number'
                        value='$sach[4]' />
                        </form>
                        </td>
                        <td class='product-subtotal'>$tongtien VNĐ</td>
                        <td class='product-remove'>
                            <form action='' class='removeItem' method='post'>
                                <input type=hidden name='BookID' value='$sach[0]' />
                                <button>X</button>
                            </form>
                        </td>
                        </tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="cart__total__amount mt-5">
                <span>Tổng giỏ hàng</span>
                <?php 
                $total=0;
                if(!isset($_SESSION['cart']) ||empty($_SESSION['cart'])) {
                    echo "<span>0 VNĐ</span>";
                }else{
                    foreach($_SESSION['cart'] as $sach){
                        $total=$total+($sach[3]*$sach[4]);
                    }
                    echo "<span>$total VNĐ</span>";
                }
                ?>
            </div>

        </div>
        <div class="cartbox__btn flex-column mb-3">
            <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                <li><a id="btnContinue" href="./danhmuc.php">Tiếp tục mua hàng</a></li>
                <li><a id="btnPayment" href="./payment.php">Thanh toán</a></li>
            </ul>
        </div>
    </div>
</div>

<script src="./Scripts/active.js"></script>