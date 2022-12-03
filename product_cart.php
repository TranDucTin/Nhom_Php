<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Giỏ h&#224;ng</title>

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
<!-- <div id="msg" class="alert alert-success" role="alert">@ViewBag.msg</div> -->

<body>
    <div class="wrapper" id="wrapper" runat="server" ClientIDMode="Static">
        <?php 
        if(empty($_SESSION['cart'])) {
            header('Location: ./danhmuc.php');
        }
        ?>
        <?php require './header_nav.php' ?>
        <div class="ht__bradcaump__area bg-image--2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Giỏ h&#224;ng</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container" id="ajax-cart">

                <?php require 'product_cart_content.php' ?>
                <!--  -->
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