<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chi tiết S&#225;ch - My ASP.NET Application</title>

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
    <?php 
    $row = array();
    $id = $_GET['id'] ?? 'BK-00001';
     require './connect_DB.php';
     $query="SELECT * FROM `book` JOIN author on book.AuthorID = author.AuthorID JOIN book_category ON book.BookID = book_category.BookID JOIN category ON book_category.CategoryID = category.CategoryID WHERE book.BookID = '$id'";
     $result=mysqli_query($conn, $query);
    if(mysqli_num_rows($result)!=0) {
        $row = mysqli_fetch_array($result);
    }
    ?>
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
                            <h2 class="bradcaump-title">Chi tiết S&#225;ch</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="maincontent bg--white pt--80 pb--55">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-12">
                        <div class="wn__single__product">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="wn__fotorama__wrapper">
                                        <div class="fotorama wn__fotorama__action" data-nav="thumbs">
                                            <img src="./images/books/<?php echo $row['Avatar'] ?>" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="product__info__main">
                                        <h1><?php echo $row['BookName'] ?></h1>
                                        <div class="price-box d-flex">
                                            <span
                                                class="_price"><?php echo $row['Price']*((100-$row['DiscountPercent'])/100).'VNĐ' ?></span>
                                            <span class="_old-price"><?php echo $row['Price'].'VNĐ' ?></span>
                                        </div>
                                        <h6>Tác giả: <?php echo $row['AuthorName'] ?></h6>
                                        <h6>Số lượng tồn: <?php echo $row['Quantity'] ?></h6>
                                        <div class="product__overview">
                                            <h6>Mô tả:</h6>
                                            <p><?php echo $row['BookDescription'] ?></p>
                                        </div>
                                        <div class="box-tocart d-flex">
                                            <span>Số lượng</span>
                                            <input id="qty" class="input-text qty" name="qty" min="1" max="10" value="1"
                                                title="Qty" type="number" />
                                            <div class="addtocart__actions">
                                                <button id="btnAddItem" class="tocart" type="submit"
                                                    title="Add to Cart">
                                                    Thêm vào giỏ
                                                </button>
                                            </div>
                                            <div class="product-addto-links clearfix">
                                                <a class="wishlist" href="#"></a>
                                            </div>
                                        </div>
                                        <div class="product_meta">
                                            <span class="posted_in">
                                                Thể loại:
                                                <a href="#"><?php echo $row['CategoryName'] ?></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__info__detailed">
                            <div class="pro_details_nav nav justify-content-start" role="tablist">
                                <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details"
                                    role="tab">Details</a>
                            </div>
                            <div class="tab__container">
                                <!-- Start Single Tab Content -->
                                <div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
                                    <div class="description__attribute">
                                        <p></p>
                                        <h4>Thông tin Sách</h4>
                                        <ul>
                                            <li>• Loại bìa: <?php echo $row['BookCover'] ?></li>
                                            <li>• Số trang: <?php echo $row['Pages'] ?></li>
                                            <li>• Nhà Xuất bản: <?php echo $row['Publisher'] ?></li>
                                            <li>• Năm xuất bản: <?php echo $row['PublicByDate'] ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Tab Content -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
                        <div class="shop__sidebar">
                            <aside class="wedget__categories poroduct--cat">
                                <h3 class="wedget__title">Danh mục Thể loại</h3>
                                <ul>
                                    <li>
                                        <a href="/danh-muc/kinh-te">Kinh Tế <span>(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="/danh-muc/van-hoc">Văn Học <span>(4)</span></a>
                                    </li>
                                    <li>
                                        <a href="/danh-muc/nau-an">Nấu Ăn <span>(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="/danh-muc/suc-khoe-the-thao">Sức Khoẻ &amp; Thể Thao
                                            <span>(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="/danh-muc/lich-su">Lịch Sử <span>(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="/danh-muc/tieu-thuyet">Tiểu thuyết <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="/danh-muc/ton-giao">T&#244;n Gi&#225;o <span>(0)</span></a>
                                    </li>
                                    <li>
                                        <a href="/danh-muc/lang-mang">L&#227;ng Mạng <span>(3)</span></a>
                                    </li>
                                    <li>
                                        <a href="/danh-muc/vien-tuong">Viễn Tưởng <span>(7)</span></a>
                                    </li>
                                    <li>
                                        <a href="/danh-muc/tieu-su">Tiểu Sử <span>(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="/danh-muc/doi-song">Khoa Học <span>(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="/danh-muc/doi-song">Đời Sống <span>(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="/danh-muc/hoan-thien">Ho&#224;n Thiện Bản Th&#226;n
                                            <span>(0)</span></a>
                                    </li>
                                    <li>
                                        <a href="/danh-muc/bat-dong-san">Bất Động Sản <span>(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="/danh-muc/doanh-nhan">Danh Nh&#226;n <span>(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="/danh-muc/trinh-tham">Trinh Th&#225;m <span>(4)</span></a>
                                    </li>
                                </ul>
                            </aside>
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
</body>

</html>