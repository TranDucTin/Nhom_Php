<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quên mật khẩu</title>

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
    <?php session_start() ?>
    <?php require './XLquenmk.php' ?>
    <div class="wrapper" id="wrapper" runat="server" ClientIDMode="Static">
        <?php require './header_nav.php' ?>
        <div class="ht__bradcaump__area bg-image--2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Cấp lại mật khẩu</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="my_account_area row justify-content-center pt--50 pb--55 bg--white">
            <div class="container-fluid row justify-content-center">
                <div class="my__account__wrapper col-md-6">
                    <?php if (isset($_SESSION['response'])) { ?>
                    <div class="alert alert-<?php echo $_SESSION['res_type']; ?> alert-dismissible text-center">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <b><?php echo $_SESSION['response']; ?></b>
                    </div>
                    <?php } unset($_SESSION['response']); ?>
                    <h3 class="account__title text-center">Mật khẩu</h3>
                    <form action="" method="post">
                        <div class="account__form">
                            <div class="input__box">
                                <label for="Username">Nhập mã bảo mật</label>
                                <input class="text-box single-line" data-val="true"
                                    data-val-required="Tên tài khoản được bỏ trống" id="key" name="key" type="text"
                                    value="" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="key"
                                    data-valmsg-replace="true"><?php if(isset($validationkey)) { echo $validationkey; 
                                                               } ?></span>
                            </div>
                            <div class="input__box">
                                <label for="Username">Nhập mật khẩu mới</label>
                                <input class="text-box single-line" data-val="true"
                                    data-val-required="Tên tài khoản được bỏ trống" id="Passnew" name="Passnew"
                                    type="text" value="" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="Passnew"
                                    data-valmsg-replace="true"></span>
                            </div>
                            <div class="form__btn row justify-content-center align-items-center">
                                <button name="createpass">Next</button>
                            </div>
                            <label class="label-for-checkbox">
                                <span>Bạn chưa có tài khoản?
                                    <a class="" style="color: #2f5aa2" href="./register.php">Đăng kí ngay</a></span>
                            </label>
                            <a class="forget_pass" href="./login.php">Đăng nhập?</a>
                        </div>
                    </form>
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