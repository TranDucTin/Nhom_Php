<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Giỏ h&#224;ng - My ASP.NET Application</title>

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
    <?php session_start(); ?>
    <div class="wrapper" id="wrapper" runat="server" ClientIDMode="Static">
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
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                        <div id="cart-table-container">
                            <div class="table-content wnro__table table-responsive">
                                <table>
                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-thumbnail">Ảnh</th>
                                            <th class="product-name">Sách</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product-quantity">Số lượng</th>
                                            <th class="product-subtotal">Tổng cộng</th>
                                            <th class="product-remove">Xoá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        if(!isset($_SESSION['cart']) ||empty($_SESSION['cart'])) {
                                            echo '<tr class="text-center">
                                            <td colspan="6">Giỏ hàng trống</td>
                                        </tr>';
                                        }else{
                                            foreach($_SESSION['cart'] as $sach){
                                                $tongtien=$sach[3]*$sach[4];
                                                echo "
                                                <tr>
                                                <td class='product-thumbnail'>
                                                    <a href='#'><img src='./images/books/$sach[2]'
                                                            alt='product img' /></a>
                                                </td>
                                                <td class='product-name'>
                                                    <a href='/chi-tiet/harry-potter-va-bao-boi-tu-than'>$sach[1]</a>
                                                </td>
                                                <td class='product-price'>
                                                    <span class='amount'>$sach[3] VNĐ</span>
                                                </td>
                                                <td class='product-quantity'>
                                                    <button class='btnDecrease' onclick='abc()'
                                                        data-bookID='BK-00007'>
                                                        -
                                                    </button>
                                                    <input class='txtQuantity' data-bookID='BK-00007' type='number'
                                                        value='$sach[4]' min='1' max='10'b/>
                                                    <button class='btnIncrease' onclick='addItem('BK-00007')'
                                                        data-bookID='BK-00007'>
                                                        +
                                                    </button>
                                                </td>
                                                <td class='product-subtotal'>$tongtien VNĐ</td>
                                                <td class='product-remove'>
                                                    <form action='' class='removeItem' method='post'>
                                                        <input type=hidden name='BookID' value='$sach[0]' />
                                                        <button type='submit'>X</button>
                                                    </form>
                                                </td>
                                            </tr>";
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart__total__amount mt-5">
                                <span>Tổng giỏ hàng</span>
                                <?php 
                                $total=0;
                                if(!isset($_SESSION['cart']) ||empty($_SESSION['cart'])) {
                                    echo "<span>0 VNĐ</span>";
                                }else{
                                    foreach($_SESSION['cart'] as $sach){
                                        $total=$total+($sach[3]*$sach[4]);
                                    }
                                    echo "<span>$total VNĐ</span>";
                                }
                                ?>


                            </div>
                        </div>
                        <div class="cartbox__btn flex-column mb-3">
                            <ul
                                class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                                <li><a id="btnContinue" href="./danhmuc.php">Tiếp tục mua hàng</a></li>
                                <li><a id="btnDeleteAll" href="#">Xoá giỏ hàng</a></li>
                                <li><a id="btnUpdate" href="#">Cập nhật giỏ hàng</a></li>
                                <li><a id="btnPayment" href="./payment.php">Thanh toán</a></li>
                            </ul>
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