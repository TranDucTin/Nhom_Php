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
     $querybookdetail="SELECT * FROM `book` JOIN author on book.AuthorID = author.AuthorID JOIN book_category ON book.BookID = book_category.BookID JOIN category ON book_category.CategoryID = category.CategoryID WHERE book.BookID = '$id'";
     $resultbookdetail=mysqli_query($conn, $querybookdetail);
    if(mysqli_num_rows($resultbookdetail)!=0) {
        $rowdetail = mysqli_fetch_array($resultbookdetail);
    }
    ?>
    <div class="wrapper" id="wrapper" runat="server" ClientIDMode="Static">
        <?php require "./header_nav.php" ?>
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
                                            <img src="./images/books/<?php echo $rowdetail['Avatar'] ?>" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="product__info__main">
                                        <h1><?php echo $rowdetail['BookName'] ?></h1>
                                        <div class="price-box d-flex">
                                            <span
                                                class="_price"><?php echo $rowdetail['Price']*((100-$rowdetail['DiscountPercent'])/100).'VNĐ' ?></span>
                                            <span class="_old-price"><?php echo $rowdetail['Price'].'VNĐ' ?></span>
                                        </div>
                                        <h6>Tác giả: <?php echo $rowdetail['AuthorName'] ?></h6>
                                        <h6>Số lượng tồn: <?php echo $rowdetail['Quantity'] ?></h6>
                                        <div class="product__overview">
                                            <h6>Mô tả:</h6>
                                            <p><?php echo $rowdetail['BookDescription'] ?></p>
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
                                                <a href="#"><?php echo $rowdetail['CategoryName'] ?></a>
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
                                            <li>• Loại bìa: <?php echo $rowdetail['BookCover'] ?></li>
                                            <li>• Số trang: <?php echo $rowdetail['Pages'] ?></li>
                                            <li>• Nhà Xuất bản: <?php echo $rowdetail['Publisher'] ?></li>
                                            <li>• Năm xuất bản: <?php echo $rowdetail['PublicByDate'] ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Tab Content -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
                        <?php require "./category_nav.php" ?>
                    </div>
                </div>
            </div>
        </div>

        <?php require "./footer.php" ?>
    </div>

    <script src="./Scripts/vendor/jquery-3.2.1.min.js"></script>
    <script src="./Scripts/vendor/jquery-ui.js"></script>
    <script src="./Scripts/popper.min.js"></script>

    <script src="./Scripts/plugins.js"></script>
    <script src="./Scripts/active.js"></script>

    <script src="./assets/client/js/controller/baseController.js"></script>
</body>

</html>