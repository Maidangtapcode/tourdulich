<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="<?php echo BASE_URL?>img/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL?>css/vmb.css?v=2">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>vé máy bay</title>

    <link rel="stylesheet" href="css/vmb.css?v=3">
</head>

<body>
    <header>
        <div class="bg-image-vemaybay">
            <div class="container-lg">
                <div class="header-nav">
                    <div class="row-row py-3">
                        <div class="col-30">
                            <img class="rounded-3" src="<?php echo BASE_URL?>img/logo.png" alt="" width="80px" height="80px">
                        </div>
                        <div class=" col-70">

                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?php BASE_URL ?>index">Tour</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php BASE_URL ?>hotel">Khách Sạn</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Tin tức</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                        aria-expanded="false">Dịch vụ khác</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Vé vui chơi</a></li>
                                        <li><a class="dropdown-item" href="#">Giới thiệu</a></li>
                                        <li><a class="dropdown-item" href="#">Tài khoản</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Hỗ trợ</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <div class="navbar-custom">
                                        <div class="navbar-login ">
                                            <span class="material-symbols-outlined fg-login" style="font-size: 30px; ">
                                                account_circle
                                            </span>
                                            <div class="lg-us-navbar">
                                                <div class="arrow-up"></div>
                                                <div class="lg-us-container">
                                                    <ul class="lg-us">
                                                        <li class="lg-us-01"><button class="btn-lg-us"><a style="display: inline-block;" class="login-navbar" href="<?php BASE_URL ?>login">Đăng Nhập</a>
                                                            </button></li>
                                                        <li class="lg-us-02">Chưa có tài khoản?<a style="display: inline-block;" href="<?php BASE_URL ?>login/singup">Đăng kí</a> ngay
                                                        </li>
                                                    </ul>
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
                                                        href="#">Khách
                                                        sạn</a>
                                                </li>
                                                <li class="nav-item nav-hien ">
                                                    <a class="nav-link active icon3gach" href="#">Tour</a>
                                                </li>
                                                <li class="nav-item nav-hien ">
                                                    <a class="nav-link active icon3gach" href="#">Vé máy bay</a>
                                                </li>
                                                <li class="nav-item nav-hien ">
                                                    <a class="nav-link active icon3gach" href="#">Dấu ấn</a>
                                                </li>
                                                <li class="nav-item nav-hien ">
                                                    <a class="nav-link active icon3gach" href="#">Vé vui chơi</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle active icon3gach" href="#"
                                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Xem thêm
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item active icon3gach " href="#">Giới
                                                                thiệu</a>
                                                        </li>
                                                        <li><a class="dropdown-item active icon3gach" href="#">Tài
                                                                khoản</a>
                                                        </li>
                                                        <li><a class="dropdown-item active icon3gach" href="#">Hỗ
                                                                trợ</a>
                                                        </li>
                                                    </ul>
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
                    <h2>Trãi nghiệm kì nghĩ tuyệt vời</h2>
                    <h4>Combo khách sạn - vé máy bay - đưa đón tận nơi </h4>
                    <div class="top-banner-address">
                        <form class="form-banner" action="">
                            <div class="input-icon-1">
                                <div class="input-icon">
                                    <span class="icon-01 material-symbols-outlined"
                                        style="line-height: 0.5; color: #dfdcdc;">
                                        location_on
                                    </span>
                                    <input class="icon-address-1" type="text" placeholder="Bạn muốn đi đâu?">
                                </div>
                                <div class="input-icon">
                                    <span class=" icon-01 material-symbols-outlined"
                                        style="line-height: 0.5; color: #dfdcdc;">
                                        person_search
                                    </span>
                                    <input class="icon-time-1" type="text" placeholder="Số người? ">
                                </div>
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
    <div class="container">
        <h2 class="mt-3 flights-sale">Khuyến Mãi Và Ưu Đãi</h2>
        <h5 class="flights-sale">Tận hưởng ưu đãi - Trãi nghiệm thoải mái</h5>
        <div class="flights">
        </div>
        <h2 class="mt-3">Vé Máy Bay Phổ Biến</h2>
        <ul class="row list-unstyled gy-3 " style="margin: 0 auto;">
            <li class="col-lg-3 col-sm-6">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/Ho-Chi-Minh-City-SGN.jpg" class="" alt="..." style="height: 100%; width: 100%;">

                    <div class="plane-ticket-body">
                        <div class="plane-ticket-from">
                            <p>Hà Nội đến</p>
                        </div>
                        <div class="plane-ticket-to">
                            <p>TP. Hồ Chí Minh</p>
                        </div>
                        <div class="plane-ticket-day">
                            <p>29/10/2024</p>
                        </div>
                        <div class="plane-ticket-titel">
                            <p>1.540.000 VND</p>
                        </div>
                        <div class="plane-ticket-text">
                            <p>Một chiều / Phổ thông</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-sm-6 ">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/62fa63bb2d31e_Ha_Noi.jpg">

                    <div class="plane-ticket-body">
                        <div class="plane-ticket-from">
                            <p>TP. Hồ Chí Minh đến</p>
                        </div>
                        <div class="plane-ticket-to">
                            <p>Hà Nội</p>
                        </div>
                        <div class="plane-ticket-day">
                            <p>27/10/2024</p>
                        </div>
                        <div class="plane-ticket-titel">
                            <p>1.540.000 VND</p>
                        </div>
                        <div class="plane-ticket-text">
                            <p>Một chiều / Phổ thông</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-sm-6 ">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/62fa641d28f87_Da_Nang.jpg">

                    <div class="plane-ticket-body">
                        <div class="plane-ticket-from">
                            <p>TP. Hồ Chí Minh đến</p>
                        </div>
                        <div class="plane-ticket-to">
                            <p>Đà Nẵng</p>
                        </div>
                        <div class="plane-ticket-day">
                            <p>20/10/2024</p>
                        </div>
                        <div class="plane-ticket-titel">
                            <p>957.000 VND</p>
                        </div>
                        <div class="plane-ticket-text">
                            <p>Một chiều / Phổ thông</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-sm-6 ">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/62fa639c2d39d_Da_Lat.jpg">

                    <div class="plane-ticket-body">
                        <div class="plane-ticket-from">
                            <p>TP. Hồ Chí Minh đến</p>
                        </div>
                        <div class="plane-ticket-to">
                            <p>Đà Lạt</p>
                        </div>
                        <div class="plane-ticket-day">
                            <p>21/10/2024</p>
                        </div>
                        <div class="plane-ticket-titel">
                            <p>1.046.000 VND</p>
                        </div>
                        <div class="plane-ticket-text">
                            <p>Một chiều / Phổ thông</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-sm-6">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/62fa6477ced02_Nha_Trang.jpg">

                    <div class="plane-ticket-body">
                        <div class="plane-ticket-from">
                            <p>TP. Hồ Chí Minh đến</p>
                        </div>
                        <div class="plane-ticket-to">
                            <p>Nha Trang</p>
                        </div>
                        <div class="plane-ticket-day">
                            <p>21/10/2024</p>
                        </div>
                        <div class="plane-ticket-titel">
                            <p>892.000 VND</p>
                        </div>
                        <div class="plane-ticket-text">
                            <p>Một chiều / Phổ thông</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-sm-6">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/62fa63d86c890_Hai_Phong.jpg">

                    <div class="plane-ticket-body">
                        <div class="plane-ticket-from">
                            <p>TP. Hồ Chí Minh đến</p>
                        </div>
                        <div class="plane-ticket-to">
                            <p>Hải Phòng </p>
                        </div>
                        <div class="plane-ticket-day">
                            <p>20/10/2024</p>
                        </div>
                        <div class="plane-ticket-titel">
                            <p>1.092.000 VND</p>
                        </div>
                        <div class="plane-ticket-text">
                            <p>Một chiều / Phổ thông</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-sm-6">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/62fa6512a3199_Quy_Nhon.jpg">

                    <div class="plane-ticket-body">
                        <div class="plane-ticket-from">
                            <p>TP. Hồ Chí Minh đến</p>
                        </div>
                        <div class="plane-ticket-to">
                            <p>Quy Nhơn</p>
                        </div>
                        <div class="plane-ticket-day">
                            <p>03/12/2024</p>
                        </div>
                        <div class="plane-ticket-titel">
                            <p>1.094.000 VND</p>
                        </div>
                        <div class="plane-ticket-text">
                            <p>Một chiều / Phổ thông</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-sm-6">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/62fa63fa62a8d_Hue.jpg">

                    <div class="plane-ticket-body">
                        <div class="plane-ticket-from">
                            <p>TP. Hồ Chí Minh đến</p>
                        </div>
                        <div class="plane-ticket-to">
                            <p>Huế</p>
                        </div>
                        <div class="plane-ticket-day">
                            <p>20/12/2024</p>
                        </div>
                        <div class="plane-ticket-titel">
                            <p>1.162.000 VND</p>
                        </div>
                        <div class="plane-ticket-text">
                            <p>Một chiều / Phổ thông</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-sm-6">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/Vinh-VII.jpg">

                    <div class="plane-ticket-body">
                        <div class="plane-ticket-from">
                            <p>TP. Hồ Chí Minh đến</p>
                        </div>
                        <div class="plane-ticket-to">
                            <p>Vinh</p>
                        </div>
                        <div class="plane-ticket-day">
                            <p>28/10/2024</p>
                        </div>
                        <div class="plane-ticket-titel">
                            <p>1.432.000 VND</p>
                        </div>
                        <div class="plane-ticket-text">
                            <p>Một chiều / Phổ thông</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-sm-6">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/Thanh-Hoa-THD.jpg">

                    <div class="plane-ticket-body">
                        <div class="plane-ticket-from">
                            <p>TP. Hồ Chí Minh đến</p>
                        </div>
                        <div class="plane-ticket-to">
                            <p>Thanh Hóa</p>
                        </div>
                        <div class="plane-ticket-day">
                            <p>03/12/2024</p>
                        </div>
                        <div class="plane-ticket-titel">
                            <p>1.425.000 VND</p>
                        </div>
                        <div class="plane-ticket-text">
                            <p>Một chiều / Phổ thông</p>
                        </div>
                    </div>
                </div>
            </li>

            <li class="col-lg-3 col-sm-6">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/Ho-Chi-Minh-City-SGN.jpg">

                    <div class="plane-ticket-body">
                        <div class="plane-ticket-from">
                            <p>Nha Trang đến</p>
                        </div>
                        <div class="plane-ticket-to">
                            <p>TP.Hồ Chí Minh</p>
                        </div>
                        <div class="plane-ticket-day">
                            <p>29/10/2024</p>
                        </div>
                        <div class="plane-ticket-titel">
                            <p>892.000 VND</p>
                        </div>
                        <div class="plane-ticket-text">
                            <p>Một chiều / Phổ thông</p>
                        </div>
                    </div>
                </div>
            </li>

            <li class="col-lg-3 col-sm-6">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/62fa641d28f87_Da_Nang.jpg">

                    <div class="plane-ticket-body">
                        <div class="plane-ticket-from">
                            <p> Hà Nội đến</p>
                        </div>
                        <div class="plane-ticket-to">
                            <p> Đà Nẵng </p>
                        </div>
                        <div class="plane-ticket-day">
                            <p>03/11/2024</p>
                        </div>
                        <div class="plane-ticket-titel">
                            <p>1.120.000 VND</p>
                        </div>
                        <div class="plane-ticket-text">
                            <p>Một chiều / Phổ thông</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-sm-6">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/Ho-Chi-Minh-City-SGN.jpg">

                    <div class="plane-ticket-body">
                        <div class="plane-ticket-from">
                            <p> Đà Nẵng đến</p>
                        </div>
                        <div class="plane-ticket-to">
                            <p>TP.Hồ Chí Minh</p>
                        </div>
                        <div class="plane-ticket-day">
                            <p>20/12/2024</p>
                        </div>
                        <div class="plane-ticket-titel">
                            <p>1.162.000 VND</p>
                        </div>
                        <div class="plane-ticket-text">
                            <p>Một chiều / Phổ thông</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-sm-6">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/62fa63bb2d31e_Ha_Noi.jpg">

                    <div class="plane-ticket-body">
                        <div class="plane-ticket-from">
                            <p>Cần Thơ đến</p>
                        </div>
                        <div class="plane-ticket-to">
                            <p>Hà Nội</p>
                        </div>
                        <div class="plane-ticket-day">
                            <p>17/12/2024</p>
                        </div>
                        <div class="plane-ticket-titel">
                            <p>1.643.000 VND</p>
                        </div>
                        <div class="plane-ticket-text">
                            <p>Một chiều / Phổ thông</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-sm-6">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/62fa63fa62a8d_Hue.jpg">

                    <div class="plane-ticket-body">
                        <div class="plane-ticket-from">
                            <p>Hà Nội đến</p>
                        </div>
                        <div class="plane-ticket-to">
                            <p>Huế</p>
                        </div>
                        <div class="plane-ticket-day">
                            <p>03/11/2024</p>
                        </div>
                        <div class="plane-ticket-titel">
                            <p>1.289.000 VND</p>
                        </div>
                        <div class="plane-ticket-text">
                            <p>Một chiều / Phổ thông</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-sm-6">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/62fa63bb2d31e_Ha_Noi.jpg">

                    <div class="plane-ticket-body">
                        <div class="plane-ticket-from">
                            <p>Nha Trang đến</p>
                        </div>
                        <div class="plane-ticket-to">
                            <p>Hà Nội</p>
                        </div>
                        <div class="plane-ticket-day">
                            <p>20/11/2024</p>
                        </div>
                        <div class="plane-ticket-titel">
                            <p>1.162.000 VND</p>
                        </div>
                        <div class="plane-ticket-text">
                            <p>Một chiều / Phổ thông</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <h2>Kế hoạch riêng, giá đặc biệt</h2>
        <h5>Tiết kiệm chi phí - Theo đuổi ước mơ</h5>
        <ul class="row list-unstyled gy-3">
            <li class="col-lg-3 ">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/duhoc.webp">
                    <div class="plane-ticket-body1">
                        <div class="plane-ticket-text1">
                            <h2>Du học > </h2>
                            <p> Đặt vé máy bay du học giá đặc biệt, không bỏ lỡ ưu đãi riêng cho du học sinh. </p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 ">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/dinhcu.webp">
                    <div class="plane-ticket-body1">
                        <div class="plane-ticket-text1">
                            <h2>Định cư > </h2>
                            <p> Săn vé giá rẻ cho người đi định cư. Liên hệ với chúng tôi ngay hôm nay! </p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 ">
                <div class="plane-ticket ">
                    <img src="<?php echo BASE_URL?>img/lamviec.webp">

                    <div class="plane-ticket-body1">
                        <div class="plane-ticket-text1">
                            <h2>Làm việc ></h2>
                            <p> Giá vé đặc biệt cho cô dâu định cư và người đi xuất khẩu lao động. </p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 ">
                <div class="plane-ticket">
                    <img src="<?php echo BASE_URL?>img/thamban.webp">
                    <div class="plane-ticket-body1">
                        <div class="plane-ticket-text1">
                            <h2>Săn vé > </h2>
                            <p> Vé máy bay giá rẻ du lịch và thăm thân Mỹ, Canada. Chat để tư vấn miễn phí. </p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="" style="padding: 25px 0;">
            <div>
                <h2>Thông tin hữu ích khi đi máy bay</h2>
                <h5>Có một hành trình hơn cả mong đợi!
            </div>
            <div id="accordion">
                <div class="row ">

                    <div class="col-md-4">
                        <div class="text-center">
                            <i class="bi bi-card-list"></i>
                            <h4 class="text-xl font-semibold mb-4">Thủ tục</h4>
                        </div>
                        <div class="">
                            <div _conten class="btn btn-light questionActive" data-bs-toggle="collapse" data-bs-target="#procedure1">
                                <h5>Tôi phải đến trước sân bay mấy tiếng?</h5>
                            </div>
                            <div class="btn btn-light" data-bs-toggle="collapse" data-bs-target="#procedure2">
                            <h5>Check in online rồi thì có cần tới quầy không?</h5>
                            </div>
                            <div class="btn btn-light" data-bs-toggle="collapse" data-bs-target="#procedure3">
                            <h5>Tôi muốn đổi ngày bay và giờ bay thì làm sao?
                            </div>
                            <div class="btn btn-light" data-bs-toggle="collapse" data-bs-target="#procedure4">
                            <h5>Trẻ em có được phép bay một mình không?
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <i class="bi bi-suitcase-lg"></i>
                            <h4 class="text-xl font-semibold mb-4">Giấy tờ & Hành lý</h4>
                        </div>
                        <div class="">
                            <div class="btn btn-light"  data-bs-toggle="collapse" data-bs-target="#baggage1">
                                <h5>Đi máy bay ở Việt Nam cần mang những loại giấy tờ gì?
                            </div>
                            <div class="btn btn-light "  data-bs-toggle="collapse" data-bs-target="#baggage2">
                                <h5>Tôi bị mất CMND thì có được bay không?
                            </div>
                            <div class="btn btn-light"  data-bs-toggle="collapse" data-bs-target="#baggage3">
                                <h5>Tôi được mang theo bao nhiêu kg hành lý?
                            </div>
                            <div class="btn btn-light"  data-bs-toggle="collapse" data-bs-target="#baggage4">
                                <h5>Đồ dùng cá nhân nào được mang lên máy bay?
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="text-center">
                            <i class="bi bi-file-earmark-text"></i>
                            <h4 class="text-xl font-semibold mb-4">Lưu ý</h4>
                        </div>
                        <div class="">
                            <div class="btn btn-light"  data-bs-toggle="collapse" data-bs-target="#note1">
                                <h5>Em bé (trẻ em) bao nhiêu tháng tuổi thì được đi máy bay?
                            </div>
                            <div class="btn btn-light "  data-bs-toggle="collapse" data-bs-target="#note2">
                                <h5>Tại sao tôi phải tắt điện thoại khi đi máy bay?
                            </div>
                            <div class="btn btn-light"  data-bs-toggle="collapse" data-bs-target="#note3">
                                <h5>Phụ nữ mang thai đi máy bay lưu ý những gì?
                            </div>
                            <div class="btn btn-light"  data-bs-toggle="collapse" data-bs-target="#note4">
                                <h5>Vé khứ hồi, không bay chiều đi thì cần làm gì?
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div id="note1" class="collapse row mt-4" data-bs-parent="#accordion">
                        <div class="col-md-9">
                            <p>- Em bé từ 14 ngày tuổi trở lên so với ngày khởi hành có thể đi máy bay.</p>
                            <p>- Mỗi cha, mẹ, người giám hộ của trẻ hoặc người được ủy quyền chỉ được đi cùng 01 em bé.</p>
                            <p>- Các chuyến bay đều giới hạn số lượng em bé nên Hành khách cần kiểm tra tình trạng chỗ của em bé trong đơn hàng của mình.</p>
                            <p>- Em bé dưới 30 ngày tuổi, khi đi máy bay cần phải có giấy chứng sinh. Em bé từ 31 ngày tuổi trở lên, khi đi máy bay cần phải có giấy khai sinh/ trích lục khai sinh.</p>
                        </div>

                        <div class="col-md-3">
                            <img src="<?php echo BASE_URL?>img/qa11.svg" alt="">
                        </div>
                    </div>
                    <div id="note2" class="collapse row mt-4" data-bs-parent="#accordion">
                        <div class="col-md-9">
                            <p>- Điện thoại là thiết bị có thể phát ra sóng vô tuyến gây nhiễu hệ thống điện tử nhạy cảm của máy bay. Giai đoạn cất cánh và hạ cánh của máy bay được xem là 2 giai đoạn quan trọng nhất đối với mỗi chuyến bay và đòi hỏi phi hành đoàn phải tập trung cao độ, duy trì liên lạc với trạm kiểm soát không lưu ATC và đảm bảo hoạt động của tất cả các trang thiết bị trên máy bay.</p>
                            <p>- Ngoài việc loại trừ nguy cơ gây nhiễu thì việc cấm sử dụng thiết bị điện tử cũng ngăn ngừa khả năng gây tổn thương cho hành khách trong trường hợp máy bay dằn xóc khi đi vào vùng thời tiết xấu, thiết bị có thể bị hất văng gây nguy hiểm.</p>
                            <p>- Bên cạnh đó, việc cấm sử dụng các thiết bị điện tử cá nhân trong quá trình cất hạ cánh cũng giúp cho hành khách tập trung theo dõi các chỉ dẫn an toàn bay hơn và phi hành đoàn cũng không bị phân tâm khi thực hiện nhiệm vụ của mình.</p>
                            <p>- Đối với các chuyến bay Nội Địa Việt Nam, các hãng hàng không hiện tại đều cấm sử dụng điện thoại di động trên máy bay và cho phép sử dụng một số thiết bị điện tử khác sau khi máy bay đã ổn định độ cao.</p>
                        </div>
                        <div class="col-md-3">
                            <img src="<?php echo BASE_URL?>img/qa5.svg" alt="">
                        </div>
                    </div>
                    <div id="note3" class="collapse row mt-4" data-bs-parent="#accordion">
                        <div class="col-md-9">
                            <p>Hành khách là phụ nữ mang thai cần lưu ý những thông tin sau:</p>
                            <p>- Hành khách mang thai cần mang theo: giấy khám thai, sổ khám thai, phiếu siêu âm, số sức khỏe được bác sĩ xác nhận trong vòng 07 ngày trước ngày dự định khởi hành chặng bay đầu tiên.</p>
                            <p>- Hồ sơ này vẫn được chấp nhận cho chặng bay tiếp theo nếu hành khách là phụ nữ có thai không phát sinh vấn đề về sức khỏe trong suốt hành trình</p>
                            <p>- Hồ sơ thai sản cần có xác nhận của Bác Sĩ Chuyên Khoa với những thông tin cơ bản sau: thai đơn hay đôi, sinh ba..., số tuần của thai kỳ, ngày dự kiến sinh, tình trạng sức khỏe bà mẹ và thai nhi tốt, được phép đi lại bằng máy bay</p>
                            <p>- Hành khách mang thai cần khai báo về tình trạng thai kỳ tại quầy làm thủ tục cho nhân viên sân bay để được hỗ trợ.</p>
                            <p>- Hành khách mang thai cần tuân thủ các quy định vận chuyển của hãng hàng không.</p>
                            <p>Lưu ý: Đối với các hãng hàng không nội địa Việt Nam, hành khách có thai kỳ từ 32 tuần trở lên sẽ bị từ chối vận chuyển. Trong một số trường hợp đặc biệt, hành khách cần liên hệ trực tiếp hãng hàng không để được hỗ trợ.</p>
                        </div>
                        <div class="col-md-3">
                            <img src="<?php echo BASE_URL?>img/qa6.svg" alt="">
                        </div>
                    </div>
                    <div id="note4" class="collapse row mt-4" data-bs-parent="#accordion">
                        <div class="col-md-9">
                            <p>Đối với những khách hàng mua vé máy bay khứ hồi, hành trình bay vẫn được khai thác bình thường nhưng hành khách không thực hiện chuyến bay (Noshow). Hành khách cần lưu ý những thông tin sau:</p>
                            <p>- Đối với hãng Vietjet Air: hành khách không thực hiện chặng bay đầu tiên, chặng bay tiếp theo vẫn còn hiệu lực khởi hành</p>
                            <p>- Đối với hãng Vietnam Airlines và Bamboo Airways: hành khách không thực hiện chặng bay đầu tiên, chặng bay tiếp theo sẽ tự động bị hủy mà không thông báo đến hành khách</p>
                            <p>Do đó, hành khách cần lưu ý, nếu không thực hiện chuyến bay đầu tiên, vui lòng thông báo đến nhân viên sân bay / nhân viên đại lý phòng vé hoặc tổng đài hãng ghi nhận không thực hiện chặng đi và yêu cầu giữ nguyên chặng về.</p>
                            <p>Hành khách cần thông báo đến hãng hàng không trước giờ khởi hành ít nhất 06 tiếng để không ảnh hưởng đến chuyến bay còn lại của hành trình.</p>
                        </div>
                        <div class="col-md-3">
                            <img src="<?php echo BASE_URL?>img/qa16.svg" alt="">
                        </div>
                    </div>
                    <div id="baggage1" class="collapse row mt-4" data-bs-parent="#accordion">
                        <div class="col-md-9">
                            <b>ĐỐI VỚI HÀNH KHÁCH MANG QUỐC TỊCH VIỆT NAM</b>
                            <p>- Trẻ sơ sinh dưới 02 tuổi: giấy chứng sinh, giấy khai sinh, giấy trích lục khai sinh</p>
                            <p>- Trẻ em từ 02 đến dưới 14 tuổi: giấy khai sinh</p>
                            <p>- Người lớn từ 14 tuổi trở lên: chứng minh nhân nhân, thẻ căn cước, hộ chiếu, giấy phép lái xe, giấy xác nhận nhân thân...
                            </p>
                            <b>ĐỐI VỚI HÀNH KHÁCH MANG QUỐC TỊCH NƯỚC NGOÀI:</b>
                            <p>- Hộ chiếu nước ngoài hoặc giấy thông hành, thị thực rời, thẻ thường trú, thẻ tạm trú do Việt Nam cấp (lưu ý các loại giấy tờ này phải có dấu xuất, nhập cảnh Việt Nam theo quy định).
                            </p>
                            <p>- Trong trường hợp hành khách mất hộ chiếu, phải có công hàm của cơ quan ngoại giao, lãnh sự của quốc gia hành khách mang quốc tịch hoặc công văn của sở ngoại vụ, cơ quan công an địa phương nơi mất xác nhận nhân thân và việc mất hộ chiếu của hành khách, có dán ảnh, dấu giáp lai. Công hàm, công văn xác nhận có giá trị sử dụng 30 ngày kể từ ngày xác nhận.</p>
                            <p>Giấy tờ của hành khách sử dụng khi đi tàu bay phải đảm bảo các điều kiện sau:</p>
                            <p>- Còn giá trị sử dụng.
                            </p>
                            <p>- Có ảnh đóng dấu giáp lai, trừ giấy khai sinh, giấy chứng sinh của trẻ em, thẻ kiểm soát an ninh, thẻ nhận dạng của các hãng hàng không.
                            </p>
                            
                        </div>

                        <div class="col-md-3">
                            <img src="<?php echo BASE_URL?>img/qa8.svg" alt="">
                        </div>
                    </div>
                    <div id="baggage2" class="collapse row mt-4" data-bs-parent="#accordion">
                        <div class="col-md-9">
                            <p>Đối với hành khách là người lớn: nếu bị mất chứng minh nhân dân (thẻ căn cước), hành khách có thể sử dụng các loại giấy tờ khác thay thế để sử dụng khi bay như: hộ chiếu, giấy phép lái xe, giấy xác nhận nhân thân...</p>
                            <p>Giấy xác nhận nhân thân cần được xác nhận trong vòng 07 ngày so với ngày khởi hành của chuyến bay.</p>  
                        </div>

                        <div class="col-md-3">
                            <img src="<?php echo BASE_URL?>img/qa9.svg" alt="">
                        </div>
                    </div>
                    <div id="baggage3" class="collapse row mt-4" data-bs-parent="#accordion">
                        <div class="col-md-9">
                            <p>Tùy vào điều kiện giá vé mà hạng vé của Hành khách có bao gồm hành lý xách tay và hành lý ký gửi, hành khách cần kiểm tra điều kiện vé và hành lý đi kèm trên xác nhận của đơn hàng:</p>
                            <p>Đối với hạng vé chỉ bao gồm hành lý xách tay:</p>  
                            <p>- Vietjet Air / Bamboo Airways: mỗi hành khách chỉ được phép tối đa 01 kiện 07kg với kích thước tối đa các chiều 23x36x56cm
                            </p>
                            <p>- Vietnam Airlines:</p>
                            <p>+ Các chuyến bay do Vietnam Airlines và Vasco khai thác: mỗi hành khách chỉ được phép tối đa 01 kiện 10 kgs + 01 phụ kiện 02 kgs với tổng kích thước của hành lý xách tay không được vượt quá 115cm / 45in (56cm x 36cm x 23cm hoặc 22in x 14in x 9in).</p>
                            <p>+ Các chuyến bay do Pacific Airlines khai thác: mỗi hành khách chỉ được phép tối đa 01 kiện 07kg với kích thước tối đa các chiều 23x36x56cm</p>
                            <p>Đối với hạng vé có bao gồm hành lý ký gửi:</p>
                            <p>- Hãng Bamboo Airways: từ hạng vé Bamboo Plus sẽ bao gồm gói hành lý 20kgs trong giá vé.</p>
                            <p>- Hãng Vietjet Air: từ hạng vé Skyboss sẽ bao gồm gói hành lý 30kgs trong giá vé</p>
                            <p>- Hãng Vietnam Airlines: từ hạng vé Phổ Thông Tiêu Chuẩn sẽ bao gồm 01 kiện 23kgs cho mỗi hành khách</p>
                            <p>Lưu ý:</p>
                            <p>- Các gói hoặc kiện hành lý vượt ngoài trọng lượng và số kiện theo quy định cho phép có thể được yêu cầu thanh toán thêm các khoản phát sinh tại sân bay</p>
                            <p>- Tùy vào từng chương trình khuyến mãi hoặc điều kiện giá vé khác nhau mà hạng vé có hoặc không bao gồm hành lý ký gửi. Hành khách cần kiểm tra với nhân viên tư vấn về gói hành lý của mình trên mỗi chuyến bay để có thể sắp xếp hành lý được tốt nhất.</p>
                            <p>- Quý khách cần mua thêm hành lý ký gửi, vui lòng liên hệ WorldTravel.com trước ít nhất 06 tiếng trước giờ khởi hành và trong giờ hành chính để được hỗ trợ tốt nhất.</p>
                        </div>

                        <div class="col-md-3">
                            <img src="<?php echo BASE_URL?>img/qa10.svg" alt="">
                        </div>
                    </div>
                    <div id="baggage4" class="collapse row mt-4" data-bs-parent="#accordion">
                        <div class="col-md-9">
                            <p>Ngoài phụ kiện các nhân, hành lý xách tay theo quy định, một số vật dụng cá nhân hành khách được phép mang lên máy bay bao gồm:</p>
                            <p>- Ô dù (trừ loại có gậy, hoặc cán ô có đầu nhọn bịt kim loại)</p>
                            <p>- Một quyển sách hoặc báo/tạp chí</p>
                            <p>- Áo khoác, khăn choàng cổ</p>
                            <p>- Dụng cụ cho hành khách khuyết tật</p>
                            <p>- Xe nôi trẻ em (tùy vào khả năng chất xếp từng loại tàu bay, xe nôi có thể được vận chuyển theo hành lý ký gửi miễn phí)</p>
                            <p>Hành khách cần lưu ý, tất cả các hành lý và phụ kiện, vật dụng cá nhân cần đảm bảo đúng trọng lượng quy định. Vượt quá trọng lượng sẽ buộc phải mua thêm hành lý phát sinh tại sân bay.</p>
                        </div>

                        <div class="col-md-3">
                            <img src="<?php echo BASE_URL?>img/qa15.svg" alt="">
                        </div>
                    </div>
                    <div id="procedure1" class="collapse row mt-4" data-bs-parent="#accordion">
                        <div class="col-md-9">
                            <b> Đối với chuyến bay Nội Địa:</b>
                            <p>- Hành khách cần có mặt tại quầy làm thủ tục trước 02 tiếng so với giờ khởi hành</p>
                            <p>- Đối với Hành khách đã làm checkin online, cần có mặt tại quầy làm thủ tục trước ít nhất 01
                                tiếng so với giờ khởi hành</p>
                            <p>- Thời gian đóng quầy làm thủ tục (kết thúc nhận hành khách) trước 40 phút so với giờ khởi hành
                            </p>
                            <p>- Thời gian đóng cửa lên máy bay (kết thúc nhận hành khách) trước 20 phút so với giờ khởi hành
                            </p>
                            <b>Đối với chuyến bay Quốc Tế:</b>
                            <p>- Hành khách cần có mặt tại quầy làm thủ tục trước 03 tiếng so với giờ khởi hành</p>
                            <p>- Thời gian đóng quầy làm thủ tục (kết thúc nhận hành khách) trước 50 phút so với giờ khởi hành
                            </p>
                            <p>- Thời gian đóng cửa lên máy bay (kết thúc nhận hành khách) trước 30 phút so với giờ khởi hành
                            </p>
                            <p>Việc đến sân bay sớm theo quy định của Hãng sẽ giúp hành khách có sự chủ động và có thể có thêm
                                thời gian để xử lý các vấn đề bất khả kháng (Nếu có) xảy ra.</p>
                        </div>

                        <div class="col-md-3">
                            <img src="<?php echo BASE_URL?>img/qa2.svg" alt="">
                        </div>
                    </div>
                    
                    <div id="procedure2" class="collapse row mt-4" data-bs-parent="#accordion">
                        <div class="col-md-9">
                            <b>Đối với trường hợp chỉ có hành lý xách tay:</b>
                            <p>Những hành khách đã làm check in online qua website, ứng dụng điện thoại, kios tại sân bay, cần
                                xuất trình Thẻ Lên Tàu Bay (Boarding Pass) tại Cổng Kiểm Soát An Ninh và có mặt trước cửa ra máy
                                bay theo thời gian ghi nhận trên Thẻ Lên Tàu Bay.
                            </p>
                            <b>Đối với trường hợp có hành lý ký gửi:</b>
                            <p> Những hành khách đã làm check in online qua website, ứng dụng
                                điện thoại, kios tại sân bay, cần phải đến quầy làm thủ tục của Hãng để ký gửi và soi chiếu
                                hành lý ký gửi trước khi đến Cổng Kiểm Soát An Ninh. </p>
                            <p>Tuy nhiên, trong một số giai đoạn nhất định như Cao Điểm, Lễ,
                                Tết hoặc vì một số lý do đặc biệt liên quan đến quy định của các Hãng hoặc Cục Hàng Không.
                                Hành khách đã làm thủ tục check in online vẫn có thể được yêu cầu đến quầy làm thủ tục để
                                được kiểm tra các thông tin liên quan.</p>
                        </div>
                        <div class="col-md-3">
                            <img src="<?php echo BASE_URL?>img/qa4.svg" alt="">
                        </div>
                    </div>
                    <div id="procedure3" class="collapse row mt-4" data-bs-parent="#accordion">
                        <div class="col-md-9">
                            
                            <p>Hành khách có nhu cầu đổi ngày bay và giờ bay vui lòng liên hệ với nhân viên phụ trách đơn hàng của WonderWorld.com để được hỗ trợ
                            </p>
                            <p>Các thông tin cần lưu ý:</p>
                            <p>- Hành khách cần kiểm tra điều kiện vé được hiển thị trên xác nhận đơn hàng</p>
                            <p>- Hành khách cần chuẩn bị sẵn lịch bay mới để nhân viên tư vấn hỗ trợ nhanh nhất</p>
                            <p>- Tham khảo lịch bay mới trên website WonderWorld.com với đầy đủ lịch bay mới nhất của Hãng</p>
                            <p>- Giá vé mới cần đổi không thể giữ chỗ, nên hành khách cần quyết định nhanh và thanh toán để tránh các chi phí thay đổi liên tục.</p>
                            <p>- Thời gian đổi vé cần được thực hiện trước khi hãng đóng chuyến nên Hành khách cần liên hệ với WonderWorld.com trước ít nhất 06 tiếng so với giờ khởi hành (trong giờ hành chính)</p>
                        </div>
                        <div class="col-md-3">
                            <img src="<?php echo BASE_URL?>img/qa12.svg" alt="">
                        </div>
                    </div>
                    <div id="procedure4" class="collapse row mt-4" data-bs-parent="#accordion">
                        <div class="col-md-9">
                            
                            <p>- Các hãng hàng không quy định mỗi trẻ em khi thực hiện chuyến bay phải có ít nhất 1 người lớn từ 18 tuổi đi cùng.
                            </p>
                            <p>- Một số trường hợp đặc biệt cần cho trẻ em bay 1 mình, khách hàng cần phải đăng ký dịch vụ đặc biệt này với Hãng bay để đảm bảo an toàn cho trẻ em.</p>
                            <p>- Các dịch vụ đặc biệt cho trẻ em bay 1 mình có những quy định về độ tuổi của trẻ em và yêu cầu cụ thể khác từ hãng hàng không.</p>
                            <p>- Bố mẹ hoặc người thân, người được ủy quyền cần đăng ký dịch vụ trẻ em bay 1 mình trước ít nhất 24 - 36 tiếng so với giờ khởi hành tại các Phòng Vé chính hãng</p>
                            
                        </div>
                        <div class="col-md-3">
                            <img src="<?php echo BASE_URL?>img/qa13.svg" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>

    </div>
    <button type="button" class="btn-support rounded-5"><a href="">Bạn cần hỗ trợ?</a></button>
    <?php include_once '../app/view/footer.php'; ?>
    <script src="<?php echo BASE_URL?>js/sprict.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>