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
<!-- UPDATE `book` SET `BookName` = 'conan1', `Price` = '11', `DiscountPercent` = '11', `Quantity` = '11', `Avatar` = 'wpp2508257-admin-wallpapers.jpg', `CreateByDate` = '2022-11-16', `Url` = 'conan1', `Publisher` = 'NXB Văn Học1', `PublicByDate` = '2022-11-10', `BookCover` = 'Bìa cứng1', `Pages` = '2001', `BookDescription` = '11', `AuthorID` = 'AU-021' WHERE `book`.`BookID` = 'BK-31'; -->

<body>
    <?php 
    require '../../connect_DB.php';
    $id = $_GET['id'];
    $a = "SELECT * FROM `book` JOIN author on book.AuthorID = author.AuthorID JOIN book_category ON book.BookID = book_category.BookID JOIN category ON book_category.CategoryID = category.CategoryID WHERE book.BookID = '$id'";
    $resultbookdetail=mysqli_query($conn, $a);
    if(mysqli_num_rows($resultbookdetail)!=0) {
        $rowdetail = mysqli_fetch_array($resultbookdetail);
    }
    ?>
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



                <h2 style="text-align:center">Sửa</h2>


                <form action="./action.php" enctype="multipart/form-data" method="post">
                    <div class="form-horizontal row">

                        <input data-val="true"
                            data-val-length="The field BookID must be a string with a maximum length of 10."
                            data-val-length-max="10" id="BookID" name="BookID" type="hidden"
                            value="<?php echo $rowdetail['BookID'] ?>" />

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="BookID">BookID</label>
                                <div class="col-md-9">
                                    <input class="form-control text-box single-line" disabled="disabled" id="BookID"
                                        name="BookID" type="text" value="<?php echo $rowdetail['BookID'] ?>" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="BookID"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="BookName">T&#234;n</label>
                                <div class="col-md-9">
                                    <input class="form-control text-box single-line" data-val="true"
                                        data-val-length="The field Tên must be a string with a maximum length of 200."
                                        data-val-length-max="200" data-val-required="Tên không hợp lệ" id="BookName"
                                        name="BookName" type="text" value="<?php echo $rowdetail['BookName'] ?>" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="BookName"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="Price">Gi&#225;</label>
                                <div class="col-md-9">
                                    <input class="form-control text-box single-line" data-val="true"
                                        data-val-number="The field Giá must be a number."
                                        data-val-required="Tên không hợp lệ" id="Price" name="Price" type="number"
                                        value="<?php echo $rowdetail['Price'] ?>" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Price"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="DiscountPercent">Giảm gi&#225;</label>
                                <div class="col-md-9">
                                    <input class="form-control text-box single-line" data-val="true"
                                        data-val-number="The field Giảm giá must be a number."
                                        data-val-required="Tên không hợp lệ" id="DiscountPercent" name="DiscountPercent"
                                        type="number" value="<?php echo $rowdetail['DiscountPercent'] ?>" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="DiscountPercent"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="Quantity">Số lượng</label>
                                <div class="col-md-9">
                                    <input class="form-control text-box single-line" data-val="true"
                                        data-val-number="The field Số lượng must be a number."
                                        data-val-required="Tên không hợp lệ" id="Quantity" name="Quantity" type="number"
                                        value="<?php echo $rowdetail['Quantity'] ?>" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Quantity"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="TotalSell">Đ&#227; b&#225;n</label>
                                <div class="col-md-9">
                                    <input class="form-control text-box single-line" data-val="true"
                                        data-val-number="The field Đã bán must be a number."
                                        data-val-required="Tên không hợp lệ" disabled="disabled" id="TotalSell"
                                        name="TotalSell" type="number" value="<?php echo $rowdetail['TotalSell'] ?>" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="TotalSell"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-3" for="Avatar">Ảnh đại diện</label>

                                <div class="col-md-9">
                                    <input type="file" style="height:30px;" name="Avatar" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="Url">Url</label>
                                <div class="col-md-9">
                                    <input class="form-control text-box single-line" data-val="true"
                                        data-val-length="The field Url must be a string with a maximum length of 50."
                                        data-val-length-max="50" data-val-required="Tên không hợp lệ" id="Url"
                                        name="Url" type="text" value="<?php echo $rowdetail['Url'] ?>" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Url"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="Publisher">Nh&#224; XB</label>
                                <div class="col-md-9">
                                    <input class="form-control text-box single-line" data-val="true"
                                        data-val-length="The field Nhà XB must be a string with a maximum length of 100."
                                        data-val-length-max="100" id="Publisher" name="Publisher" type="text"
                                        value="<?php echo $rowdetail['Publisher'] ?>" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Publisher"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="PublicByDate">Ng&#224;y XB</label>
                                <div class="col-md-9">
                                    <input class="form-control text-box single-line" data-val="true"
                                        data-val-date="The field Ngày XB must be a date." id="PublicByDate"
                                        name="PublicByDate" type="date"
                                        value="<?php echo $rowdetail['PublicByDate'] ?>" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="PublicByDate"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="BookCover">B&#236;a</label>
                                <div class="col-md-9">
                                    <input class="form-control text-box single-line" data-val="true"
                                        data-val-length="The field Bìa must be a string with a maximum length of 50."
                                        data-val-length-max="50" id="BookCover" name="BookCover" type="text"
                                        value="<?php echo $rowdetail['BookCover'] ?>" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="BookCover"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="Pages">Số trang</label>
                                <div class="col-md-9">
                                    <input class="form-control text-box single-line" data-val="true"
                                        data-val-number="The field Số trang must be a number." id="Pages" name="Pages"
                                        type="number" value="<?php echo $rowdetail['Pages'] ?>" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Pages"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="BookDescription">M&#244; tả</label>
                                <div class="col-md-9">
                                    <input class="form-control text-box single-line" id="BookDescription"
                                        name="BookDescription" type="text"
                                        value="<?php echo $rowdetail['BookDescription'] ?>" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="BookDescription"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="AuthorID">T&#225;c Giả</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="AuthorID" name="AuthorID">
                                        <?php 
                                        require '../../connect_DB.php';
                                        $a="SELECT author.AuthorID, author.AuthorName FROM `author`";
                                        $result=mysqli_query($conn, $a);
                                        if(mysqli_num_rows($result)!=0) { 
                                            while($row = mysqli_fetch_array($result)){
                                                echo "<option value='$row[0]'>$row[1]</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="AuthorID"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="ProducerID">Nh&#224; Ph&#225;t
                                    H&#224;nh</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="ProducerID" name="ProducerID">
                                        <?php 
                                        require '../../connect_DB.php';
                                        $a="SELECT producer.ProducerID,producer.ProducerName FROM `producer`";
                                        $result=mysqli_query($conn, $a);
                                        if(mysqli_num_rows($result)!=0) { 
                                            while($row = mysqli_fetch_array($result)){
                                                echo "<option value='$row[0]'>$row[1]</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="ProducerID"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="theloai">Thể Loại</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="theloai" name="theloai">
                                        <?php 
                                        require '../../connect_DB.php';
                                        $a="SELECT category.CategoryID, category.CategoryName FROM `category`";
                                        $result=mysqli_query($conn, $a);
                                        if(mysqli_num_rows($result)!=0) { 
                                            while($row = mysqli_fetch_array($result)){
                                                echo "<option value='$row[0]'>$row[1]</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="ProducerID"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" name='update' value="Sửa" class="btn btn-primary" />
                        </div>
                    </div>
                </form>
                <div>
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