<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quản l&#253; S&#225;ch</title>

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


        <?php
            require '../header/header_nav.php'
        ?>
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

                <?php if (isset($_SESSION['response'])) { ?>
                <div class="alert alert-success alert-dismissible text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <b><?php echo $_SESSION['response']; ?></b>
                </div>
                <?php } unset($_SESSION['response']); ?>


                <h2 style="text-align:center">Quản l&#253; S&#225;ch</h2>

                <form action="" method="get">
                    <table class="table1" align="center">
                        <tr>
                            <td>Tên Sách</td>
                            <td>
                                <input style="margin-bottom:5px; margin-left:5px" type="text" name="tensach"
                                    class="form-control" placeholder="tên sách" value='<?php if(isset($_GET['tensach'])) { echo $_GET['tensach']; 
} ?>'>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" class="btn btn-success" style="width:100px; margin-left:5px">Tìm
                                    kiếm</button>
                                <button type="button" class="btn btn-danger" style="width:100px;"
                                    onclick="location.href='./index.php'">
                                    Nhập mới
                                </button>
                            </td>
                        </tr>
                    </table>
                </form>
                <p>
                    <a href="./new.php">Tạo S&#225;ch Mới</a>
                </p>

                <div id="gridContent">

                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                            <tr class="thead-dark">
                                <th scope="col">
                                    <a href="/Admin/Books?sort=H%c3%acnh+%e1%ba%a3nh&amp;sortdir=ASC">H&#236;nh ảnh</a>
                                </th>
                                <th scope="col">
                                    <a href="/Admin/Books?sort=BookID&amp;sortdir=ASC">M&#227; S&#225;ch</a>
                                </th>
                                <th scope="col">
                                    <a href="/Admin/Books?sort=BookName&amp;sortdir=ASC">T&#234;n S&#225;ch</a>
                                </th>
                                <th scope="col">
                                    <a href="/Admin/Books?sort=Price&amp;sortdir=ASC">Gi&#225;</a>
                                </th>
                                <th scope="col">
                                    <a href="/Admin/Books?sort=DiscountPercent&amp;sortdir=ASC">Giảm gi&#225;</a>
                                </th>
                                <th scope="col">
                                    <a href="/Admin/Books?sort=Quantity&amp;sortdir=ASC">Số lượng</a>
                                </th>
                                <th scope="col">
                                    <a href="/Admin/Books?sort=TotalSell&amp;sortdir=ASC">Đ&#227; b&#225;n</a>
                                </th>
                                <th scope="col">
                                    <a href="/Admin/Books?sort=CreateByDate&amp;sortdir=ASC">Ng&#224;y đăng</a>
                                </th>
                                <th scope="col">
                                    <a href="/Admin/Books?sort=Ch%e1%bb%a9c+n%c4%83ng&amp;sortdir=ASC">Chức năng</a>
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
