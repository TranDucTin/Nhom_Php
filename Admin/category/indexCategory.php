<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quản lí thể loại</title>

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

    <link rel="stylesheet" href="/Content/customAdmin.css" />
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
            require '../header/header_nav.php';

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


                <h2 style="text-align:center">Quản lý thể loại</h2>

                <html>

                <head>
                    <style type="text/css">
                    .grid-footer {
                        color: #000;
                        font: 17px Calibri;
                        text-align: center;
                        font-weight: bold;
                    }

                    .grid-footer a {
                        background-color: #ffffff;
                        color: blue;
                        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                        padding: 1px 10px 2px 10px;
                    }

                    .grid-footer a:active,
                    a:hover {
                        background-color: #ffffff;
                        color: #FFAD33;
                        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                    }

                    .alternatingRowStyle {
                        background-color: antiquewhite;
                    }

                    table .table1 {
                        text-align: left;
                        margin-left: 0px;
                        margin-right: 0px;
                        width: 800px;
                    }

                    .tr,
                    .td {
                        text-align: left;
                    }
                    </style>
                </head>

                <body>
                    <div>
                        <form action="" method="get">
                            <table class="table1" align="center">
                                <tr>
                                    <td>
                                        <div>Tên Thể Loại</div>
                                    </td>
                                    <td>

                                        <input style="margin-bottom:5px; margin-left:5px" type="text" name="theloai"
                                            class="form-control" id="inputEmail3" placeholder="TimKiem">
                                    </td>

                                </tr>


                                <tr>
                                    <td></td>
                                    <td>



                                        <button type="submit" class="btn btn-success"
                                            style="width:100px; margin-left:5px">Tìm kiếm</button>
                                        <button type="button" class="btn btn-danger" style="width:100px;
               " onclick="location.href='./indexCategory.php'">
                                            Nhập mới
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <hr />
                    <?php if (isset($_SESSION['response'])) { ?>
                    <div class="alert alert-success alert-dismissible text-center">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <b><?php echo $_SESSION['response']; ?></b>
                    </div>
                    <?php } unset($_SESSION['response']); ?>
                    <p>
                        <a href="new.php">Tạo Mới Thể Loại</a>
                    </p>
                    <div id="gridContent">

                        <table class="table table-sm table-bordered table-hover table-striped">
                            <thead>
                                <tr class="thead-dark">
                                    <th scope="col">
                                        <a href="/Admin/Authors?sort=AuthorID&amp;sortdir=ASC">Mã Thể Loại</a>
                                    </th>
                                    <th scope="col">
                                        <a href="/Admin/Authors?sort=AuthorName&amp;sortdir=ASC">Tên Thể Loại</a>
                                    </th>
                                    <th scope="col">
                                        <a href="/Admin/Authors?sort=PhoneNumber&amp;sortdir=ASC">Mô Tả</a>
                                    </th>
                                    <th scope="col">
                                        <a href="/Admin/Authors?sort=Url&amp;sortdir=ASC">Đường Dẫn</a>
                                    </th>
                                    <th scope="col">
                                        <a href="/Admin/Authors?sort=Ch%e1%bb%a9c+n%c4%83ng&amp;sortdir=ASC">Chức
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


                </body>

                </html>
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
