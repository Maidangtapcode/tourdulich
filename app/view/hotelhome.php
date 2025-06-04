<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>css/mainn.css?v=3">
    <title>WorldTravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <div class="bg-image-hotel">
            <div class="container">
                <div class="header-nav">
                    <div class="row-row py-3">
                        <div class="col-30">
                            <img class="rounded-3" src="<?php echo BASE_URL ?>img/logo.png" alt="" width="80px" height="80px">
                        </div>
                        <div class=" col-70">

                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?php BASE_URL ?>index">Tour</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo BASE_URL ?>flights/viewflights">Vé máy bay</a>
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
                                                        <li class="lg-us-01"><button class="btn-lg-us"><a class="login-navbar" href="<?php BASE_URL ?>login">Đăng Nhập</a>
                                                            </button></li>
                                                        <li class="lg-us-02">Chưa có tài khoản?<a href="<?php BASE_URL ?>login/signup">Đăng kí</a> ngay
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
    <!--Chi tiết về phần khách sạn của worldtravel-->
    <div class="container">
        <div class="hotel-title">
            <h3>Khách sạn</h3>
            <div class="tour-star">
                <span>Đánh giá:</span>
                <i class=" fa fa-solid fa-star"></i>
                <i class="fa fa-solid fa-star"></i>
                <i class="fa fa-solid fa-star"></i>
                <i class="fa fa-solid fa-star"></i>
                <i class="fa fa-solid fa-star-half"></i>
                <span class="tour-feedback">4.6/5 (2N5 đánh giá)</span>
            </div>
            <p>Đặt phòng khách sạn - Tổng hợp hơn 200,000 khách sạn trong nước và quốc tế đang có khuyến mãi giá tốt,
                quý khách có thể dễ dàng tìm kiếm phòng khách sạn cần đặt ngay tại website công ty Du Lịch Việt.
                Bên cạnh việc có thể đặt mua được phòng khách sạn giá rẻ trực tuyến đơn giản, an toàn, tiết kiệm...quý
                khách còn có thể tham khảo, so sánh giá phòng khách sạn được cập nhật liên tục tại thời điểm quý khách
                muốn đặt mua.
            </p>
        </div>
        <hr>
        <h4>SALE KHÁCH SẠN TRONG NƯỚC</h4>
        <div class="hotel-address">
            <ul class="d-flex list-unstyled p-0  fw-bold py-2" style="list-style-type: none; flex-wrap: wrap;">
                <li class="p-2 rounded-5 hotel-sale-tn m-2 " id="hoteltrongnuocnum1" onclick="numhoteltrongnuoc(1)"
                    style="color: #fff; background-color: #5fc7ff;">Hà Nội</li>
                <li class="p-2 rounded-5 hotel-sale-tn m-2 " id="hoteltrongnuocnum2" onclick="numhoteltrongnuoc(2)">
                    TP.Hồ Chí Minh</li>
                <li class="p-2 rounded-5 hotel-sale-tn m-2 " id="hoteltrongnuocnum3" onclick="numhoteltrongnuoc(3)">Nha
                    Trang</li>
                <li class="p-2 rounded-5 hotel-sale-tn m-2 " id="hoteltrongnuocnum4" onclick="numhoteltrongnuoc(4)">Đà
                    Lạt</li>
                <li class="p-2 rounded-5 hotel-sale-tn m-2 " id="hoteltrongnuocnum5" onclick="numhoteltrongnuoc(5)">Vũng
                    Tàu</li>
                <li class="p-2 rounded-5 hotel-sale-tn m-2 " id="hoteltrongnuocnum6" onclick="numhoteltrongnuoc(6)">Phan
                    Thiết</li>
                <li class="p-2 rounded-5 hotel-sale-tn m-2 " id="hoteltrongnuocnum7" onclick="numhoteltrongnuoc(7)">Phú
                    Quốc</li>
                <li class="p-2 rounded-5 hotel-sale-tn m-2 " id="hoteltrongnuocnum8" onclick="numhoteltrongnuoc(8)">Hội
                    An</li>

            </ul>
        </div>
        <div class="hotel-detail">
            <!--Hotel Ha Noi sale-->
            <div class="">
                <div class="row hotel-sale" id="hotelsale1">
                    <?php
                            foreach($listhotel as $key => $value){
                    ?>
                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="../<?php echo htmlspecialchars($value['imghotel'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2"><?php echo htmlspecialchars($value['bannerhotel'], ENT_QUOTES, 'UTF-8'); ?></span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2"><?php echo htmlspecialchars($value['namehotel'], ENT_QUOTES, 'UTF-8'); ?> </span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                <?php 
                                    for ($i = 0; $i < intval($value['sosaohotel']); $i++) {
                                        echo '<i class="fa fa-solid fa-star"></i>';
                                    }
                                ?>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.6/5 <span
                                            style="color: #000;">(20 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;"><?php echo htmlspecialchars(number_format($value['giahotel'], 0, ',', '.'), ENT_QUOTES, 'UTF-8'); ?>
                                        VND </span>
                                    <br>
                                    <span class="fw-bold"><?php echo htmlspecialchars(number_format($value['giahotelsale'], 0, ',', '.'), ENT_QUOTES, 'UTF-8'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    
                </div>
            </div>

            <!--Khách sạn sale tại tp.hcm-->
            <div class="hotel-sale" id="hotelsale2">
                <div class="row">
                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/silverland_tpgcm.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 40%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Silverland Ben Thanh</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.9/5 <span
                                            style="color: #000;">(19 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">4.769.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">2.861.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/the-one-hcm.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 55%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">The One Hotel </span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>

                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.0/5 <span
                                            style="color: #000;">(74 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through" style="color: #000;">850.000
                                        VND
                                    </span>
                                    <br>
                                    <span class="fw-bold">384.625 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/tsn-hotel-hcm.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 25%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Tân Sơn Nhất Saigon</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.4/5 <span
                                            style="color: #000;">(62 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">7.444.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">5.583.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/caravelle-hcm.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 40%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Oakwood Residence Hanoi </span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.6/5 <span
                                            style="color: #000;">(31 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">3.288.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">2.071.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Hotel Nha Trang-->
            <div class="hotel-sale" id="hotelsale3">
                <div class="row">
                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/Senia-nhatrang.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 60%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Senia Hotel</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>

                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.6/5 <span
                                            style="color: #000;">(289 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">1.400.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">420.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/muongthanh-nhatrang.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 55%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Muong Thanh Luxury </span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>

                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.6/5 <span
                                            style="color: #000;">(1N đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">3.205.800
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">1.250.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/goden-nhatrang.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 25%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Golden Hotel NhaTrang</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>

                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.5/5 <span
                                            style="color: #000;">(444 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through" style="color: #000;">363.333
                                        VND
                                    </span>
                                    <br>
                                    <span class="fw-bold">272.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/anrizon-nhatrang.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 70%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Anrizon Hotel NhaTrang </span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>

                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.6/5 <span
                                            style="color: #000;">(377 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">1.037.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">280.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Hotel đà lạt-->
            <div class="hotel-sale" id="hotelsale4">
                <div class="row">
                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/merperle-dalat.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 10%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">MerPerle DaLat Hotel</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.8/5 <span
                                            style="color: #000;">(58 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">2.170.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">1.920.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/ponter-dalat.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 35%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Pontus Hotel </span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.9/5 <span
                                            style="color: #000;">(687 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through" style="color: #000;">540.000
                                        VND
                                    </span>
                                    <br>
                                    <span class="fw-bold">405.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/golf-valley-dalat.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 30%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Golf Valley hotel</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.6/5 <span
                                            style="color: #000;">(506 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">2.180.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">1.635.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Hotel vũng tàu-->
            <div class="hotel-sale" id="hotelsale5">
                <div class="row">
                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/song-homestay-vungtau.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 40%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Song Homestay</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star-half"></i>

                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.9/5 <span
                                            style="color: #000;">(752 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through" style="color: #000;">413.000
                                        VND
                                    </span>
                                    <br>
                                    <span class="fw-bold">268.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/oyster-bay-hotel-vungtau.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 20%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Osyter Bay VungTau </span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star-half"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.8/5 <span
                                            style="color: #000;">(16 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">2.097.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">1.467.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/permier-pearl-vungtau.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 10%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Premier Pearl Hotel</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.7/5 <span
                                            style="color: #000;">(1N đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">1.601.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">1.521.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/impearl-vungtau.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 40%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Premier Pearl Hotel</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.6/5 <span
                                            style="color: #000;">(1N4 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">3.934.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">2.282.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Hotel Phan Thiết-->
            <div class="hotel-sale" id="hotelsale6">
                <div class="row">
                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/le-viva-phanthiet.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 50%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Le Viva Resort </span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>

                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.6/5 <span
                                            style="color: #000;">(139 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">2.314.000 VND
                                    </span>
                                    <br>
                                    <span class="fw-bold">1.272.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/mandala-phanthiet.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 45%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Mandala Cham Bay </span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>

                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.4/5 <span
                                            style="color: #000;">(108 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">2.160.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">1.284.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/muine-phanthiet.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 35%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Muine Bay Resort</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.8/5 <span
                                            style="color: #000;">(547 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">2.062.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">1.216.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/radisson-phanthiet.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 15%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Radisson Resort PhanThiet</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>

                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.6/5 <span
                                            style="color: #000;">(120 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">2.746.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">2.467.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Hotel Phu Quoc-->
            <div class="hotel-sale" id="hotelsale7">
                <div class="row">
                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/vinpearwonder-phuquoc.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 30%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Vinpear WonderWorld Phú Quốc</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>

                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.8/5 <span
                                            style="color: #000;">(105 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">10.640.000 VND
                                    </span>
                                    <br>
                                    <span class="fw-bold">7.890.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/vinholiday-phuquoc.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 20%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">VinHolidays Fiesta </span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>

                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.8/5 <span
                                            style="color: #000;">(740 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">1.360.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">1.020.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/varia-phuquoc.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 20%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Varia Hotel</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>

                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.5/5 <span
                                            style="color: #000;">(314 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through" style="color: #000;">678.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">508.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/wyndham-phuquoc.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 30%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Wyndham Grand Phu Quoc</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.6/5 <span
                                            style="color: #000;">(761 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">2.180.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">1.635.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Hotel hội an sale-->
            <div class="hotel-sale" id="hotelsale8">
                <div class="row">
                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/muongthanh-hoian.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 30%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Muong Thanh Holiday HoiAn</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.7/5 <span
                                            style="color: #000;">(301 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">1.800.000 VND
                                    </span>
                                    <br>
                                    <span class="fw-bold">1.296.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/hoian-royal.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 75%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Hoian Royal Villa</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.7/5 <span
                                            style="color: #000;">(113 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">1.190.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">357.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/vinpearresort-hoian.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 30%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Varia Hotel</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.6/5 <span
                                            style="color: #000;">(41 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">3.950.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">2.765.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <h4>SALE KHÁCH SẠN QUỐC TẾ</h4>
        <div class="hotel-address"></div>
        <ul class="d-flex list-unstyled p-0  fw-bold py-2" style="list-style-type: none; flex-wrap: wrap;">
            <li class="p-2 rounded-5 hotel-sale-tn m-2 " id="hotelngoainuocnum1" onclick="selectHotel(1)"
                style="color: #fff; background-color: #5fc7ff;">Bangkok</li>
            <li class="p-2 rounded-5 hotel-sale-tn m-2 " id="hotelngoainuocnum2" onclick="selectHotel(2)">
                Singapore</li>
            <li class="p-2 rounded-5 hotel-sale-tn m-2 " id="hotelngoainuocnum3" onclick="selectHotel(3)">Tokyo
            </li>
            <li class="p-2 rounded-5 hotel-sale-tn m-2 " id="hotelngoainuocnum4" onclick="selectHotel(4)">Seoul
            </li>
            <li class="p-2 rounded-5 hotel-sale-tn m-2 " id="hotelngoainuocnum5" onclick="selectHotel(5)">Phuket</li>
            <li class="p-2 rounded-5 hotel-sale-tn m-2 " id="hotelngoainuocnum6" onclick="selectHotel(6)">Bali
            </li>
        </ul>
        <div class="hotel-detail">
            <!--Hotel sale bangkok-->
            <div class="hotelsalenn" id="hotel_sale1">
                <div class="row">
                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/amara-bangkok.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 20%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Amara Bangkok</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.5/5 <span
                                            style="color: #000;">(50 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">
                                        1.890.000 VND
                                    </span>
                                    <br>
                                    <span class="fw-bold">1.296.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/novotel-hotel-bankok.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 40%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Novotel Bangkok Platinum</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.6/5 <span
                                            style="color: #000;">(612 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">4.897.000 VND
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">3.672.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/klub-hotel-bankok.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 80%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Klub Hotel</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>

                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.7/5 <span
                                            style="color: #000;">(464 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">5.761.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">1.613.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/Asia-hotel-bankok.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 8%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Asia Bankok</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.5/5 <span
                                            style="color: #000;">(2N5 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">38.306.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">37.322.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Sale Singapose-->
            <div class="hotelsalenn" id="hotel_sale2">
                <div class="row">
                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/v-hotel-sing.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 20%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">V Hotel Lavender</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.6/5 <span
                                            style="color: #000;">(13N đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">
                                        4.475.000 VND
                                    </span>
                                    <br>
                                    <span class="fw-bold">3.296.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/boss-hotel-sing.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 15%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Boss Hotel</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.6/5 <span
                                            style="color: #000;">(6,4N đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">4.109.000 VND
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">3.082.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/royal-hotel-sing.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 10%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Royal Hotel Singapore</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.4/5 <span
                                            style="color: #000;">(6,1N đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">3.247.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">3.065.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/grand-pacific-hotel-sing.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 8%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Hotel Grand Pacific</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.5/5 <span
                                            style="color: #000;">(1,5N đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">3.841.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">3.508.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Sale Tokyo-->
            <div class="hotelsalenn" id="hotel_sale3">
                <div class="row">
                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/hilton-hotel-tokyo.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 25%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Hilton Tokyo Bay</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.7/5 <span
                                            style="color: #000;">(113 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">
                                        11.792.000 VND
                                    </span>
                                    <br>
                                    <span class="fw-bold">8.844.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/shinjuku-tokyo-hotel.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 15%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Shinjuku Tokyo Hotel</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.4/5 <span
                                            style="color: #000;">(306 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">8.216.000 VND
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">7.590.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/shinagawa-tokyo-hotel.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 5%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Shinagawa Prince Hotel</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.5/5 <span
                                            style="color: #000;">(106 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">7.745.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">7.155.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Sale Seoul-->
            <div class="hotelsalenn" id="hotel_sale4">
                <div class="row">
                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/royal-hotel-seoul.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 20%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Royal Seoul</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.6/5 <span
                                            style="color: #000;">(120 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">
                                        8.614.000 VND
                                    </span>
                                    <br>
                                    <span class="fw-bold">7.665.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/part-hyatt-seoul.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 5%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Part Hyatt Seoul</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.8/5 <span
                                            style="color: #000;">(5 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">28.365.000 VND
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">21.272.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/lotte-hotel-seoul.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 30%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Klub Hotel</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.5/5 <span
                                            style="color: #000;">(30 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">11.019.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">8.264.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/koreana-hotel-seoul.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 8%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Koreana Hotel</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>

                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.5/5 <span
                                            style="color: #000;">(44 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">8.945.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">8.133.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Sale Puket-->
            <div class="hotelsalenn" id="hotel_sale5">
                <div class="row">
                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/patong-bay-puket.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 20%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Patong Bay Residence</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>

                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.4/5 <span
                                            style="color: #000;">(24 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">
                                        2.832.000 VND
                                    </span>
                                    <br>
                                    <span class="fw-bold">1.614.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/dara-hotel-puket.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 40%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Dara Hotel Phuket</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.6/5 <span
                                            style="color: #000;">(132 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">3.393.000 VND
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">1.257.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/baan-yuree-hotel-phuket.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 80%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Baan Yuree Resort and Spa </span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.4/5 <span
                                            style="color: #000;">(86 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">4.566.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">1.687.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Sale Bali-->
            <div class="hotelsalenn" id="hotel_sale6">
                <div class="row">
                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/brits-hotel-bali.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 20%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Brits Hotel Legian</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.6/5 <span
                                            style="color: #000;">(2,5N đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">
                                        924.000 VND
                                    </span>
                                    <br>
                                    <span class="fw-bold">693.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/fashion-hotel-bali.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 45%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Fashion Hotel Legian</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.6/5 <span
                                            style="color: #000;">(4,3N đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">1.712.000 VND
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">976.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 col-sm-6 padding-t-e-12">
                        <div class="tour-hot-img">
                            <img class="width100 rounded-top" src="<?php echo BASE_URL ?>img/sheraton-bali-kuta.jpg" alt="">
                            <div class="gif-hot-hotel">
                                <span class="rounded-2">Tiết kiệm 30%</span>
                            </div>

                        </div>
                        <div class="hotel-hot-groupshadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="hotel-hot-title">
                                <span class="span-title px-2">Sheraton Bali Kuta Resort</span>
                            </div>
                            <div class="hotel-hot-contents" style="overflow: hidden;">
                                <div class="tour-star p-2 m-0">
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>
                                    <i class="fa fa-solid fa-star"></i>
                                    <i class=" fa fa-solid fa-star"></i>

                                    <br>
                                    <i class="fa-solid  fa fa-comment" style="color: #5fc7ff;"></i>
                                    <span class="tour-feedback m-0" style="color: #5fc7ff;">4.7/5 <span
                                            style="color: #000;">(856 đánh giá)</span></span>
                                    <br>
                                    <span class="hotel-money text-decoration-line-through"
                                        style="color: #000;">6.367.000
                                        VND </span>
                                    <br>
                                    <span class="fw-bold">4.777.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3>Những bài viết truyền cảm hứng cho bạn</h3>
        <h5 class="text-secondary">Tìm hiểu thêm những địa điểm lưu trú phù hợp cho chuyến du lịch của bạn</h5>
        <div class="news-container mb-5">
            <div class="news-cantho">
                <img class="rounded-top-3" src="<?php echo BASE_URL ?>img/tintuc-cantho.jpg" alt="" width="100%" height="300px">
                <div class="container-new-hotel-cantho">
                    <div class="news-hotel-cantho">
                        <h5>Khám phá các điểm du lịch Cần Thơ nổi bật nhất</h5>
                        <span>Thảo Nguyên</span>
                    </div>
                </div>
            </div>
            <div class="scroll-container">
                <div class="image-container">
                    <img class="rounded-top-3" src="<?php echo BASE_URL ?>img/news-hotel-danang.webp" alt="Cinque Terre" width="100%" height="300">
                    <div class="container-new-hotel-cantho">
                        <div class="news-hotel-cantho">
                            <h5>Du lịch Đà Nẵng 3 ngày 2 đêm: Lịch <br> trình chi tiết 2024</h5>
                            <span>Nguyễn Thị Mộc Nhiên</span>
                        </div>
                    </div>
                </div>

                <div class="image-container">
                    <img class="rounded-top-3" src="<?php echo BASE_URL ?>img/news-hotel-phuquoc.webp" alt="Cinque Terre" width="100%" height="300">
                    <div class="container-new-hotel-cantho">
                        <div class="news-hotel-cantho">
                            <h5>Mê mẩn 8 resort 5 sao Phú Quốc <br>cao cấp, sang trọng</h5>
                            <span>Thảo Nguyễn</span>
                        </div>
                    </div>
                </div>

                <div class="image-container">
                    <img class="rounded-top-3" src="<?php echo BASE_URL ?>img/news-hotel-dalat.jpg" alt="Cinque Terre" width="100%" height="300">
                    <div class="container-new-hotel-cantho">
                        <div class="news-hotel-cantho">
                            <h5>Top 14 resort Đà Lạt đẹp như mơ <br> cho chuyến du lịch của bạn </h5>
                            <span>Thảo Nguyên</span>
                        </div>
                    </div>
                </div>

                <div class="image-container">
                    <img class="rounded-top-3" src="<?php echo BASE_URL ?>img/news-hotel-hanoi.jpg" alt="Cinque Terre" width="100%" height="300">
                    <div class="container-new-hotel-cantho">
                        <div class="news-hotel-cantho">
                            <h5>Top các resort gần Hà Nội cực lý  <br>tưởng để lưu trú khi đi miền Bắc </h5>
                            <span>Thảo Nguyên</span>
                        </div>
                    </div>
                </div>

                <div class="image-container">
                    <img class="rounded-top-3" src="<?php echo BASE_URL ?>img/news-hotel-vungtau.jpg" alt="Cinque Terre" width="100%" height="300">
                    <div class="container-new-hotel-cantho">
                        <div class="news-hotel-cantho">
                            <h5>Lịch trình du lịch Vũng Tàu 2  ngày <br>1 đêm chi tiết</h5>
                            <span>Thinh Trân</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="mt-3 text-center">Tại sao nên đặt chỗ với World Travel?</h3>
        <div class="container-md">
        <div class="row px-5 mx-5">
            <div class="col-lg-3">
                <div class="my-3">
                    <img src="<?php echo BASE_URL ?>img/icon-wt-01.webp" alt="">
                </div>
                
                <b>Giá rẻ mỗi ngày với ưu đãi đặc biệt dành riêng cho ứng dụng</b>
                <p>Đặt phòng qua ứng dụng để nhận giá tốt nhất với các khuyến mãi tuyệt vời!</p>
            </div>
            <div class="col-lg-3">
                <div class="my-3">
                    <img src="<?php echo BASE_URL ?>img/icon-wt-02.webp" alt="">
                </div>
                <b>Phương thức thanh toán an toàn và linh hoạt</b>
                <p>Giao dịch trực tuyến an toàn với nhiều lựa chọn như thanh toán tại cửa hàng tiện lợi, chuyển khoản ngân hàng, thẻ tín dụng đến Internet Banking. Không tính phí giao dịch. </p>
            </div>
            <div class="col-lg-3">
                <div class="my-3">
                    <img src="<?php echo BASE_URL ?>img/icon-wt-03.webp" alt="">
                </div>
                <b>Hỗ trợ khách hàng 24/7</b>
                <p>Đội ngũ nhân viên hỗ trợ khách hàng luôn sẵn sàng giúp đỡ bạn trong từng bước của quá trình đặt vé</p>
            </div>
            <div class="col-lg-3">
                <div class="my-3">
                    <img src="<?php echo BASE_URL ?>img/icon-wt-04.webp" alt="">
                </div>
                <b>Khách thực, đánh giá thực</b>
                <p>Hơn 1.000 đánh giá, bình chọn đã được xác thực từ du khách sẽ giúp bạn đưa ra lựa chọn đúng đắn.</p>
            </div>
        </div>
        </div>
        
    </div>
    <button type="button" class="btn-support rounded-5"><a href="">Bạn cần hỗ trợ?</a></button>
    <?php include_once '../app/view/footer.php'; ?>
    <script src="<?php echo BASE_URL ?>js/sprict.js?v=2"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>