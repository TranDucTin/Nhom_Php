<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Thống k&#234;</title>

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
        <?php require '../header/header_nav.php' ;
        require '../../connect_DB.php';
        $a = "SELECT SUM(orders.Total) FROM `orders`";
        $sumtien = 0;
        $result=mysqli_query($conn, $a);
        if(mysqli_num_rows($result)!=0) {
            $row = mysqli_fetch_array($result);
            $sumtien = $row[0];
        }
        $a = "SELECT COUNT(*) FROM `orders` WHERE orders.Status = 'Chờ duyệt'";
        $sodon = 0;
        $result=mysqli_query($conn, $a);
        if(mysqli_num_rows($result)!=0) {
            $row = mysqli_fetch_array($result);
            $sodon = $row[0];
        }
        $homnay = date("Y/m/d");
        $a = "SELECT SUM(orders.Total) FROM `orders` WHERE orders.OrderByDate = '$homnay'";
        $sumtienhomnay = 0;
        $result=mysqli_query($conn, $a);
        if(mysqli_num_rows($result)!=0) {
            $row = mysqli_fetch_array($result);
            $sumtienhomnay = $row[0];
        }
        $a = "SELECT SUM(orderdetail.Quantity) FROM `orders` JOIN orderdetail on orders.OrderID = orderdetail.OrderID WHERE orders.OrderByDate = '$homnay' and orders.Status = 'Đã duyệt'";
        $sosachhomnay = 0;
        $result=mysqli_query($conn, $a);
        if(mysqli_num_rows($result)!=0) {
            $row = mysqli_fetch_array($result);
            $sosachhomnay = $row[0];
        }
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




                <h2 class="text-center">Thống k&#234;</h2>
                <hr />

                <div class="row d-flex justify-content-between">
                    <div class="chart-container col-md-6">
                        <div class="chart">
                            <div class="title">Tổng thu</div>
                            <div class="amount"><?php echo $sumtien ?> VNĐ</div>
                            <div class="content">Đã bán được từ trước đến nay</div>
                        </div>
                    </div>
                    <div class="chart-container col-md-6">
                        <div class="chart" style="background-color: blue">
                            <div class="title">Hôm nay</div>
                            <div class="amount"><?php if(isset($sosachhomnay)) {echo $sosachhomnay; 
                                                }else { echo 0; 
} ?></div>
                            <div class="content">cuốn sách đã bán được hôm nay</div>
                        </div>
                    </div>
                    <div class="chart-container col-md-6">
                        <div class="chart" style="background-color: blueviolet">
                            <div class="title">Tổng thu ngày</div>
                            <div class="amount"><?php echo $sumtienhomnay ?> VNĐ</div>
                            <div class="content">Đã bán được trong ngày hôm nay <?php echo date("Y/m/d") ?></div>
                        </div>
                    </div>
                    <div class="chart-container col-md-6">
                        <div class="chart" style="background-color: darkgreen">
                            <div class="title">Hiện tại</div>
                            <div class="amount"><?php echo $sodon ?></div>
                            <div class="content">
                                Đơn hàng đang chờ được duyệt.
                                <a style="all: unset; color: orange; cursor:pointer"
                                    href='../approvalarder/index.php'>Đến
                                    duyệt ngay</a>
                            </div>
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