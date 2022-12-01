<?php
if(!isset($_SESSION['admin'])) {
    session_start();
}
?>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../index.php"><i class="fas fa-user-shield"></i>Quản lý</a>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li>
                    <a href="../khachhang/indexCus.php"><i class="fa fa-user fa-fw"></i> Thông tin tài khoản</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-gear fa-fw"></i> Cài đặt</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
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
                        Xin chào <span class="text-capitalize"><?php echo $_SESSION['admin'] ?></span>
                    </h4>
                </li>
                <li>
                    <a href="../index.php"><i class="fas fa-home"></i> Trang chủ</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user fa-fw"></i> Công việc<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="/Admin/ApprovalOrder">Duyệt đơn h&#224;ng</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user fa-fw"></i> Nhóm người dùng<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="../khachhang/indexCus.php">Kh&#225;ch h&#224;ng</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý Danh Mục<span
                            class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="../author/indexAuthor.php">T&#225;c giả</a>
                        </li>
                        <li>
                            <a href="../book/indexBook.php>">S&#225;ch</a>
                        </li>
                        <li>
                            <a href="../category/indexCategory.php">Thể Loại</a>
                        </li>
                        <li>
                            <a href="../order/indexOrder.php">Đơn H&#224;ng</a>
                        </li>
                        <li>
                            <a href="../review/indexReview.php">Đ&#225;nh gi&#225;</a>
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