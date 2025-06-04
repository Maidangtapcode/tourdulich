<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="<?php echo BASE_URL ?>css/admincss.css?v=3">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title><?php echo APPNAME; ?></title>
</head>
<?php if (session_status() == PHP_SESSION_NONE) {
    Session::init();

}
?>
<body>
    <header class="navbar">

        <div class="container-sm">
            <ul class="nav nav-pills">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false">Tour</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>tour/add_tour">Thêm tour</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>tour/list_tour">Liệt kê tour</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>tour/gettourtrongnuoc">Liệt kê tour trong nước</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>tour/gettourngoainuoc">Liệt kê tour ngoài nước</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>tour/gettoursale">Liệt kê tour sale</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false">Khách Sạn</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>hotel/add_hotel">Thêm khách sạn</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>hotel/list_hotel">Liệt kê khách sạn</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>hotel/gethoteltrongnuoc">Liệt kê khách sạn trong nước</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>hotel/gethotelngoainuoc">Liệt kê khách sạn ngoài nước</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>hotel/gethotelsale">Liệt kê khách sạn sale</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false">Vé máy bay</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>flights/add_flights">Thêm vé máy bay</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>flights/list_flights">Liệt kê vé máy bay</a></li>


                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false">Tin tức</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Thêm tin tức</a></li>
                        <li><a class="dropdown-item" href="#">Sửa tin tức</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false">Dịch vụ</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>dichvu/add_dv">Thêm dịch vụ</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>dichvu/list_dv">Liệt kê dịch vụ</a></li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <div class="navbar-custom">
                        
                    <?php if (Session::get('login')==true && Session::get('isadmin') == 1): ?>
                        <div class="navbar-login ">
                            <span class="material-symbols-outlined fg-login m-0 p-2" style="font-size: 30px;"
                            id="icon" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="
                            <strong>Thông tin tài khoản</strong><br>
                            Tên admin: <?php echo Session::get('hoten');?><br>
                            Email admin: <?php echo Session::get('email');?><br>
                            <span><a href='<?php echo BASE_URL?>login/logout'>Đăng xuất</a></span>            ">
                                account_circle
                            </span>
                        </div>
                        <?php else: ?>
                    <!-- Nếu không phải admin, không hiển thị icon -->
                    <p>Bạn không phải là admin.</p>
                    <?php endif; ?>
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
                                <li class="nav-item  ">
                                    <a class="nav-link active icon3gach bg bg-white" aria-current="page"
                                        href="#">Tour</a>
                                </li>
                                <li class="nav-item  ">
                                    <a class="nav-link active icon3gach bg bg-white" href="#">Khách sạn</a>
                                </li>
                                <li class="nav-item  ">
                                    <a class="nav-link active icon3gach bg bg-white" href="#">Vé máy bay</a>
                                </li>
                                <li class="nav-item  ">
                                    <a class="nav-link active icon3gach bg bg-white" href="#">Dấu ấn</a>
                                </li>
                                <li class="nav-item  ">
                                    <a class="nav-link active icon3gach bg bg-white" href="#">Vé vui chơi</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active icon3gach bg bg-white" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Xem thêm
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item active icon3gach bg bg-white " href="#">Giới
                                                thiệu</a>
                                        </li>
                                        <li><a class="dropdown-item active icon3gach bg bg-white" href="#">Tài
                                                khoản</a>
                                        </li>
                                        <li><a class="dropdown-item active icon3gach bg bg-white" href="#">Hỗ
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
        <script>
        // Khởi tạo popover cho icon
        const icon = document.getElementById('icon');
        const popover = new bootstrap.Popover(icon, {
            html: true, // Cho phép sử dụng HTML trong popover
            trigger: 'click' // Kích hoạt popover khi click
        });
    </script>
    </header>