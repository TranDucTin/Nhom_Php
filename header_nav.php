<header id="wn__header" class="header__area header__absolute sticky__header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                <div class="logo">
                    <a href="./index.php">
                        <img src="./images/logo/logo.png" alt="logo images" />
                    </a>
                </div>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <nav class="mainmenu__nav">
                    <ul class="meninmenu d-flex justify-content-start">
                        <li class="drop with--one--item">
                            <a href="./index.php">TRANG CHỦ</a>
                        </li>

                        <li class="drop">
                            <a href="danhmuc.php">SÁCH</a>
                            <div class="megamenu mega03">
                                <!-- list_category -->
                                <?php require './list_categorygroup.php' ?>
                            </div>
                        </li>
                        <li class="drop">
                            <a href="/danh-muc">TRẺ EM</a>
                            <div class="megamenu mega01">
                                <ul class="item item01">
                                    <li class="title">YÊU THÍCH NHẤT</li>
                                    <li>
                                        <a href="/chi-tiet/harry-potter-va-ham-chua-bi-mat">Harry Potter v&#224;
                                            H&#242;n đ&#225; Ph&#249;
                                            thuỷ</a>
                                    </li>
                                    <li>
                                        <a href="/chi-tiet/harry-potter-va-ham-chua-bi-mat">Harry Potter v&#224;
                                            Hầm chứa b&#237; mật</a>
                                    </li>
                                    <li>
                                        <a href="/chi-tiet/harry-potter-va-tu-nhan-azkaban">Harry Potter v&#224;
                                            T&#249; nh&#226;n Azkaban</a>
                                    </li>
                                    <li>
                                        <a href="/chi-tiet/harry-potter-va-chiec-coc-lua">Harry Potter v&#224;
                                            Chiếc cốc lửa</a>
                                    </li>
                                    <li>
                                        <a href="/chi-tiet/harry-potter-va-menh-lenh-phuong-hoang">Harry Potter
                                            v&#224; Mệnh lệnh Phượng ho&#224;ng</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="/danh-gia">REVIEW</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                    <li class="shop_search">
                        <a class="search__active" href="#"></a>
                    </li>
                    <li class="wishlist"><a href="#"></a></li>
                    <li class="shopcart">
                        <!-- Start Shopping Cart -->

                        <a class="cartbox_active" href="#"><span class="product_qun"><span
                                    class="cart-float-count">0</span></span></a>

                        <div class="block-minicart minicart__active">
                            <div class="minicart-content-wrapper" id="cart-float-expand">
                                <h4>GIỎ HÀNG</h4>
                                <div class="items-total d-flex justify-content-between">
                                    <span>0 sách</span>
                                    <span>Tổng tiền</span>
                                </div>
                                <div class="total_amount text-right">
                                    <span>0 VNĐ</span>
                                </div>
                                <div class="mini_action checkout">
                                    <a class="checkout__btn" href="/gio-hang/thanh-toan">THANH TOÁN</a>
                                </div>
                                <div class="single__items">
                                    <div class="miniproduct"></div>
                                </div>
                                <div class="mini_action cart">
                                    <a class="cart__btn" href="/gio-hang">XEM CHI TIẾT GIỎ HÀNG</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Shopping Cart -->
                    </li>
                    <li class="setting__bar__icon">
                        <a class="setting__active" href="#"></a>
                        <div class="searchbar__content setting__block">
                            <div class="content-inner">
                                <div class="switcher-currency">
                                    <strong class="label switcher-label">
                                        <span>Xin chào </span>
                                    </strong>
                                    <div class="switcher-options">
                                        <div class="switcher-currency-trigger">
                                            <div class="setting__menu">
                                                <span><a href="./login.php">Đăng Nhập</a></span>
                                                <br />
                                                <span><a href="./register.php">Tạo Tài Khoản</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Start Mobile Menu -->
        <div class="row d-none">
            <div class="col-lg-12 d-none">
                <nav class="mobilemenu__nav">
                    <ul class="meninmenu">
                        <li><a href="./NhomPHP">Trang chủ</a></li>
                        <li>
                            <a href="#">Thể loại</a>
                            <ul>
                                <?php require "./list_category.php" ?>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Đánh giá</a>
                        </li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End Mobile Menu -->
        <div class="mobile-menu d-block d-lg-none"></div>
        <!-- Mobile Menu -->
    </div>
</header>
<div class="brown--color box-search-content search_active block-bg close__top">
    <form action="./searchbook.php" class="minisearch" id="search_mini_form" method="get">
        <div class="field__search">
            <input class="txtSearch" name="searchString" type="text" placeholder="Tìm kiếm sách của bạn ngay tại đây"
                autocomplete="on" />
            <div class="action">
                <button type="submit"><i class="zmdi zmdi-search"></i></button>
            </div>
        </div>
    </form>
    <div class="close__wrap">
        <span>Đóng</span>
    </div>
</div>