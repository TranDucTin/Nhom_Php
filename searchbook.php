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
        <?php require './header_nav.php' ?>

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
                        <!-- list and order -->
                        <?php 
                        require_once './connect_DB.php';
                        require './panigation_page_search.php';
                        require './list_order.php'
                        ?>
                        <div class="tab__container">
                            <div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
                                <div class="row">
                                    <?php
                                    require_once './connect_DB.php';
                                    require './panigation_page_search.php';
                                    if(mysqli_num_rows($result)!=0) { 
                                        while($row = mysqli_fetch_array($result)){
                                            $giagiam = $row[2]*((100-$row[3])/100);
                                            include './book_cart.php';
                                        }
                                    } 
                                    ?>
                                </div>
                                <div class="pagination-container">
                                    <ul class="wn__pagination">
                                        <?php require './panigation_link_search.php' ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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