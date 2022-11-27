<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt h&#224;ng th&#224;nh c&#244;ng - My ASP.NET Application</title>

    <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

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
                            <h2 class="bradcaump-title">Đặt h&#224;ng th&#224;nh c&#244;ng</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="wn__checkout__area section-padding--lg bg__white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12 text-center">
                        <h3>Bạn đã đặt hàng thành công!!!</h3>
                        <h5>Đơn hàng đang được chờ duyệt...</h5>
                        <a href="./index.php">Trở về trang chủ</a>
                    </div>
                </div>
            </div>
        </section>



        <?php require './footer.php' ?>

    </div>

    <script src="./Scripts/vendor/jquery-3.2.1.min.js"></script>
    <script src="./Scripts/vendor/jquery-ui.js"></script>
    <script src="./Scripts/popper.min.js"></script>

    <script src="./Scripts/plugins.js"></script>
    <script src="./Scripts/active.js"></script>


    <script src="./assets/client/js/controller/baseController.js"></script>


</body>

</html>