<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Duyệt đơn h&#224;ng</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/client/css/font-awesome.min.css" rel="stylesheet" />
    <!-- MetisMenu CSS -->
    <link href="../../assets/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../assets/admin/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../../assets/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <!--fontawsome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <link rel="stylesheet" href="../../Content/customAdmin.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->


        <?php require '../header/header_nav.php' ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <script src="../../Scripts/jquery-1.6.2.min.js"></script>


                <h2 style="text-align:center">Duyệt đơn h&#224;ng</h2>

                <hr />
                <?php if (isset($_SESSION['response'])) { ?>
                <div class="alert alert-<?php echo $_SESSION['res_type']; ?> alert-dismissible text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <b><?php echo $_SESSION['response']; ?></b>
                </div>
                <?php } unset($_SESSION['response']); ?>

                <div id="gridContent">

                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                            <tr class="thead-dark">
                                <th scope="col">
                                    <a href="/Admin/ApprovalOrder?sort=OrderID&amp;sortdir=ASC">M&#227; Đơn
                                        H&#224;ng</a>
                                </th>
                                <th scope="col">
                                    <a href="/Admin/ApprovalOrder?sort=CustomerID&amp;sortdir=ASC">Tên Khách Hàng</a>
                                </th>
                                <th scope="col">
                                    <a href="/Admin/ApprovalOrder?sort=Payment.PaymentName&amp;sortdir=ASC">Loại Thanh
                                        To&#225;n </a>
                                </th>
                                <th scope="col">
                                    <a href="/Admin/ApprovalOrder?sort=Customer.CustomerAddress&amp;sortdir=ASC">Địa Chỉ
                                        Giao H&#224;ng</a>
                                </th>
                                <th scope="col">
                                    <a href="/Admin/ApprovalOrder?sort=OrderByDate&amp;sortdir=ASC">Ng&#224;y đặt
                                        h&#224;ng</a>
                                </th>
                                <th scope="col">
                                    <a href="/Admin/ApprovalOrder?sort=Notes&amp;sortdir=ASC">Ghi Ch&#250;</a>
                                </th>
                                <th scope="col">
                                    <a href="/Admin/ApprovalOrder?sort=Total&amp;sortdir=ASC">Tổng tiền</a>
                                </th>
                                <th scope="col">
                                    <a href="/Admin/ApprovalOrder?sort=Ch%e1%bb%a9c+n%c4%83ng&amp;sortdir=ASC">Chức
                                        năng</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require_once '../../connect_DB.php';
                                require './panigation_page_book.php';
                            if(mysqli_num_rows($result)!=0) { 
                                while($row = mysqli_fetch_array($result)){
                                    include './item.php';
                                }
                            }

                            ?>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php require './panigation_link_book.php' ?>
                        </ul>
                    </nav>
                </div>


            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../../assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../../Scripts/jquery.unobtrusive-ajax.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../assets/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../../assets/admin/js/plugins/ckfinder/ckfinder.js"></script>
    <script src="../../assets/admin/js/plugins/ckeditor/ckeditor.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../../assets/admin/dist/js/sb-admin-2.js"></script>


</body>

</html>