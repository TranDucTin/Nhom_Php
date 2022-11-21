<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/client/css/font-awesome.min.css" rel="stylesheet" />
    <!-- MetisMenu CSS -->
    <link href="../assets/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../assets/admin/dist/css/sb-admin-2.css" rel="stylesheet" />
    <!-- Custom Fonts -->
    <link href="../assets/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <!--fontawsome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />

    <link rel="stylesheet" href="../Content/customAdmin.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <?php 
    require 'KTdangnhap.php';
    ?>
    <div id="wrapper">
        <!-- Navigation -->

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/Admin/Index"><i class="fas fa-user-shield"></i>Quản lý</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="/Admin/Users/Index"><i class="fa fa-user fa-fw"></i> Thông tin tài khoản</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Cài đặt</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="./logout.php"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <h4 class="text-center">
                                Xin chào <span class="text-capitalize">admin</span>
                            </h4>
                        </li>
                        <li>
                            <a href="/Admin/Home/Index"><i class="fas fa-home"></i> Trang chủ</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Công việc<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/Admin/ApprovalOrder">Duyệt đơn h&#224;ng</a>
                                </li>
                                <li>
                                    <a href="#">Đăng tin</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Nhóm người dùng<span
                                    class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/Admin/Customers">Kh&#225;ch h&#224;ng</a>
                                </li>
                                <li>
                                    <a href="/Admin/Users">T&#224;i khoản</a>
                                </li>
                                <li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý Danh Mục<span
                                    class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/Admin/Authors">T&#225;c giả</a>
                                </li>
                                <li>
                                    <a href="/Admin/Books">S&#225;ch</a>
                                </li>
                                <li>
                                    <a href="/Admin/Categories">Thể Loại</a>
                                </li>
                                <li>
                                    <a href="/Admin/Producers">Nh&#224; Xuất Bản</a>
                                </li>
                                <li>
                                    <a href="/Admin/Orders">Đơn H&#224;ng</a>
                                </li>
                                <li>
                                    <a href="/Admin/Reviews">Đ&#225;nh gi&#225;</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/Admin/Chart">
                                <i class="fa fa-pie-chart fa-fw"></i>
                                Thống kê
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
        </nav>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12"></div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <h1>XÂY DỰNG PHẦN MỀM BÁN SÁCH ONLINE LUNABOOK</h1>
                <h2 class="text-center">SINH VIÊN THỰC HIỆN</h2>

                <div class="row">
                    <div class="info-card-container col-md-3">
                        <div class="info-card">
                            <div class="info-name">Võ Thành Luân</div>
                            <div class="mssv">59131333</div>
                            <div class="des">Làm hết tất cả</div>
                        </div>
                    </div>
                    <div class="info-card-container col-md-3">
                        <div class="info-card">
                            <div class="info-name">Nguyễn Đăng Trường Phát</div>
                            <div class="mssv">59131843</div>
                            <div class="des"></div>
                        </div>
                    </div>
                    <div class="info-card-container col-md-3">
                        <div class="info-card">
                            <div class="info-name">Nguyễn Tấn Kiệt</div>
                            <div class="mssv">59131111</div>
                            <div class="des"></div>
                        </div>
                    </div>
                    <div class="info-card-container col-md-3">
                        <div class="info-card">
                            <div class="info-name">Cao Quỳnh Anh</div>
                            <div class="mssv">59130033</div>
                            <div class="des"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../Scripts/jquery.unobtrusive-ajax.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../assets/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../assets/admin/js/plugins/ckfinder/ckfinder.js"></script>
    <script src="../assets/admin/js/plugins/ckeditor/ckeditor.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../assets/admin/dist/js/sb-admin-2.js"></script>
</body>

</html>