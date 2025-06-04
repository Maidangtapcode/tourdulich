<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo BASE_URL?>img/logo.png" type="image/x-icon">
  <title>WorldTravel</title>
  <!-- Thêm liên kết đến Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html,
    body {
      height: 100%;
      /* Đảm bảo chiều cao 100% cho toàn bộ trang */
      margin: 0;
      /* Loại bỏ margin mặc định của trình duyệt */
      background-color: #fafafa;
    }

    .custom-container {
      margin-left: 200px;
      margin-right: 200px;
      display: grid;
      /* Sử dụng grid */
      place-items: center;
      /* Căn giữa cả theo chiều ngang và dọc */
      min-height: 100vh;

    
    }
    @media (max-width:720px) {
      .custom-container{
        margin: 0px 100px;
      }
    }
    @media (max-width:500px) {
      .custom-container{
        margin: 0px 50px;
      }
    }
    @media (max-width:390px) {
      .custom-container{
        margin: 0px 25px;
      }
    }
  </style>
</head>

<body>

  <div class="custom-container">
    <div class="content">
      <main>
        <div class="container">
          <?php foreach ($edituserbyid as $key => $value) { ?>
            <form action="<?php echo BASE_URL ?>login/updateuser/<?php echo $value['nguoidung_id'] ?>" method="post" class="was-validated" enctype="multipart/form-data">
              <div class="mb-3">
                <h4>Cập nhật thông tin</h4>
                <label class="form-label">Họ tên</label>
                <input type="text" class="form-control" placeholder="Nhập họ tên" name="hoten" required value="<?php echo $value['hoten'] ?>">
                <div class="invalid-feedback">Nhập họ tên</div>
              </div>
              <div class="mb-3">
                <label class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="sodt" required value="<?php echo $value['sodt'] ?>">
                <div class="invalid-feedback">Nhập số điện thoại</div>
              </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="Nhập email" name="email" required value="<?php echo $value['email'] ?>">
                <div class="invalid-feedback">Nhập email</div>
              </div>
              <div class="mb-3">
                <input type="file" class="form-control" aria-label="file example" name="avatar" required>
                <div class="invalid-feedback">Ảnh avatar</div>
                <img src="<?php echo BASE_URL ?><?php echo $value['avatar'] ?>" alt="" width="70px" height="70px">
              </div>

              <div class="mb-3">
                <input type="file" class="form-control" aria-label="file example" name="background" required>
                <div class="invalid-feedback">Ảnh nền</div>
                <img src="<?php echo BASE_URL ?><?php echo $value['background'] ?>" alt="" width="140px" height="70px">
              </div>

              <div class="mb-3">
                <label class="form-label">Ngày sinh </label>
                <input type="date" id="datepicker" class="form-control" placeholder="dd/mm/yyyy" name="ngaysinh" required value="<?php echo $value['ngaysinh'] ?>">
                <div class="invalid-feedback">Ngày sinh</div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary" type="submit">Cập nhật</button>
              </div>
            </form>
          <?php } ?>
          <?php
            if (isset($update)) {
                echo '<script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));
                            myModal.show();
                        });
                        document.querySelector("[data-bs-dismiss=\'modal\']").addEventListener("click", function() {
                            var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));
                            myModal.hide();  
                        });
                      </script>';
            }
          ?>

        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title fs-5" id="exampleModalLabel">Welcome to WorldTravel</h5>
              </div>
              <div class="modal-body">
                <span>Bạn đã cập nhật thông tin thành công</span>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a href="<?php echo BASE_URL?>"></a>Close</button>
              </div>
            </div>
          </div>
        </div>
      </main>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          var dateInput = document.getElementById('datepicker');

          dateInput.addEventListener('focus', function() {
            this.type = 'date';
          });

          dateInput.addEventListener('blur', function() {
            var parts = this.value.split('/');
            if (parts.length === 3) {
              var formattedDate = parts[2] + '-' + parts[1] + '-' + parts[0];
              this.type = 'date';
              this.value = formattedDate;
            }
          });
        });
      </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>