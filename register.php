<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng k&#253; - My ASP.NET Application</title>

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
                            <h2 class="bradcaump-title">Đăng k&#253;</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="my_account_area row justify-content-center pt--50 pb--55 bg--white">
            <div class="container row justify-content-center">
                <div class="my__account__wrapper col-md-6">
                    <h3 class="account__title">Đăng k&#253;</h3>
                    <form action="/tai-khoan/dang-ky" method="post">
                        <div class="account__form">
                            <div class="input__box">
                                <label for="Username">T&#234;n t&#224;i khoản</label>
                                <input class="text-box single-line" data-val="true"
                                    data-val-length="Tên tài khoản ít nhất phải dài hơn 6 ký tự."
                                    data-val-length-max="28" data-val-length-min="6"
                                    data-val-required="Tên tài khoản không được bỏ trống" id="Username" name="Username"
                                    type="text" value="" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="Username"
                                    data-valmsg-replace="true"></span>
                            </div>
                            <div class="input__box">
                                <label for="Password">Mật khẩu</label>
                                <input class="text-box single-line password" data-val="true"
                                    data-val-length="Mật khẩu ít nhất phải dài hơn 6 ký tự." data-val-length-max="100"
                                    data-val-length-min="6" data-val-required="Mật khẩu không được bỏ trống"
                                    id="Password" name="Password" type="password" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="Password"
                                    data-valmsg-replace="true"></span>
                            </div>
                            <div class="input__box">
                                <label for="ConfirmPassword">X&#225;c nhận mật khẩu</label>
                                <input class="text-box single-line password" data-val="true"
                                    data-val-equalto="Xác nhận mật khẩu phải trùng với mật khẩu"
                                    data-val-equalto-other="*.Password"
                                    data-val-required="Xác nhận mật khẩu không được bỏ trống" id="ConfirmPassword"
                                    name="ConfirmPassword" type="password" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="ConfirmPassword"
                                    data-valmsg-replace="true"></span>
                            </div>
                            <div class="input__box">
                                <label for="Email">Email</label>
                                <input class="text-box single-line" data-val="true" data-val-email="Email không hợp lệ"
                                    data-val-required="Email không được bỏ trống" id="Email" name="Email" type="email"
                                    value="" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="Email"
                                    data-valmsg-replace="true"></span>
                            </div>
                            <div class="input__box">
                                <label for="CustomerName">T&#234;n kh&#225;ch h&#224;ng</label>
                                <input class="text-box single-line" data-val="true"
                                    data-val-length="The field Tên khách hàng must be a string with a maximum length of 100."
                                    data-val-length-max="100" data-val-required="Tên khách hàng không được bỏ trống"
                                    id="CustomerName" name="CustomerName" type="text" value="" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="CustomerName"
                                    data-valmsg-replace="true"></span>
                            </div>
                            <div class="input__box">
                                <label for="Address">Địa chỉ</label>
                                <input class="text-box single-line" data-val="true"
                                    data-val-length="The field Địa chỉ must be a string with a maximum length of 100."
                                    data-val-length-max="100" data-val-required="Địa chỉ không được bỏ trống"
                                    id="Address" name="Address" type="text" value="" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="Address"
                                    data-valmsg-replace="true"></span>
                            </div>
                            <div>
                                <label for="Gender" style="margin-right: 20px">Giới t&#237;nh</label>
                                Nam
                                <input checked="checked" data-val="true"
                                    data-val-required="The Giới tính field is required." id="Gender" name="Gender"
                                    type="radio" value="False" />
                                Nữ
                                <input id="Gender" name="Gender" type="radio" value="True" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="Gender"
                                    data-valmsg-replace="true"></span>
                            </div>
                            <div class="input__box">
                                <label for="Birth">Ng&#224;y sinh</label>
                                <input class="text-box single-line" data-val="true"
                                    data-val-date="The field Ngày sinh must be a date."
                                    data-val-required="Ngày sinh không được bỏ trống" id="Birth" name="Birth"
                                    type="datetime" value="" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="Birth"
                                    data-valmsg-replace="true"></span>
                            </div>
                            <div class="input__box">
                                <label for="PhoneNumber">Số điện thoại</label>
                                <input class="text-box single-line" data-val="true"
                                    data-val-length="The field Số điện thoại must be a string with a maximum length of 20."
                                    data-val-length-max="20" data-val-regex="Số điện thoại không hợp lệ"
                                    data-val-regex-pattern="^(\d{10})$"
                                    data-val-required="Số điện thoại không được bỏ trống" id="PhoneNumber"
                                    name="PhoneNumber" type="text" value="" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="PhoneNumber"
                                    data-valmsg-replace="true"></span>
                            </div>
                            <div class="form__btn row justify-content-center align-items-center">
                                <button>Đăng ký</button>
                            </div>
                            <label class="label-for-checkbox">
                                <span>Bạn đã có tài khoản?
                                    <a class="" style="color: #2f5aa2" href="./login.html">Đăng nhập ngay</a></span>
                            </label>
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