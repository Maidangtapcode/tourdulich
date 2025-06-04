<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/dk-dn.css">
    <title>WorldTravel</title>
</head>

<body>
    <!----------------------- Main Container -------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!----------------------- Login Container -------------------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!--------------------------- Left Box ----------------------------->
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Hello,World travel</h2>
                        <p>We are happy to have you back.</p>
                    </div>
                    <form action="login/insertlogin" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6 <?= isset($checkerorr['name']) ? ' is-invalid' : '' ?>" placeholder="Họ tên " name="hoten">
                        </div>
                        <?php if (isset($hoten)) : ?>
                            <span class="text-danger">Họ tên không được để trống</span>
                        <?php endif ?>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6 <?= isset($checkerorr['email']) ? ' is-invalid' : '' ?>" placeholder="Email " name="email">
                        </div>
                        <?php if (isset($email)) : ?>
                            <span class="text-danger">Không phải định dạng email</span>
                        <?php endif ?>
                        <div class="input-group icon-eye mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6 <?= isset($checkerorr['sodt']) ? ' is-invalid' : '' ?>" placeholder="Số điện thoại" name="sodt">
                        </div>
                        <?php if (isset($sodt)) : ?>
                            <span class="text-danger">Nhập chính xác số điện thoại</span>
                        <?php endif ?>
                        <div class="input-group mb-3 ">
                            <div class="w-100 icon-container">
                                <input type="password" class="input-passwd form-control form-control-lg w-100 bg-light fs-6 <?= isset($checkerorr['sodt']) ? ' is-invalid' : '' ?>" placeholder="Mật khẩu" name="matkhau" id="matkhau">
                                <i class="bi bi-eye eye-login"></i>
                            </div>
                        </div>
                        <?php if (isset($matkhau)) : ?>
                            <span class="text-danger">Mật khẩu bao gồm chữ hoa, thường, số và kí tự đặc biệt</span>
                        <?php endif ?>
                        <div class="input-group mb-1">
                            <div class="w-100 icon-container">
                            <input type="password" class="input-passwd form-control form-control-lg bg-light fs-6" placeholder="Nhập lại mật khẩu" name="matkhauagin" id="matkhauagin">
                            <i class="bi bi-eye eye-login"></i>
                            </div>
                        </div>
                        <span id="error-msg1" style="color: red;"></span>
                        <span id="error-msg2" style="color: blue;"></span>
                        <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Ghi nhớ</small></label>
                            </div>
                            <div class="forgot">
                                <small><a href="#">Quên mật khẩu?</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg btn-info w-100 fs-6" data-bs-toggle="modal" data-bs-target="#exampleModal">Đăng Ký</button>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-light w-100 fs-6"><img src="../img/gg.png" style="width:20px" class="me-2"><small>Google</small></button>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-light w-100 fs-6"><img src="../img/fb.png" style="width:20px" class="me-2 rounded-5"><small>Facebook</small></button>
                        </div>
                        <div class="row">
                            <small>Bạn đã có tài khoản? <a href="<?php echo BASE_URL ?>../login">Đăng nhập ngay!</a></small>
                        </div>
                    </form>
                    <?php
                    if (isset($msg)) {
                        echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));
                        myModal.show();
                    });
                    </script>';
                    }
                    ?>
                </div>
            </div>
            <!-------------------- ------ Right Box ---------------------------->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box side-image">
                <div class="text">
                    <p>Travel Is A Good Life <i></i></p>

                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span>Welcome to WorldTravel</span>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="text-center">Chúc mừng bạn đã đăng kí thành công</span><br>
                    <span class="text-center">Hãy đăng nhập thôi nào!!!</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal"> <a class="text-white text-decoration-none" href="<?php  ?>../login">Đăng nhập</a></button>
                </div>
            </div>
        </div>
    </div>
    <script>
        //check mat khau lai
        document.addEventListener("DOMContentLoaded", function() {
            var matkhauInput = document.getElementById("matkhau");
            var matkhauaginInput = document.getElementById("matkhauagin");
            var errorMsg1 = document.getElementById("error-msg1");
            var errorMsg2 = document.getElementById("error-msg2");

            matkhauaginInput.addEventListener("input", function() {
                if (matkhauInput.value !== matkhauaginInput.value) {
                    errorMsg1.innerText = "Mật khẩu và mật khẩu nhập lại không khớp";
                    errorMsg2.innerText = "";
                } else {
                    errorMsg2.innerText = "Mật khẩu đã chính xác";
                    errorMsg1.innerText = "";
                }
            });
        });
    </script>
    <script src="../js/sprictlg.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>