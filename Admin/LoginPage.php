<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <link href="../Content/bootstrap.min.css" rel="stylesheet" />
    <link href="../Content/plugins.css" rel="stylesheet" />
    <link href="../Content/style.css" rel="stylesheet" />
    <link href="../Content/custom.css" rel="stylesheet" />

    <style>
    body {
        padding: 50px;
        background-image: url("../images/bg/admin.jpg");
        background-position: center center;
    }

    fieldset {
        border: 3px solid #c0c0c0 !important;
        padding: 10px 30px;
    }

    label {
        font-size: 1.2rem;
    }

    input {
        background-color: rgba(255, 255, 255, 0.5) !important;
    }
    </style>
</head>

<body>
    <?php
        require 'XLdangnhap.php';
        session_start();
    if(isset($_SESSION['admin']) and $_SESSION['admin']!=='') {
        header('Location: ./index.php');    
    }   
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title text-center">ĐĂNG NHẬP</h2>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label for="Username">T&#224;i khoản</label>
                                    <input autofocus="autofocus" require class="input-validation-error form-control"
                                        id="Username" name="Username" type="text" value="" />
                                    <div class="validation-summary-errors text-danger" data-valmsg-summary="true">
                                        <p><?php if(isset($validationUserName)) { echo $validationUserName; 
} ?></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Password">Mật khẩu</label>
                                    <input class="input-validation-error form-control" require id="Password"
                                        name="Password" type="password" />
                                    <div class="validation-summary-errors text-danger" data-valmsg-summary="true">
                                        <p><?php if(isset($validationPassWord)) { echo $validationPassWord; 
}?></p>
                                    </div>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="submit" class="btn btn-lg btn-success btn-block">
                                    Đăng nhập
                                </button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>