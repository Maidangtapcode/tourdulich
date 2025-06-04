<?php include_once '../app/view/admin/headeradmin.php'; ?>
  <main>
    <div class="container">
      <form action="<?php echo BASE_URL?>dichvu/insert_dv" method="post" class="was-validated" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label fw-bold fs-4">Thêm Dịch Vụ</label><br>
          <label class="form-label">Tên dịch vụ</label>
          <input type="text" class="form-control"  placeholder="Tên dịch vụ" name="namedv" required>
          <div class="invalid-feedback">Tên của dịch vụ</div>
        </div>
        <div class="mb-3">
          <input type="file" class="form-control" aria-label="file example" name="imgdv" required>
          <div class="invalid-feedback">Ảnh của dịch vụ</div>
        </div>
        
        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="loaidv" >
            <option value="">Loại dịch vụ</option>
            <option value="Cáp treo">Cáp treo</option>
            <option value="Điểm tham quan">Điểm tham quan</option>
            <option value="Sân chơi">Sân chơi</option>
            <option value="Nhạc hội & sự kiện">Nhạc hội & sự kiện </option>
          </select>
          <div class="invalid-feedback">Chọn loại dịch vụ</div>
        </div>
        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="quocgiadv" >
            <option value="">Khu vực</option>
            <option value="Trong Nước">Trong Nước</option>
            <option value="Quốc Tế">Quốc Tế</option>
          </select>
          <div class="invalid-feedback">Chọn khu vực dịch vụ</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Giá dịch vụ</label>
          <input type="text" class="form-control"  placeholder="Giá dịch vụ" name="giadv" required>
          <div class="invalid-feedback">Nhập giá của dịch vụ</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Địa chỉ dịch vụ</label>
          <input type="text" class="form-control"  placeholder="Địa chỉ dịch vụ" name="diachidv" required>
          <div class="invalid-feedback">Nhập địa chỉ của dịch vụ</div>
        </div>
        <div class="mb-3">
          <button class="btn btn-primary" type="submit">Thêm dịch vụ</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>