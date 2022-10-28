<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ - My ASP.NET Application</title>

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
        <!-- header_nav -->
        <?php require './header_nav.php' ?>
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
        <!-- header_slide -->
        <?php require './header_slide.php' ?>
        <section class="wn__product__area brown--color pt--80 pb--30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title text-center">
                            <h2 class="title__be--2">
                                Sách <span class="color--theme">Mới</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- Start Single Tab Content -->
                <div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
                    <?php
                    require './connect_DB.php';
                    $query="SELECT * FROM book ORDER BY book.CreateByDate DESC LIMIT 8";
                    $result=mysqli_query($conn, $query);
                    if(mysqli_num_rows($result)!=0) { 
                        while($row = mysqli_fetch_array($result)){
                            $giagiam = $row[2]*((100-$row[3])/100);
                            echo "
                            <div class='product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12'>
                        <div class='product__thumb'>
                            <a class='first__img' href='/chi-tiet/harry-potter-va-bao-boi-tu-than'>
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
                                            <button class='cart addItem' title='Thêm vào giỏ hàng' href='#'
                                                data-id='BK-00007'>
                                                <i class='bi bi-shopping-bag4'></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class='wishlist' title='Yêu thích' href='wishlist.html'>
                                                <i class='bi bi-shopping-cart-full'></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button data-toggle='modal' title='Quick View'
                                                class='quickview modal-view detail-link' href='#productmodal'>
                                                <i class='bi bi-search'></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                            ";
                        }
                    }
                    ?>
                </div>
                <!-- End Single Tab Content -->
            </div>
        </section>
        <!-- footer -->
        <?php require './footer.php' ?>
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