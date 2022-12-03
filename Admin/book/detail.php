<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CHI TIẾT S&#193;CH</title>

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
        $a = "SELECT * FROM `book` JOIN author on book.AuthorID = author.AuthorID JOIN book_category ON book.BookID = book_category.BookID JOIN category ON book_category.CategoryID = category.CategoryID WHERE book.BookID = '$id'";
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


                <h3>CHI TIẾT S&#193;CH</h3>
                <div>
                    <hr />
                    <div class="row" style="font-size: 2rem">
                        <div class="col-md-4">
                            <div style="width: 100%">
                                <img style="width: 100%;" src="../../images/books/<?php echo $rowdetail['Avatar'] ?>" />
                            </div>
                        </div>
                        <div class=" col-md-4">
                            <dl class="horizontal">
                                <dt>
                                    T&#234;n T&#225;c Giả
                                </dt>
                                <dd>
                                    <?php echo $rowdetail['AuthorName'] ?>
                                </dd>

                                <dt>
                                    T&#234;n
                                </dt>

                                <dd>
                                    <?php echo $rowdetail['BookName'] ?>
                                </dd>


                                <dt>
                                    Gi&#225;
                                </dt>

                                <dd>
                                    <?php echo $rowdetail['Price'] ?>
                                </dd>

                                <dt>
                                    Giảm gi&#225;
                                </dt>

                                <dd>
                                    <?php echo $rowdetail['DiscountPercent'] ?>
                                </dd>

                                <dt>
                                    Số lượng
                                </dt>

                                <dd>
                                    <?php echo $rowdetail['Quantity'] ?>
                                </dd>

                                <dt>
                                    Đ&#227; b&#225;n
                                </dt>

                                <dd>
                                    <?php echo $rowdetail['TotalSell'] ?>
                                </dd>
                            </dl>
                        </div>
                        <div class="col-md-4">
                            <dl class="horizontal">
                                <dt>
                                    Ng&#224;y đăng
                                </dt>

                                <dd>
                                    <?php echo $rowdetail['CreateByDate'] ?>
                                </dd>

                                <dt>
                                    Nh&#224; XB
                                </dt>

                                <dd>
                                    <?php echo $rowdetail['Publisher'] ?>
                                </dd>

                                <dt>
                                    Ng&#224;y XB
                                </dt>

                                <dd>
                                    <?php echo $rowdetail['PublicByDate'] ?>
                                </dd>

                                <dt>
                                    B&#236;a
                                </dt>

                                <dd>
                                    <?php echo $rowdetail['BookCover'] ?>
                                </dd>

                                <dt>
                                    Số trang
                                </dt>

                                <dd>
                                    <?php echo $rowdetail['Pages'] ?>
                                </dd>

                                <dt>
                                    M&#244; tả
                                </dt>

                                <dd>
                                    <?php echo $rowdetail['BookDescription'] ?>
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <hr />
                    <a href="./indexBook.php">Trở Về</a>

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
