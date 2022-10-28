<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DANH MỤC - My ASP.NET Application</title>

    <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" />

    <link href="./Content/bootstrap.min.css" rel="stylesheet" />
    <link href="./Content/plugins.css" rel="stylesheet" />
    <link href="./Content/style.css" rel="stylesheet" />
    <link href="./Content/custom.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper" id="wrapper" runat="server" ClientIDMode="Static">
        <header id="wn__header" class="header__area header__absolute sticky__header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                        <div class="logo">
                            <a href="/">
                                <img src="./images/logo/logo.png" alt="logo images" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <nav class="mainmenu__nav">
                            <ul class="meninmenu d-flex justify-content-start">
                                <li class="drop with--one--item">
                                    <a href="/">TRANG CHỦ</a>
                                </li>

                                <li class="drop">
                                    <a href="/danh-muc">SÁCH</a>
                                    <div class="megamenu mega03">
                                        <ul class="item item03">
                                            <li class="title">THỂ LOẠI</li>
                                            <li><a href="/danh-muc/kinh-te">Kinh Tế</a></li>
                                            <li><a href="/danh-muc/van-hoc">Văn Học</a></li>
                                            <li><a href="/danh-muc/nau-an">Nấu Ăn</a></li>
                                            <li>
                                                <a href="/danh-muc/suc-khoe-the-thao">Sức Khoẻ &amp; Thể Thao</a>
                                            </li>
                                            <li><a href="/danh-muc/lich-su">Lịch Sử</a></li>
                                        </ul>
                                        <ul class="item item03">
                                            <li class="title">ĐƯỢC Y&#202;U TH&#205;CH NHẤT</li>
                                            <li><a href="/danh-muc/tieu-thuyet">Tiểu thuyết</a></li>
                                            <li>
                                                <a href="/danh-muc/ton-giao">T&#244;n Gi&#225;o</a>
                                            </li>
                                            <li>
                                                <a href="/danh-muc/lang-mang">L&#227;ng Mạng</a>
                                            </li>
                                            <li><a href="/danh-muc/vien-tuong">Viễn Tưởng</a></li>
                                            <li><a href="/danh-muc/tieu-su">Tiểu Sử</a></li>
                                        </ul>
                                        <ul class="item item03">
                                            <li class="title">TRỌN BỘ</li>
                                            <li><a href="/danh-muc/doi-song">Khoa Học</a></li>
                                            <li><a href="/danh-muc/doi-song">Đời Sống</a></li>
                                            <li>
                                                <a href="/danh-muc/hoan-thien">Ho&#224;n Thiện Bản Th&#226;n</a>
                                            </li>
                                            <li>
                                                <a href="/danh-muc/bat-dong-san">Bất Động Sản</a>
                                            </li>
                                            <li>
                                                <a href="/danh-muc/doanh-nhan">Danh Nh&#226;n</a>
                                            </li>
                                            <li>
                                                <a href="/danh-muc/trinh-tham">Trinh Th&#225;m</a>
                                            </li>
                                        </ul>
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
                                                        <span><a href="/tai-khoan/dang-nhap">Đăng Nhập</a></span>
                                                        <br />
                                                        <span><a href="/tai-khoan/dang-ky">Tạo Tài Khoản</a></span>
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
                                <li><a href="/">Trang chủ</a></li>
                                <li>
                                    <a href="/danh-muc">Thể loại</a>
                                    <ul>
                                        <li><a href="kinh-te">Kinh Tế</a></li>
                                        <li><a href="van-hoc">Văn Học</a></li>
                                        <li><a href="nau-an">Nấu Ăn</a></li>
                                        <li>
                                            <a href="suc-khoe-the-thao">Sức Khoẻ &amp; Thể Thao</a>
                                        </li>
                                        <li><a href="lich-su">Lịch Sử</a></li>
                                        <li><a href="tieu-thuyet">Tiểu thuyết</a></li>
                                        <li><a href="ton-giao">T&#244;n Gi&#225;o</a></li>
                                        <li><a href="lang-mang">L&#227;ng Mạng</a></li>
                                        <li><a href="vien-tuong">Viễn Tưởng</a></li>
                                        <li><a href="tieu-su">Tiểu Sử</a></li>
                                        <li><a href="doi-song">Khoa Học</a></li>
                                        <li><a href="doi-song">Đời Sống</a></li>
                                        <li>
                                            <a href="hoan-thien">Ho&#224;n Thiện Bản Th&#226;n</a>
                                        </li>
                                        <li><a href="bat-dong-san">Bất Động Sản</a></li>
                                        <li><a href="doanh-nhan">Danh Nh&#226;n</a></li>
                                        <li><a href="trinh-tham">Trinh Th&#225;m</a></li>
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
            <form action="/danh-muc" class="minisearch" id="search_mini_form" method="get">
                <div class="field__search">
                    <input class="txtSearch" name="searchString" type="text"
                        placeholder="Tìm kiếm sách của bạn ngay tại đây" autocomplete="on" />
                    <div class="action">
                        <button type="submit"><i class="zmdi zmdi-search"></i></button>
                    </div>
                </div>
            </form>
            <div class="close__wrap">
                <span>Đóng</span>
            </div>
        </div>

        <div class="ht__bradcaump__area bg-image--2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">DANH MỤC</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-shop-sidebar right--sidebar bg--white section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
                        <!-- // category_nav -->
                        <?php require './category_nav.php' ?>
                    </div>
                    <div class="col-lg-9 col-12 order-1 order-lg-2">
                        <div class="row">
                            <div class="col-lg-12">
                                <div
                                    class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
                                    <p>Hiển thị sách 1 - 6 trên tổng 6 sách</p>
                                    <div class="orderby__wrapper">
                                        <span>Sắp xếp theo</span>
                                        <select class="shot__byselect">
                                            <option>Mới nhất</option>
                                            <option>Giá từ thấp đến cao</option>
                                            <option>Giá từ cao đến thấp</option>
                                            <option>Bán chạy</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab__container">
                            <div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
                                <div class="row">
                                    <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="product__thumb">
                                            <a class="first__img" href="./detail.php?id=BK-00001">
                                                <img src="./images/books/BK-00001.jpg" alt="product image" />
                                            </a>
                                            <div class="hot__box">
                                                <span class="hot-label"> - 10 %</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4>
                                                <a href="single-product.html">Harry Potter v&#224; H&#242;n đ&#225;
                                                    Ph&#249;
                                                    thuỷ</a>
                                            </h4>
                                            <ul class="prize d-flex">
                                                <li>9000 VNĐ</li>
                                                <li class="old_prize">10000 VNĐ</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li>
                                                            <button class="cart addItem" title="Thêm vào giỏ hàng"
                                                                href="#" data-id="BK-00001">
                                                                <i class="bi bi-shopping-bag4"></i>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="wishlist" title="Yêu thích"
                                                                href="wishlist.html">
                                                                <i class="bi bi-shopping-cart-full"></i>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-toggle="modal" title="Quick View"
                                                                class="quickview modal-view detail-link"
                                                                href="#productmodal">
                                                                <i class="bi bi-search"></i>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pagination-container">
                                    <ul class="wn__pagination">
                                        <li class="page-item active"><a>1</a></li>
                                        <li class="page-item">
                                            <a href="/danh-muc?page=2">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="/danh-muc?page=3">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="/danh-muc?page=4">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="/danh-muc?page=5">5</a>
                                        </li>
                                        <li class="page-item PagedList-skipToNext">
                                            <a href="/danh-muc?page=2" rel="next">»</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
            <div class="footer-static-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer__widget footer__menu">
                                <div class="ft__logo">
                                    <a href="index.html">
                                        <img src="./images/logo/3.png" alt="logo" />
                                    </a>
                                    <p>
                                        Đây là công sức, mồ hôi nước mắt, một câu chuyện dài...
                                    </p>
                                    <h1>〒▽〒</h1>
                                </div>
                                <div class="footer__content">
                                    <ul class="social__net social__net--2 d-flex justify-content-center">
                                        <li>
                                            <a href="#"><i class="bi bi-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="bi bi-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="bi bi-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="bi bi-linkedin"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="bi bi-youtube"></i></a>
                                        </li>
                                    </ul>
                                    <ul class="mainmenu d-flex justify-content-center">
                                        <li><a href="">Trending</a></li>
                                        <li><a href="">BÁN CHẠY NHẤT</a></li>
                                        <li><a href="">TẤT CẢ</a></li>
                                        <li><a href="">YÊU THÍCH</a></li>
                                        <li><a href="">BLOG</a></li>
                                        <li><a href="">PHẢN HỒI</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright__wrapper">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 col-sm-12 row justify-content-center">
                            <div class="payment text-right">
                                <img src="./images/icons/payment.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="./Scripts/vendor/jquery-3.2.1.min.js"></script>
    <script src="./Scripts/vendor/jquery-ui.js"></script>
    <script src="./Scripts/popper.min.js"></script>

    <script src="./Scripts/plugins.js"></script>
    <script src="./Scripts/active.js"></script>

    <script src="./assets/client/js/controller/baseController.js"></script>

    <script src="./assets/client/js/controller/bookController.js"></script>
</body>

</html>