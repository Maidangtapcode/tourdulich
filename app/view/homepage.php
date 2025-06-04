<!-- 
<h1>This is homepage</h1> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo BASE_URL ?>img/logo.png" type="image/png">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>css/mainn.css?v=2">
    <title>WorldTravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .btn-outline-danger:hover a {
    color: #fff !important; /* Màu chữ trắng khi hover */
    text-decoration: none; /* Loại bỏ gạch chân khi hover */
}
</style>
<body>
    <header>
        <div class="bg-image-tour">
            <div class="container">
                <div class="header-nav">
                    <div class="row-row py-3">
                        <div class="col-30">
                            <img class="rounded-3" src="<?php echo BASE_URL ?>img/logo.png" alt="" width="80px" height="80px">
                        </div>
                        <div class=" col-70">

                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL ?>hotel/viewhotel">Khách sạn</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo BASE_URL ?>flights/viewflights">Vé máy bay</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo BASE_URL ?>news/viewnews">Tin tức</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo BASE_URL ?>dichvu/viewdv">Dịch vụ</a>
                                </li>
                                <li class="nav-item ">
                                    <div class="navbar-custom">
                                    <?php Session::init(); ?>
                                        <?php if (Session::get('login') == true): ?>

                                            <div class="navbar-login ">
                                                <span class="material-symbols-outlined fw-bold p-2" id="icon" style="font-size: 30px; color:#fff; cursor: pointer; ">
                                                    account_circle
                                                </span>
                                                <div id="popup" class="popup">
                                                    <div class="popup-content">
                                                        <span class="fw-bold mb-2" style="display: block; text-align: center;"><?php echo Session::get('hoten') ?></span>
                                                        <div style="display: flex; justify-content: center;  ">
                                                            <img class="rounded-circle" src="<?php echo BASE_URL?><?php echo Session::get('avatar') ?>" alt="" width="80px" height="80px"><br>
                                                        </div>
                                                        <div style="display: flex; justify-content: center;align-items: center;">
                                                            <button type="button" class="btn btn-sm bg-light my-2 mx-1" id="showhoso" data-bs-toggle="modal" data-bs-target="#exampleModal">Xem hồ sơ</button>
                                                            <button type="button" class="btn btn-sm bg-light my-2 mx-1 "><a class="text-decoration-none text-dark d-inline" href="<?php echo BASE_URL?>login/loadedituser/<?php echo Session::get('nguoidung_id'); ?>">Sửa hồ sơ</a></button>
                                                        </div>
                                                        <hr>
                                                        <strong>Hỗ trợ</strong><br>
                                                        <div style="display: flex; align-items: center;">
                                                            <span class="material-symbols-outlined">info</span>
                                                            <p style="margin:0 0 0 3px ; ">Giới thiệu về chúng tôi</p>
                                                        </div>
                                                        <div style="display: flex; align-items: center;">
                                                            <span class="material-symbols-outlined">help</span>
                                                            <p style="margin:0 0 0 3px ; "><a href="<?php echo BASE_URL?>support"></a>Liên hệ hỗ trợ</p>
                                                        </div>
                                                        <div style="display: flex; align-items: center;">
                                                            <span class="material-symbols-outlined">shopping_cart</span>
                                                            <p style="margin:0 0 0 3px ; "><a href="<?php echo BASE_URL?>giohang/viewcart" class="text-decoration-none text-dark">Giỏ hàng của bạn</a></p>
                                                        </div>
                                                        <a href="<?php echo BASE_URL ?>login/logout">Đăng xuất</a>
                                                    </div>

                                                </div>
                                            </div>

                                        <?php else: ?>
                                            <div class="navbar-login ">
                                                <span class="material-symbols-outlined fg-login" style="font-size: 30px;cursor: pointer; ">
                                                    account_circle
                                                </span>
                                                <div class="lg-us-navbar">
                                                    <div class="arrow-up"></div>
                                                    <div class="lg-us-container">
                                                        <ul class="lg-us">
                                                            <li class="lg-us-01"><button class="btn-lg-us"><a class="login-navbar" style="display: inline-block;" href="<?php echo BASE_URL ?>login">Đăng Nhập</a>
                                                                </button></li>
                                                            <li class="lg-us-02 ">Chưa có tài khoản?<a style="display: inline-block;" href="<?php echo BASE_URL ?>login/signup">Đăng kí </a> ngay
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thông tin hồ sơ</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body p-0 ">
                                                    <div class="model-contai">
                                                        <img src="<?php echo BASE_URL ?><?php echo  Session::get('background'); ?>" alt="" width="100%" height="200px" class="main-img">
                                                        <img src="<?php echo BASE_URL ?><?php echo Session::get('avatar') ;?>" alt="" class="small-img">
                                                        <strong class="nameuser"><?php Session::get('hoten') ?></strong>
                                                    </div>
                                                    <hr>
                                                    
                                                    <table class="table table-borderless">
                                                        <tbody>
                                                            <tr>
                                                                <th>Thông tin cá nhân</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Họ tên</td>
                                                                <td><?php echo Session::get('hoten')?></td>

                                                            </tr>
                                                            <tr>
                                                                <td>Số điện thoại</td>
                                                                <td><?php echo Session::get('sodt')?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email</td>
                                                                <td><?php echo Session::get('email')?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>

                                                <div class="modal-footer" style="display: flex; justify-content: center;" >
                                                    <button type="button" class="btn btn-primary"><a class="text-decoration-none text-white" href="<?php echo BASE_URL?>login/loadedituser/<?php echo Session::get('id');?>">Cập nhật</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        if (isset($update)) {
                                            // Sau khi cập nhật thành công, hiển thị modal và tải lại trang
                                            echo '<script>
                                                    document.addEventListener("DOMContentLoaded", function() {
                                                        var myModal = new bootstrap.Modal(document.getElementById("exampleModal1"));
                                                        myModal.show();
                                                        
                                                        // Tự động tải lại trang sau khi hiển thị modal
                                                        
                                                    });
                                                </script>';
                                        }
                                        
                                    ?>


                                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title fs-5" id="exampleModalLabel">Welcome to WorldTravel</h5>
                                            </div>
                                            <div class="modal-body">
                                                <span>Bạn đã cập nhật thông tin thành công</span>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link icon3gach p-2 fs-3" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                                        aria-label="Toggle navigation" href="">&#9776;</a>
                                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                                        aria-labelledby="offcanvasNavbarLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">WorldTravel</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                                                <li class="nav-item nav-hien ">
                                                    <a class="nav-link active icon3gach" aria-current="page"
                                                        href="<?php BASE_URL ?>">Tour</a>
                                                </li>
                                                <li class="nav-item nav-hien ">
                                                    <a class="nav-link active icon3gach" href="<?php BASE_URL ?>hotel/viewhotel">Khách sạn</a>
                                                </li>
                                                <li class="nav-item nav-hien ">
                                                    <a class="nav-link active icon3gach" href="<?php BASE_URL ?>flights/viewflights">Vé máy bay</a>
                                                </li>
                                                <li class="nav-item nav-hien ">
                                                    <a class="nav-link active icon3gach" href="<?php BASE_URL ?>dichvu/viewdv">Dịch vụ</a>
                                                </li>
                                                <li class="nav-item nav-hien ">
                                                    <a class="nav-link active icon3gach" href="<?php BASE_URL ?>news/viewnews">Tin tức</a>
                                                </li>
                                                <li class="nav-item nav-hien ">
                                                    <a class="nav-link active icon3gach" href="<?php BASE_URL ?>support/support">Hỗ trợ</a>
                                                </li>
                                            </ul>
                                            <form class="d-flex mt-3" role="search">
                                                <input class="form-control me-2" type="search" placeholder="Search"
                                                    aria-label="Search">
                                                <button class="btn btn-outline-success" type="submit">Search</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="top-banner">
                    <h1>WorldTravel</h1>
                    <h2>Thế giới trong tay bạn</h2>
                    <h4>Phục vụ tận tâm - Giá siêu ưu đãi</h3>
                        <div class="top-banner-address">
                            <form class="form-banner" action="">
                                <div class="input-icon">
                                    <span class="icon-01 material-symbols-outlined"
                                        style="line-height: 0.5; color: #dfdcdc;">
                                        location_on
                                    </span>
                                    <input class="icon-address" type="text" placeholder="Bạn muốn đi đâu?">
                                </div>

                                <div class="form-bg">
                                    <div class="input-icon">
                                        <span class=" icon-01 material-symbols-outlined"
                                            style="line-height: 0.5; color: #dfdcdc;">
                                            calendar_month
                                        </span>
                                        <input class="icon-time" type="text" placeholder="Thời gian khởi hành">
                                    </div>
                                    <div class="input-icon">
                                        <span class="icon-01 material-symbols-outlined"
                                            style="line-height: 0.5; color: #dfdcdc;">
                                            send
                                        </span>
                                        <input class="icon-time" type="text" placeholder="Khởi hành từ">
                                    </div>
                                    <input class="icon-find" type="button" value="Tìm">
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </header>


    <ul class="tour-group">
        <li class="tour-hot">
            <div class="container">
                <h3 class="tour-title">Tour Ưu Đãi Tốt Nhất Hôm Nay
                    <span>Nhanh tay thì còn- Chậm tay thì mất</span>
                </h3>
                <div class="container text-center">
                <div class="row ">
                    <?php
                        foreach ($listtoursale as $key => $value) {
                        ?>
                        <div class="col-lg-4 col-xs-12 col-sm-6 padding-t-e-12">
                            <div class="tour-hot-img">
                                <img class="width100" src="<?php echo BASE_URL ?><?php echo htmlspecialchars($value['imagetour'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
                                <div class="gif-hot">
                                    <img src="<?php echo BASE_URL ?>img/gif-icon-hot.gif" alt="gif hot">
                                    <span> <?php echo htmlspecialchars($value['bannertour'], ENT_QUOTES, 'UTF-8'); ?></span>
                                </div>
                            </div>
                            <div class="tour-hot-group">
                                <div class="tour-hot-title">
                                    <span class="span-title"> <?php echo htmlspecialchars($value['nametour'], ENT_QUOTES, 'UTF-8'); ?></span>
                                </div>
                                <div class="tour-hot-contents" style="overflow: hidden;">
                                    <div class="tour-star">
                                        <i class="fa fa-solid fa-star"></i>
                                        <i class="fa fa-solid fa-star"></i>
                                        <i class="fa fa-solid fa-star"></i>
                                        <i class="fa fa-solid fa-star"></i>
                                        <i class="fa fa-solid fa-star-half"></i>
                                        <span class="tour-feedback">4.8/5 (38 đánh giá)</span>
                                    </div>
                                    <ul class="tour-hot-ul">
                                        <li> <?php echo htmlspecialchars($value['labeltour1'], ENT_QUOTES, 'UTF-8'); ?></li>
                                        <li> <?php echo htmlspecialchars($value['labeltour2'], ENT_QUOTES, 'UTF-8'); ?></li>
                                        <li> <?php echo htmlspecialchars($value['labeltour3'], ENT_QUOTES, 'UTF-8'); ?></li>
                                        <li> <?php echo htmlspecialchars($value['labeltour4'], ENT_QUOTES, 'UTF-8'); ?></li>
                                    </ul>
                                    <span class="tour-money"> <?php echo htmlspecialchars(number_format($value['giatour'], 0, ',', '.'), ENT_QUOTES, 'UTF-8'); ?> <span class="tour-vnd">VND</span></span>
                                    <span class="btn btn-sm btn-outline-danger"><a href="<?php echo BASE_URL?>giohang/addtocart?product_id= <?php echo htmlspecialchars($value['id_tour']); ?>&product_type=tour&quantity=1&price=<?php echo $value['giatour']?>" class="text-decoration-none text-danger">Thêm vào giỏ hàng</a></span>
                                </div>
                            </div>
                        </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </li>

        <li class="tour-vn">
            <div class="container">
                <h3 class="tour-title">Tour Trong Nước
                    <span>Khám phá hết đất nước Việt Nam thôi nào!</span>
                </h3>
                <div class="container text-center">
                <div class="row ">
                    <?php
                        foreach ($listtourvn as $key => $value) {
                        ?>
                        <div class="col-lg-4 col-xs-12 col-sm-6 padding-t-e-12">
                            <div class="tour-hot-img">
                                <img class="width100" src="<?php echo BASE_URL ?><?php echo htmlspecialchars($value['imagetour'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
                                <div class="gif-hot">
                                    <img src="<?php echo BASE_URL ?>img/gif-icon-hot.gif" alt="gif hot">
                                    <span> <?php echo htmlspecialchars($value['bannertour'], ENT_QUOTES, 'UTF-8'); ?></span>
                                </div>
                            </div>
                            <div class="tour-hot-group">
                                <div class="tour-hot-title">
                                    <span class="span-title"> <?php echo htmlspecialchars($value['nametour'], ENT_QUOTES, 'UTF-8'); ?></span>
                                </div>
                                <div class="tour-hot-contents" style="overflow: hidden;">
                                    <div class="tour-star">
                                        <i class="fa fa-solid fa-star"></i>
                                        <i class="fa fa-solid fa-star"></i>
                                        <i class="fa fa-solid fa-star"></i>
                                        <i class="fa fa-solid fa-star"></i>
                                        <i class="fa fa-solid fa-star-half"></i>
                                        <span class="tour-feedback">4.8/5 (38 đánh giá)</span>
                                    </div>
                                    <ul class="tour-hot-ul">
                                        <li> <?php echo htmlspecialchars($value['labeltour1'], ENT_QUOTES, 'UTF-8'); ?></li>
                                        <li> <?php echo htmlspecialchars($value['labeltour2'], ENT_QUOTES, 'UTF-8'); ?></li>
                                        <li> <?php echo htmlspecialchars($value['labeltour3'], ENT_QUOTES, 'UTF-8'); ?></li>
                                        <li> <?php echo htmlspecialchars($value['labeltour4'], ENT_QUOTES, 'UTF-8'); ?></li>
                                    </ul>
                                    <span class="tour-money"> <?php echo htmlspecialchars(number_format($value['giatour'], 0, ',', '.'), ENT_QUOTES, 'UTF-8'); ?> <span class="tour-vnd">VND</span></span>
                                    <span class="btn btn-sm btn-outline-danger"><a href="<?php echo BASE_URL?>giohang/addtocart?product_id= <?php echo htmlspecialchars($value['id_tour']); ?>&product_type=tour&quantity=1&price=<?php echo $value['giatour']?>" class="text-decoration-none text-danger">Thêm vào giỏ hàng</a></span>
                                </div>
                            </div>
                        </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </li>

        <li class="tour-nn" style="background-color: #f1f1f1;">
            <div class="container">
                <h3 class="tour-title">Tour Ngoài Nước
                    <span>Xách ba lô trãi nghiệm nước bạn nào!</span>
                </h3>
                <div class="container text-center">
                    <div class="row ">
                    <?php
                        foreach ($listtourqt as $key => $value) {
                        ?>
                        <div class="col-lg-4 col-xs-12 col-sm-6 padding-t-e-12">
                            <div class="tour-hot-img">
                                <img class="width100" src="<?php echo BASE_URL ?><?php echo htmlspecialchars($value['imagetour'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
                                <div class="gif-hot">
                                    <img src="<?php echo BASE_URL ?>img/gif-icon-hot.gif" alt="gif hot">
                                    <span> <?php echo htmlspecialchars($value['bannertour'], ENT_QUOTES, 'UTF-8'); ?></span>
                                </div>
                            </div>
                            <div class="tour-hot-group">
                                <div class="tour-hot-title">
                                    <span class="span-title"> <?php echo htmlspecialchars($value['nametour'], ENT_QUOTES, 'UTF-8'); ?></span>
                                </div>
                                <div class="tour-hot-contents" style="overflow: hidden;">
                                    <div class="tour-star">
                                        <i class="fa fa-solid fa-star"></i>
                                        <i class="fa fa-solid fa-star"></i>
                                        <i class="fa fa-solid fa-star"></i>
                                        <i class="fa fa-solid fa-star"></i>
                                        <i class="fa fa-solid fa-star-half"></i>
                                        <span class="tour-feedback">4.8/5 (38 đánh giá)</span>
                                    </div>
                                    <ul class="tour-hot-ul">
                                        <li> <?php echo htmlspecialchars($value['labeltour1'], ENT_QUOTES, 'UTF-8'); ?></li>
                                        <li> <?php echo htmlspecialchars($value['labeltour2'], ENT_QUOTES, 'UTF-8'); ?></li>
                                        <li> <?php echo htmlspecialchars($value['labeltour3'], ENT_QUOTES, 'UTF-8'); ?></li>
                                        <li> <?php echo htmlspecialchars($value['labeltour4'], ENT_QUOTES, 'UTF-8'); ?></li>
                                    </ul>
                                    <span class="tour-money"> <?php echo htmlspecialchars(number_format($value['giatour'], 0, ',', '.'), ENT_QUOTES, 'UTF-8'); ?> <span class="tour-vnd">VND</span></span>
                                    <span class="btn btn-sm btn-outline-danger"><a href="<?php echo BASE_URL?>giohang/addtocart?product_id= <?php echo htmlspecialchars($value['id_tour']); ?>&product_type=tour&quantity=1&price=<?php echo $value['giatour']?>" class="text-decoration-none text-danger">Thêm vào giỏ hàng</a></span>
                                </div>
                            </div>
                        </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </li>

        <li class="tour-address">
            <div class="container">
                <h3 class="tour-title">Các địa điểm du lịch nổi tiếng
                    <span>Thế giới bao la - Bốn bể là nhà</span>
                </h3>
                <div class="tour-address-famous">
                    <div class="tour-address-vn">
                        <img src="<?php echo BASE_URL ?>img/tour-address-01.jpg" alt="">
                        <div class="name-address">
                            <h3>Việt Nam</h3>
                            <span>6 tour</span>
                        </div>
                        <div class="tour-overplay">
                            <span>Xem chi tiết</span>
                        </div>
                    </div>
                    <div class="tour-address-abroad">
                        <div class="tour-address-vn">
                            <img class="china" src="<?php echo BASE_URL ?>img/tour-address-02.jpg" alt="">
                            <div class="name-address">
                                <h3>Trung Quốc </h3>
                                <span>2 tour</span>
                            </div>
                            <div class="tour-overplay">
                                <span>Xem chi tiết</span>
                            </div>
                        </div>
                        <div class="tour-address-vn">
                            <img class="thailan" src="<?php echo BASE_URL ?>img/tour-address-03.jpg" alt="">
                            <div class="name-address">
                                <h3>Thái Lan</h3>
                                <span>1 tour</span>
                            </div>
                            <div class="tour-overplay">
                                <span>Xem chi tiết</span>
                            </div>
                        </div>
                        <div class="tour-address-vn">
                            <img class="hanquoc" src="<?php echo BASE_URL ?>img/tour-address-04.jpg" alt="">
                            <div class="name-address">
                                <h3>Hàn Quốc </h3> <span>1 tour</span>
                            </div>
                            <div class="tour-overplay">
                                <span>Xem chi tiết</span>
                            </div>
                        </div>
                        <div class="tour-address-vn">
                            <img class="nhatban" src="<?php echo BASE_URL ?>img/tour-address-05.jpg" alt="">
                            <div class="name-address">
                                <h3>Nhật Bản</h3>
                                <span>1 tour</span>
                            </div>
                            <div class="tour-overplay">
                                <span>Xem chi tiết</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <button type="button" class="btn-support rounded-5"><a href="">Bạn cần hỗ trợ?</a></button>
    <?php include_once '../app/view/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL ?>js/sprict.js?v=3"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>