<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Th&#234;m s&#225;ch</title>

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
    $id = $_GET['id'];
    $a = "SELECT * FROM `author`  WHERE author.AuthorID = '$id'";
    $resultbookdetail=mysqli_query($conn, $a);
    if(mysqli_num_rows($resultbookdetail)!=0) {
        $rowdetail = mysqli_fetch_array($resultbookdetail);
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



                <h2 style="text-align:center">Sửa</h2>


                <form action="./action.php" method="post">
                    <div class="">

                        <input data-val="true"
                            data-val-length="The field BookID must be a string with a maximum length of 10."
                            data-val-length-max="10" id="BookID" name="AuthorID" type="hidden"
                            value="<?php echo $rowdetail['AuthorID'] ?>" />

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="BookID">AuthorID</label>
                                <div class="col-md-9">
                                    <input class="form-control text-box single-line" disabled="disabled" id="BookID"
                                        name="AuthorID" type="text" value="<?php echo $rowdetail['AuthorID'] ?>" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="BookID"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="AuthorName">Tên tác giả</label>
                                <div class="col-md-9">
                                    <input class="form-control text-box single-line" data-val="true"
                                        data-val-length="The field Tên must be a string with a maximum length of 200."
                                        data-val-length-max="200" data-val-required="Tên không hợp lệ" id="AuthorName"
                                        name="AuthorName" type="text" value="<?php echo $rowdetail['AuthorName'] ?>" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="AuthorName"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="PhoneNumber">SĐT</label>
                                <div class="col-md-9">
                                    <input class="form-control text-box single-line" data-val="true"
                                        data-val-number="The field Giá must be a number."
                                        data-val-required="Tên không hợp lệ" id="PhoneNumber" name="PhoneNumber"
                                        type="text" value="<?php echo $rowdetail['PhoneNumber'] ?>" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="PhoneNumber"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="Url">Url</label>
                                <div class="col-md-9">
                                    <input class="form-control text-box single-line" data-val="true"
                                        data-val-number="The field Giảm giá must be a number."
                                        data-val-required="Tên không hợp lệ" id="Url" name="Url" type="text"
                                        value="<?php echo $rowdetail['Url'] ?>" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Url"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name='update' value="Sửa" class="btn btn-primary" />
                            </div>
                            <div>
                                <a href="./indexAuthor.php">Trở Về</a>
                            </div>
                        </div>


                    </div>
                </form>



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