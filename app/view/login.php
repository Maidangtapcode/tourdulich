<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorldTravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/dk-dn.css">
    
</head>

<body>
    <!----------------------- Main Container -------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!----------------------- Login Container -------------------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!--------------------------- Left Box ----------------------------->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box side-image">
                <div class="text">
                    <p>Quá ô kê <i>- là quá ok</i></p>

                </div>
            </div>
            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Hello,World travel</h2>
                        <p>We are happy to have you back.</p>
                    </div>
                    <form action="<?php  echo BASE_URL ?>login/authentication_login" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6 <?= isset($checkerorr['email']) ? ' is-invalid' : '' ?>" placeholder="Email " name="email">
                        </div>

                        <div class="input-group mb-3 ">
                            <div class="w-100 icon-container">
                                <input type="password" class="input-passwd form-control form-control-lg w-100 bg-light fs-6 <?= isset($checkerorr['sodt']) ? ' is-invalid' : '' ?>" placeholder="Mật khẩu" name="matkhau" id="matkhau">
                                <i class="bi bi-eye eye-login"></i>
                            </div>
                        </div>

                        <div class="input-group mb-3 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Ghi nhớ</small></label>
                            </div>
                            <div class="forgot">
                                <small><a href="#">Quên mật khẩu?</a></small>
                            </div>
                        </div>
                        <?php
                        
                        // Kiểm tra nếu session chưa được kích hoạt thì mới khởi động
                        if (session_status() == PHP_SESSION_NONE) {
                            session_start();
                            if (isset($_SESSION['error_message'])) {
                                $error_message = $_SESSION['error_message'];
                                echo '<span class="text-danger">' . $error_message . '</span>';
                                unset($_SESSION['error_message']); // Xóa thông báo lỗi sau khi đã hiển thị
                            }
                        }
                        
                        ?>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-info w-100 fs-6">Đăng nhập</button>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-light w-100 fs-6"><img src="img/gg.png" style="width:20px" class="me-2"><small>Google</small></button>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-light w-100 fs-6"><img src="img/fb.png" style="width:20px" class="me-2 rounded-5"><small>Facebook</small></button>
                        </div>
                        <div class="row">
                            <small>Bạn chưa có tài khoản? <a href="<?php echo BASE_URL ?>login/signup">Đăng ký ngay!</a></small>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="js/sprictlg.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>