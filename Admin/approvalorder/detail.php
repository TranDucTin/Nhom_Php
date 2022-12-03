<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CHI TIẾT ĐƠN HÀNG</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/client/css/font-awesome.min.css" rel="stylesheet" />
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
        <?php 
        require '../../connect_DB.php';
        $id = $_GET['id'];
        $a = "SELECT * FROM `orders`  WHERE orders.OrderID = '$id'";
        $resultbookdetail=mysqli_query($conn, $a);
        if(mysqli_num_rows($resultbookdetail)!=0) {
            $rowdetail = mysqli_fetch_array($resultbookdetail);
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


                <h3>CHI TIẾT ĐƠN HÀNG</h3>
                <div>
                    <hr />
                    <div class="row" style="font-size: 2rem">

                        <div class=" col-md-4">
                            <dl class="horizontal">
                                <dt>
                                    Mã Đơn Hàng
                                </dt>
                                <dd>
                                    <?php echo $rowdetail['OrderID'] ?>
                                </dd>

                                <dt>
                                    Tên Khách Hàng
                                </dt>

                                <dd>
                                    <?php echo $rowdetail['tenkh'] ?>
                                </dd>


                                <dt>
                                    SĐT
                                </dt>

                                <dd>
                                    <?php echo $rowdetail['sdt'] ?>
                                </dd>

                                <dt>
                                    Địa chỉ
                                </dt>

                                <dd>
                                    <?php echo $rowdetail['Address'] ?>
                                </dd>
                                <dt>
                                    Ngày Đặt
                                </dt>

                                <dd>
                                    <?php echo $rowdetail['OrderByDate'] ?>
                                </dd>
                                <dt>
                                    Tổng Tiền
                                </dt>

                                <dd>
                                    <?php echo $rowdetail['Total'] ?> VNĐ
                                </dd>
                                <dt>
                                    Hình Thức Thanh Toán
                                </dt>

                                <dd>
                                    <?php
                                    if($rowdetail['PaymentID']=='PM-001') {
                                        echo "Thanh toán tiền mặt";
                                    }else{
                                        echo "Thanh toán qua thẻ ngân hàng";
                                    }
                                    ?>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div id="gridContent">

                        <table class="table table-sm table-bordered table-hover table-striped">
                            <thead>
                                <tr class="thead-dark">
                                    <th scope="col">
                                        <a href="/Admin/Authors?sort=AuthorID&amp;sortdir=ASC">Sách</a>
                                    </th>
                                    <th scope="col">
                                        <a href="/Admin/Authors?sort=AuthorName&amp;sortdir=ASC">Số Lượng</a>
                                    </th>
                                    <th scope="col">
                                        <a href="/Admin/Authors?sort=PhoneNumber&amp;sortdir=ASC">Đơn giá</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once '../../connect_DB.php';
                                $a = "SELECT book.BookName, orderdetail.Quantity, orderdetail.Price FROM `orderdetail` JOIN `book` ON orderdetail.BookID = book.BookID WHERE orderdetail.OrderID = '$id'";
                                $result=mysqli_query($conn, $a);
                                if(mysqli_num_rows($result)!=0) { 
                                    while($rowbook = mysqli_fetch_array($result)){
                                        echo "
<tr>
                                    <td>$rowbook[0]</td>
                                    <td>$rowbook[1]</td>
                                    <td>$rowbook[2]</td>
                                </tr>
";
                                    }
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>

                    <hr />
                    <a href="./action.php?success=<?php echo $rowdetail['OrderID'] ?>"><button type="button"
                            class="btn btn-success">Duyệt đơn hàng</button></a>
                    <a href="./action.php?delete=<?php echo $rowdetail['OrderID'] ?>"
                        Onclick='return ConfirmDelete();'><button type="button" class="btn btn-danger">Xóa đơn
                            hàng</button></a>
                    <a href="./index.php">Trở Về</a>

                </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <script>
    function ConfirmDelete() {
        var x = confirm("Are you sure you want to delete?");
        if (x)
            return true;
        else
            return false;
    }
    </script>
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