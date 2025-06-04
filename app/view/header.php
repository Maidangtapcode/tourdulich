<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo BASE_URL?>img/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
    
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="<?php echo BASE_URL ?>css/admincss.css?v=3">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>WorldTravel</title>
</head>
<?php if (session_status() == PHP_SESSION_NONE) {
    Session::init();

}?>
<style>
    #icon {
    cursor: pointer;
  }
  
  /* Hộp thoại popup */
  .popup {
    position: absolute;
    background-color: white;
    border: 1px solid #ccc;
    padding: 10px;
    display: none;  /* Ban đầu ẩn */
    z-index: 9999;  /* Đảm bảo nằm trên các phần tử khác */
    width: 300px;   /* Đặt chiều rộng cố định cho popup */
    box-sizing: border-box; /* Đảm bảo tính toán padding vào trong width */
  }
  
  /* Định dạng cho popup content */
  .popup-content {
    max-width: 300px;
  }
  /* Đặt ảnh lớn làm nền của modal */
.model-contai{
    position: relative;
    height: 250px;
}

.main-img {
    width: 100%;
    height: 200px;
    object-fit: cover; /* Đảm bảo ảnh lớn không bị méo */
}

/* Định vị ảnh nhỏ */
.small-img {
    position: absolute;
    top: 74%; /* Nửa trên của ảnh nhỏ nằm ngoài ảnh lớn */
    left: 15%; /* Đặt ảnh nhỏ ở giữa */
    transform: translateX(-50%); /* Căn giữa ảnh nhỏ theo chiều ngang */
    width: 80px; /* Điều chỉnh kích thước ảnh nhỏ */
    height: 80px; /* Chiều cao của ảnh nhỏ */
    object-fit: cover; /* Đảm bảo ảnh nhỏ không bị méo */
    border-radius: 50px;
    border: 2px solid #fff;
}
.nameuser{
    position: absolute;
    top: 86%; /* Nửa trên của ảnh nhỏ nằm ngoài ảnh lớn */
    left: 25%; /* Đặt ảnh nhỏ ở giữa */
    width: 80px; /* Điều chỉnh kích thước ảnh nhỏ */
    height: 80px; /* Chiều cao của ảnh nhỏ */
    object-fit: cover; /* Đảm bảo ảnh nhỏ không bị méo */
    border-radius: 50px;
}
</style>
<body>
    <header class="navbar mb-3" >

        <div class="container-sm">
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
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo BASE_URL ?>giohang/viewcart">Giỏ Hàng</a>
                                </li>
                                <li class="nav-item ">
                                    <div class="navbar-custom">
                                   
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
                                                            <button type="button" class="btn btn-sm bg-light my-2 mx-1 "><a class="text-decoration-none text-dark d-inline" style="font-size: 14px;" href="<?php echo BASE_URL?>login/loadedituser/<?php echo Session::get('nguoidung_id'); ?>">Sửa hồ sơ</a></button>
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
        <script>
            document.addEventListener('DOMContentLoaded', function() {
    const icon = document.getElementById('icon');  // Biểu tượng mở popup
    const popup = document.getElementById('popup');  // Popup

    // Hàm toggle popup (hiện/ẩn popup)
    function togglePopup() {
        const isPopupVisible = popup.classList.contains('visible');
        
        if (isPopupVisible) {
            popup.classList.remove('visible');
            popup.style.display = 'none';
        } else {
            const iconRect = icon.getBoundingClientRect();  // Lấy vị trí của icon
            const iconX = iconRect.left;
            const iconY = iconRect.bottom;
            
            let popupLeft = iconX - 220;
            let popupTop = iconY + 10;
            popup.style.left = `${popupLeft}px`;
            popup.style.top = `${popupTop}px`;
            popup.style.display = 'block';
            popup.classList.add('visible');
        }
    }

    // Lắng nghe sự kiện click vào icon để mở/đóng popup
    if (icon) {
        icon.addEventListener('click', function(event) {
            event.stopPropagation();
            togglePopup();
        });
    }

    // Lắng nghe sự kiện click vào bất kỳ đâu ngoài popup để ẩn popup
    document.addEventListener('click', function(event) {
        if (popup && !popup.contains(event.target) && event.target !== icon) {
            popup.classList.remove('visible');
            popup.style.display = 'none';
        }
    });

    // Lắng nghe sự kiện click vào nút "Xem hồ sơ" để ẩn popup và mở modal
    const showHosoBtn = document.getElementById('showhoso');
    if (showHosoBtn) {
        showHosoBtn.addEventListener('click', function(event) {
            // Ẩn popup
            popup.classList.remove('visible');
            popup.style.display = 'none';
            
            // Mở modal
            const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
            modal.show();
        });
    }
});



    // Lắng nghe sự kiện click vào phần tử đăng ký/đăng nhập (dành cho người chưa đăng nhập)
    const fg_logins = document.querySelector('.fg-login');
    const lg_us_navbar = document.querySelector('.lg-us-navbar');

    if (fg_logins) {
        fg_logins.addEventListener('click', function(event) {
            event.stopPropagation(); // Ngăn chặn sự lan truyền sự kiện click đến các phần tử cha

            const windowWidth = window.innerWidth;
            if (lg_us_navbar.style.display === 'none') {
                lg_us_navbar.style.display = 'block';
                if (windowWidth > 790) {
                    lg_us_navbar.style.top = `${fg_logins.offsetTop + fg_logins.offsetHeight}px`;
                    lg_us_navbar.style.left = `${fg_logins.offsetLeft - 150}px`;
                } else {
                    // Nếu màn hình nhỏ hơn hoặc bằng 768px, hiển thị trên cùng và căn giữa
                    lg_us_navbar.style.top = `${fg_logins.offsetTop + fg_logins.offsetHeight}px`;      
                    lg_us_navbar.style.left = '40%';         
                    lg_us_navbar.style.transform = 'translate(-35%, 0%)';
                }
            } else {
                lg_us_navbar.style.display = 'none';
            }
            lg_us_navbar.classList.toggle('visible');
        });
    }
     // Khi modal đóng, đảm bảo lớp backdrop không còn trên màn hình
     const exampleModal = document.getElementById('exampleModal');
     if (exampleModal) {
         exampleModal.addEventListener('hidden.bs.modal', function() {
             // Xóa lớp backdrop nếu nó còn tồn tại
             const backdrop = document.querySelector('.modal-backdrop');
             if (backdrop) {
                 backdrop.remove();
             }
         });
     }

    // Lắng nghe sự kiện click bên ngoài để đóng navbar đăng ký/đăng nhập
    document.addEventListener('click', function(event) {
        if (!lg_us_navbar.contains(event.target) && event.target !== fg_logins) {
            lg_us_navbar.classList.remove('visible');
            lg_us_navbar.style.display = 'none';
        }
    });


    </script>
    </header>