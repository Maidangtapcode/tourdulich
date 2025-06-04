<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL ?>css/dv.css?v=1">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<style>
    .btn-outline-danger:hover a {
    color: #fff !important; /* Màu chữ trắng khi hover */
    text-decoration: none; /* Loại bỏ gạch chân khi hover */
}
</style>
<body>
  <header>
    <div class="bg-image-vemaybay">
      <div class="container-lg">
        <div class="header-nav">
          <div class="row-row py-3">
            <div class="col-30">
              <img class="rounded-3" src="<?php echo BASE_URL ?>img/logo.png" alt="" width="80px" height="80px">
            </div>
            <div class=" col-70">

              <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL ?>index/homepage">Tour</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo BASE_URL ?>hotel/viewhotel">Khách Sạn</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo BASE_URL ?>news/viewnews">Tin Tức</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo BASE_URL ?>flights/viewflights">Vé Máy Bay</a>
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
                              <img class="rounded-circle" src="<?php echo BASE_URL ?><?php echo Session::get('avatar') ?>" alt="" width="80px" height="80px"><br>
                            </div>
                            <div style="display: flex; justify-content: center;align-items: center;">
                              <button type="button" class="btn btn-sm bg-light my-2 mx-1" id="showhoso" data-bs-toggle="modal" data-bs-target="#exampleModal">Xem hồ sơ</button>
                              <button type="button" class="btn btn-sm bg-light my-2 mx-1 "><a class="text-decoration-none text-dark d-inline" href="<?php echo BASE_URL ?>login/loadedituser/<?php echo Session::get('nguoidung_id'); ?>">Sửa hồ sơ</a></button>
                            </div>
                            <hr>
                            <strong>Hỗ trợ</strong><br>
                            <div style="display: flex; align-items: center;">
                              <span class="material-symbols-outlined">info</span>
                              <p style="margin:0 0 0 3px ; ">Giới thiệu về chúng tôi</p>
                            </div>
                            <div style="display: flex; align-items: center;">
                              <span class="material-symbols-outlined">help</span>
                              <p style="margin:0 0 0 3px ; "><a href="<?php echo BASE_URL ?>support"></a>Liên hệ hỗ trợ</p>
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
                            <img src="<?php echo BASE_URL ?><?php echo Session::get('avatar'); ?>" alt="" class="small-img">
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
                                <td><?php echo Session::get('hoten') ?></td>

                              </tr>
                              <tr>
                                <td>Số điện thoại</td>
                                <td><?php echo Session::get('sodt') ?></td>
                              </tr>
                              <tr>
                                <td>Email</td>
                                <td><?php echo Session::get('email') ?></td>
                              </tr>
                            </tbody>
                          </table>

                        </div>

                        <div class="modal-footer" style="display: flex; justify-content: center;">
                          <button type="button" class="btn btn-primary"><a class="text-decoration-none text-white" href="<?php echo BASE_URL ?>login/loadedituser/<?php echo Session::get('id'); ?>">Cập nhật</a></button>
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
          <h4>Combo vé các khu vui chơi - show ca nhạc </h4>
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
  <main>
    <div class="album py-1">

      <div class="container">
        <div class="news-container mb-5">
          <h2 class="mt-2">Việt Nam đệ nhất chứ danh</h2>
          <h6>Đi đến những nơi ấn tượng nhất của Việt Nam</h6>
          <div class="scroll-container">
            <?php foreach($listvvctrongnuoc as $key => $value){?>
            <div class="image-container">
              <img class="rounded-top-3" src="<?php echo BASE_URL ?><?php echo htmlspecialchars($value['imgdv'], ENT_QUOTES, 'UTF-8'); ?>" alt="Cinque Terre" width="100%" height="250px">
              <div class="container-new-hotel-cantho">
                <div class="news-hotel-cantho">
                  <h5 style=""><?php echo htmlspecialchars($value['namedv'], ENT_QUOTES, 'UTF-8'); ?> </h5>
                  <span style="color:#eb7c0c">VND <?php echo htmlspecialchars(number_format($value['giadv'], 0, ',', '.'), ENT_QUOTES, 'UTF-8'); ?></span>
                  <span class="btn btn-sm btn-outline-danger"><a href="<?php echo BASE_URL?>giohang/addtocart?product_id= <?php echo htmlspecialchars($value['id_dv']); ?>&product_type=dichvu&quantity=1&price=<?php echo $value['giadv']?>" class="text-decoration-none text-danger">Thêm vào giỏ hàng</a></span>
                </div>
              </div>
            </div>

            <?php }?>
          </div>
        </div>
        <div class="news-container mb-5">
          <h2 class="mt-2">Vé vui chơi quốc tế</h2>
          <h6>Trãi nghiệm niềm vui thế giới</h6>
          <div class="scroll-container">
          <?php foreach($listvvcngoainuoc as $key => $value){?>
            <div class="image-container">
              <img class="rounded-top-3" src="<?php echo BASE_URL ?><?php echo htmlspecialchars($value['imgdv'], ENT_QUOTES, 'UTF-8'); ?>" alt="Cinque Terre" width="100%" height="200px">
              <div class="container-new-hotel-cantho" >
                <div class="news-hotel-cantho" >
                  <h5><?php echo htmlspecialchars($value['namedv'], ENT_QUOTES, 'UTF-8'); ?> </h5>
                  <span style="color:#eb7c0c">VND <?php echo htmlspecialchars(number_format($value['giadv'], 0, ',', '.'), ENT_QUOTES, 'UTF-8'); ?></span>
                  <span class="btn mx-1 btn-sm btn-outline-danger"><a href="<?php echo BASE_URL?>giohang/addtocart?product_id= <?php echo htmlspecialchars($value['id_dv']); ?>&product_type=dichvu&quantity=1&price=<?php echo $value['giadv']?>" class="text-decoration-none text-danger">Thêm vào giỏ hàng</a></span>
                </div>
              </div>
            </div>

            <?php }?>
          </div>
        </div>
        
          <h2 class="mt-2">CÁP TREO</h2>
          <h6 class=" "> Mỗi tuyến cáp - Một kỳ quan </h6>
        
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
        <?php foreach($listdvcaptreo as $key => $value){?>
        <div class="col">
            <div class="card shadow-sm">
              <img src="<?php echo BASE_URL ?><?php echo htmlspecialchars($value['imgdv'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
              <div class="card-body">
                <p class="card-text"><?php echo htmlspecialchars($value['namedv'], ENT_QUOTES, 'UTF-8'); ?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <span style="color:#eb7c0c">VND <?php echo htmlspecialchars(number_format($value['giadv'], 0, ',', '.'), ENT_QUOTES, 'UTF-8'); ?></span>
                  <span class="btn mx-1 btn-sm btn-outline-danger"><a href="<?php echo BASE_URL?>giohang/addtocart?product_id= <?php echo htmlspecialchars($value['id_dv']); ?>&product_type=dichvu&quantity=1&price=<?php echo $value['giadv']?>" class="text-decoration-none text-danger">Thêm vào giỏ hàng</a></span>
                </div>
              </div>
            </div>
          </div>

          <?php }?>
        </div>

        <h2 class="mt-3 ">Sân chơi</h2>
        <h6 class=" ">Kết nối - Phát triển - Hòa Nhập </h6>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
        <?php foreach($listdvsanchoi as $key => $value){?>
          <div class="col">
            <div class="card shadow-sm">
              <img src="<?php echo BASE_URL ?><?php echo htmlspecialchars($value['imgdv'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
              <div class="card-body">
                <p class="card-text"><?php echo htmlspecialchars($value['namedv'], ENT_QUOTES, 'UTF-8'); ?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <span style="color:#eb7c0c">VND <?php echo htmlspecialchars(number_format($value['giadv'], 0, ',', '.'), ENT_QUOTES, 'UTF-8'); ?></span>
                  <span class="btn mx-1 btn-sm btn-outline-danger"><a href="<?php echo BASE_URL?>giohang/addtocart?product_id= <?php echo htmlspecialchars($value['id_dv']); ?>&product_type=dichvu&quantity=1&price=<?php echo $value['giadv']?>" class="text-decoration-none text-danger">Thêm vào giỏ hàng</a></span>
                </div>
              </div>
            </div>
          </div>
          <?php }?>
        </div>

        <h1 class="mt-3 ">Vé khu vui chơi</h1>
        <h6 class=" ">Chơi thỏa thích - Vui phấn khích </h6>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
        <?php foreach($listdvdiemthamquan as $key => $value){?>
          <div class="col">
            <div class="card shadow-sm">
              <img src="<?php echo BASE_URL ?><?php echo htmlspecialchars($value['imgdv'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
              <div class="card-body">
                <p class="card-text"><?php echo htmlspecialchars($value['namedv'], ENT_QUOTES, 'UTF-8'); ?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <span style="color:#eb7c0c">VND <?php echo htmlspecialchars(number_format($value['giadv'], 0, ',', '.'), ENT_QUOTES, 'UTF-8'); ?></span>
                  <span class="btn mx-1 btn-sm btn-outline-danger"><a href="<?php echo BASE_URL?>giohang/addtocart?product_id= <?php echo htmlspecialchars($value['id_dv']); ?>&product_type=dichvu&quantity=1&price=<?php echo $value['giadv']?>" class="text-decoration-none text-danger">Thêm vào giỏ hàng</a></span>
                </div>
              </div>
            </div>
          </div>
          <?php }?>
        </div>


        <h2 class="mt-2 ">Vé Xem Show & Sự kiện</h2>
        <h6 class=" ">Nghệ thuật thăng hoa cảm xúc</h6>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
        <?php foreach($listdvnhsk as $key => $value){?>
          <div class="col">
            <div class="card shadow-sm">
              <img src="<?php echo BASE_URL ?><?php echo $value['imgdv']?>" alt="">
              <div class="card-body">
                <p class="card-text"><?php echo $value['namedv']?></p>
                <div class="d-flex justify-content-flex-end align-items-center">
                  <span style="color:#eb7c0c">VND <?php echo htmlspecialchars(number_format($value['giadv'], 0, ',', '.'), ENT_QUOTES, 'UTF-8'); ?></span>
                  <span class="btn mx-1 btn-sm btn-outline-danger"><a href="<?php echo BASE_URL?>giohang/addtocart?product_id= <?php echo htmlspecialchars($value['id_dv']); ?>&product_type=dichvu&quantity=1&price=<?php echo $value['giadv']?>" class="text-decoration-none text-danger">Thêm vào giỏ hàng</a></span>
                </div>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
      </div>
    </div>
  </main>

  <?php include_once '../app/view/footer.php'; ?>
  <script src="<?php echo BASE_URL ?>js/sprict.js?v=3"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>