<?php include_once '../app/view/admin/headeradmin.php'; ?>
  <main>
    <div class="container">
      <form action="<?php echo BASE_URL?>hotel/insert_hotel" method="post" class="was-validated" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label fw-bold fs-4">Thêm Khách Sạn</label><br>
          <label class="form-label">Tên Khách Sạn</label>
          <input type="text" class="form-control"  placeholder="Thêm vào tên khách sạn" name="namehotel" required>
          <div class="invalid-feedback">Tên của khách sạn</div>
        </div>
        <div class="mb-3">
        <label class="form-label">Ảnh khách sạn</label>
          <input type="file" class="form-control" aria-label="file example" name="imghotel" required>
          <div class="invalid-feedback">Chọn ảnh khách sạn</div>
        </div>
         <div class="mb-3">
          <label class="form-label">Thêm banner</label>
          <input type="text" class="form-control"  placeholder="Thêm banner khách sạn" name="bannerhotel" required >
          <div class="invalid-feedback">Banner của hotel</div>
        </div>
        
        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="sosaohotel">
            <option value="">Số sao</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <div class="invalid-feedback">Số sao của khách sạn</div>
        </div>
        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="diachihotel" required>
            <option value="">Địa chỉ</option>
            <option value="Hà Nội">Hà Nội</option>
            <option value="Nha Trang">Nha Trang</option>
            <option value="TP.Hồ Chí Minh">TP.Hồ Chí Minh</option>
            <option value="Đà Lạt">Đà Lạt</option>
            <option value="Vũng Tàu">Vũng Tàu</option>
            <option value="Phan Thiết">Phan Thiết</option>
            <option value="Phú Quốc">Phú Quốc</option>
            <option value="Hội An">Hội An</option>
            <option value="Bangkok">Bangkok</option>
            <option value="Singapore">Singapore</option>
            <option value="Seoul">Seoul</option>
            <option value="Tokyo">Tokyo</option>
            <option value="Phuket">Phuket</option>
            <option value="Bali">Bali</option>
          </select>
          <div class="invalid-feedback">Chọn địa chỉ của khách sạn</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Giá khách sạn</label>
          <input type="number" class="form-control"  placeholder="Thêm giá tiền" name="giahotel" required>
          <div class="invalid-feedback">Giá của khách sạn</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Giá sale</label>
          <input type="number" class="form-control"  placeholder="Thêm giá tiền sale" name="giahotelsale" required>
          <div class="invalid-feedback">Giá sale của khách sạn</div>
        </div>
        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="quocgia" required>
            <option value="">Khu vực</option>
            <option value="Trong Nước">Trong Nước</option>
            <option value="Quốc Tế">Quốc Tế</option>
          </select>
          <div class="invalid-feedback">Chọn khu vực của khách sạn</div>
        </div>
        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="issale" required>
            <option value="">Khách sạn sale hay không (1-sale | 0-no sale)</option>
            <option value="0">0</option>
            <option value="1">1</option>
          </select>
          <div class="invalid-feedback">Khách sạn sale hay không </div>
        </div>
        <div class="mb-3">
          <button class="btn btn-primary" type="submit">Thêm Khách sạn</button>
        </div>
      </form>
    </div>
  </main>

</body>

</html>