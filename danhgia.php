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

    <form action="themdanhgia.php" method="post">
        <section class="wn__checkout__area section-padding--lg bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="customer_details">
                            <h3>Thông tin khách hàng</h3>
                            <div class="customar__field">
                                <div class="margin_between">
                                    <div class="input_box space_between">
                                        <label>Tên khách hàng <span>*</span></label>
                                        <input type="text" required name='tenkh'
                                            value="<?php echo $_SESSION['user'][0] ?>" />
                                    </div>
                                    <div class="input_box space_between">
                                        <label>Số điện thoại <span>*</span></label>
                                        <input type="text" required name='sdt'
                                            value="<?php echo $_SESSION['user'][1] ?>" />
                                    </div>
                                </div>
                                <div class="input_box">
                                    <label>Địa chỉ <span>*</span></label>
                                    <input type="text" required placeholder="Địa chỉ của bạn" name="address"
                                        value="<?php echo $_SESSION['user'][3] ?>" />
                                </div>
                                <div class="input_box">
                                    <label>Nội dung </label>
                                    <!-- <input type="text" required placeholder="thêm nội dung" name="note" /> -->
                                    <textarea name="noidung" placeholder="thêm nội dung" required id="noidung" cols="80"
                                        rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 ">
                        <d class="wn__order__box">
                            <h3 class="onder__title">Bản đồ</h3>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.63697370623!2d109.19619071463745!3d12.272828191317034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317067f22334adfb%3A0x47d11b16b8dbe1c8!2zTmjDoCBTw6FjaCBWxKluaCBQaMaw4bubYw!5e0!3m2!1svi!2s!4v1640869122529!5m2!1svi!2s"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <button type="submit" name='submit' class="btn btn-success">Gửi đánh giá</button>
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