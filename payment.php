<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thanh to&#225;n - My ASP.NET Application</title>

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
    require './KTdangnhap.php';
    require './header_nav.php';
    ?>

    <div class="ht__bradcaump__area bg-image--2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Thanh to&#225;n</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="/Cart/Submit" method="post">
        <section class="wn__checkout__area section-padding--lg bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="customer_details">
                            <h3>Thông tin hoá đơn</h3>
                            <div class="customar__field">
                                <div class="margin_between">
                                    <div class="input_box space_between">
                                        <label>Tên khách hàng <span>*</span></label>
                                        <input type="text" value="<?php echo $_SESSION['user'][0] ?>" />
                                    </div>
                                    <div class="input_box space_between">
                                        <label>Số điện thoại <span>*</span></label>
                                        <input type="text" value="<?php echo $_SESSION['user'][1] ?>" />
                                    </div>
                                </div>
                                <div class="input_box">
                                    <label>Email <span>*</span></label>
                                    <input type="text" value="<?php echo $_SESSION['user'][2] ?>" />
                                </div>
                                <div class="input_box">
                                    <label>Địa chỉ <span>*</span></label>
                                    <input type="text" placeholder="Địa chỉ của bạn" name="address"
                                        value="<?php echo $_SESSION['user'][3] ?>" />
                                </div>
                                <div class="input_box">
                                    <label>Ghi chú </label>
                                    <input type="text" placeholder="thêm ghi chú" name="note" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 md-mt-40 sm-mt-40">
                        <div class="wn__order__box">
                            <h3 class="onder__title">Giỏ hàng của bạn</h3>
                            <ul class="order__total">
                                <li>Sách</li>
                                <li>Tổng</li>
                            </ul>
                            <ul class="order_product">
                                <li>
                                    Harry Potter v&#224; Bảo bối Tử thần x 1

                                    <span>9,000 VNĐ</span>
                                </li>
                            </ul>
                            <ul class="shipping__method">
                                <li>
                                    Giao hàng
                                    <ul>
                                        <li>
                                            <input name="payment" value="PM-001" checked="checked" type="radio" />
                                            <label>Thanh to&#225;n tiền mặt</label>
                                        </li>
                                        <li>
                                            <input name="payment" value="PM-002" checked="checked" type="radio" />
                                            <label>Thanh to&#225;n qua thẻ ng&#226;n h&#224;ng</label>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="total__amount">
                                <li>Tổng tiền <span>9,000 VNĐ</span></li>
                                <li class="text-center">
                                    <input type="submit" value="Đặt hàng" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <?php 
    require './footer.php';
    ?>
    </div>

    <script src="./Scripts/vendor/jquery-3.2.1.min.js"></script>
    <script src="./Scripts/vendor/jquery-ui.js"></script>
    <script src="./Scripts/popper.min.js"></script>

    <script src="./Scripts/plugins.js"></script>
    <script src="./Scripts/active.js"></script>

    <script src="./assets/client/js/controller/baseController.js"></script>
</body>

</html>