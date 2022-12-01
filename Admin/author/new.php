<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Th&#234;m t&#225;c giả</title>

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
    <?php 
    require '../../connect_DB.php';
    function getAuthorID($conn)
    {
        $a='SELECT AuthorID FROM author  ORDER BY AuthorID DESC  LIMIT 1';
        $result=mysqli_query($conn, $a);
        if(mysqli_num_rows($result)!=0) {
            $row = mysqli_fetch_array($result);
        }
        $dau = substr($row[0], 3);
        $dau++;
        return "AU-".$dau;
    }
    ?>
    <div id="wrapper">
        <!-- Navigation -->


        <?php require '../header_nav.php' ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->



                <h2 style="text-align:center">Th&#234;m t&#225;c giả</h2>

                <form action="action.php" method="post">
                    <div class="form-horizontal">
                        <hr />
                        <input data-val="true"
                            data-val-length="The field BookID must be a string with a maximum length of 10."
                            data-val-length-max="10" id="AuthorID" name="AuthorID" type="hidden"
                            value="<?php echo getAuthorID($conn) ?>" />

                        <div class="form-group">
                            <label class="control-label col-md-2" for="AuthorID">M&#227; T&#225;c Giả</label>
                            <div class="col-md-10">
                                <input class="form-control text-box single-line" data-val="true" disabled="disabled"
                                    data-val-length="The field Mã Tác Giả must be a string with a maximum length of 10."
                                    data-val-length-max="10" id="AuthorID" name="AuthorID" type="text"
                                    value="<?php echo getAuthorID($conn) ?>" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="AuthorID"
                                    data-valmsg-replace="true"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2" for="AuthorName">T&#234;n T&#225;c Giả</label>
                            <div class="col-md-10">
                                <input class="form-control text-box single-line" data-val="true"
                                    data-val-length="The field Tên Tác Giả must be a string with a maximum length of 100."
                                    data-val-length-max="100" data-val-required="Tên Tác Giả Không Hợp Lệ"
                                    id="AuthorName" name="AuthorName" type="text" value="" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="AuthorName"
                                    data-valmsg-replace="true"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2" for="PhoneNumber">Số Điện Thoại</label>
                            <div class="col-md-10">
                                <input class="form-control text-box single-line" data-val="true"
                                    data-val-length="The field Số Điện Thoại must be a string with a maximum length of 20."
                                    data-val-length-max="20" id="PhoneNumber" name="PhoneNumber" type="text" value="" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="PhoneNumber"
                                    data-valmsg-replace="true"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2" for="Url">Đường Dẫn</label>
                            <div class="col-md-10">
                                <input class="form-control text-box single-line" data-val="true"
                                    data-val-length="The field Đường Dẫn must be a string with a maximum length of 50."
                                    data-val-length-max="50" data-val-required="Đường Dẫn Không Hớp Lệ" id="Url"
                                    name="Url" type="text" value="" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="Url"
                                    data-valmsg-replace="true"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <input type="submit" name='them' value="Thêm" class="btn btn-default" />
                            </div>
                        </div>
                    </div>
                </form>
                <div>
                    <a href="./indexAuthor.php">Trở Về</a>
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