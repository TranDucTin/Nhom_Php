<?php
if(!isset($_SESSION)) { 
    session_start(); 
} 
?>

<li class="shop_search">
    <a class="search__active" href="#"></a>
</li>
<li class="wishlist"><a href="#"></a></li>
<li class="shopcart">
    <!-- Start Shopping Cart -->
    <?php
    if(isset($_SESSION['cart']) ) {

        $count = count($_SESSION['cart']);
        $tongtien=0;
        foreach($_SESSION['cart'] as $sach){
            $tongtien=$tongtien+($sach[3]*$sach[4]);
        }
    }else{
        $tongtien = 0;
        $count = 0;
    }
                            echo "
                            <a class='cartbox_active'><span class='product_qun'><span class='cart-float-count'>$count</span></span></a>
                            <div class='block-minicart minicart__active'>
                                <div class='minicart-content-wrapper' id='cart-float-expand'>
                                    <h4>GIỎ HÀNG</h4>
                                    <div class='items-total d-flex justify-content-between'>
                                        <div><span class='cart-float-count'>$count </span> sách</span></div>
                                        <span>Tổng tiền</span>
                                    </div>
                                    <div class='total_amount text-right'>
                                        <span class='tongtien'>$tongtien VNĐ</span>
                                    </div>
                                    <div class='mini_action checkout'>
                                        <a class='checkout__btn' href='./payment.php'>THANH TOÁN</a>
                                    </div>
                                    <div class='single__items'>
                                    <div class='miniproduct'>";
    if(!isset($_SESSION['cart']) || $_SESSION['cart']=="") {
        
    }else{
        foreach($_SESSION['cart'] as $item){
            echo "
                                                <div class='item01 d-flex'>
                                                <div class='thumb'>
                                                        <a href='#'>
                                                            <img src='./images/books/$item[2]' alt='product images'>
                                                        </a>
                                                    </div>
                                                    <div class='content'>
                                                        <h6><a href='#'>$item[1]</a></h6>
                                                        <span class='prize'>$item[3] VNĐ</span>
                                                        <div class='product_prize d-flex justify-content-between'>
                                                            <span class='qun'>SL: $item[4]</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                
                                                ";
        }
    }
                                    
                                   echo "</div>
                                   </div>
                                    <div class='mini_action cart'>
                                        <a class='cart__btn' href='./product_cart.php'>XEM CHI TIẾT GIỎ HÀNG</a>
                                    </div>
                                </div>
                            </div>
                            
                            ";
    ?>
    <!-- End Shopping Cart -->
</li>
<li class="setting__bar__icon">
    <a class="setting__active" href="#"></a>
    <div class="searchbar__content setting__block">
        <div class="content-inner">
            <div class="switcher-currency">
                <strong class="label switcher-label">
                    <span><?php
                    if(!isset($_SESSION['user']) ||$_SESSION['user']=='') {
                        echo "Xin chào";
                    }else{
                        $ten = $_SESSION['user'][0];
                        echo "Xin chào $ten";
                    }
                    ?></span>
                </strong>
                <div class="switcher-options">
                    <div class="switcher-currency-trigger">
                        <div class="setting__menu">
                            <span><?php
                            if(!isset($_SESSION['user']) || $_SESSION['user']=='') {
                                echo "<a href='./login.php'>Đăng Nhập</a>";
                            }else{
                                echo "<a href='./logout.php'>Đăng Xuất</a>";
                            }
                            ?></span>
                            <br />
                            <span><a href="./register.php">Tạo Tài Khoản</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
<script src="./Scripts/active.js"></script>