<?php include_once '../app/view/admin/headeradmin.php'; ?>
  <main>
    <div class="container">
      <form action="<?php echo BASE_URL?>tour/insert_tour" method="post" class="was-validated" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label fw-bold fs-4">Thêm Tour</label><br>
          <label class="form-label">Tên tour</label>
          <input type="text" class="form-control"  placeholder="Thêm vào tên tour" name="nametour" required>
          <div class="invalid-feedback">Tên của tour</div>
        </div>
        <div class="mb-3">
          <input type="file" class="form-control" aria-label="file example" name="imagetour" required>
          <div class="invalid-feedback">Ảnh của tour</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Thêm banner</label>
          <input type="text" class="form-control"  placeholder="Thêm banner tour" name="bannertour" required>
          <div class="invalid-feedback">Banner của tour</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Thêm mô tả 1</label>
          <input type="text" class="form-control"  placeholder="Mô tả 1" name="labeltour1" required>
          <div class="invalid-feedback">Mô tả 1 của khách sạn</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Thêm mô tả 2</label>
          <input type="text" class="form-control"  placeholder="Mô tả 2" name="labeltour2" required>
          <div class="invalid-feedback">Mô tả 2 của khách sạn</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Thêm mô tả 3</label>
          <input type="text" class="form-control"  placeholder="Mô tả 3" name="labeltour3" required>
          <div class="invalid-feedback">Mô tả 3 của khách sạn</div>
        </div>
        <div class="mb-3"> 
          <label class="form-label">Thêm mô tả 4</label>
          <input type="text" class="form-control"  placeholder="Mô tả 4" name="labeltour4" required>
          <div class="invalid-feedback">Mô tả 4 của khách sạn</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Giá tiền</label>
          <input type="number" class="form-control"  placeholder="Thêm giá tiền" name="giatour" required>
          <div class="invalid-feedback">Giá của tour</div>
        </div>
        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="quocgia" required>
            <option value="">Quốc Gia</option>
            <option value="Việt Nam">Việt Nam</option>
            <option value="Trung Quốc">Trung Quốc</option>
            <option value="Thái Lan">Thái Lan</option>
            <option value="Nhật Bản">Nhật Bản</option>
            <option value="Hàn Quốc">Hàn Quốc</option>
            <option value="Singapore">Singapore</option>
          </select>
          <div class="invalid-feedback">Chọn quốc gia của tour</div>
        </div>
        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="tinhthanh" required>
            <option value="">Tỉnh thành</option>
            <option value="Hà Giang">Hà Giang</option>
            <option value="Hà Nội">Hà Nội</option>
            <option value="Cao Bằng">Cao Bằng</option>
            <option value="Tp Hồ Chí Minh">Tp Hồ Chí Minh</option>
            <option value="Cần Thơ">Cần Thơ</option>
            <option value="Kiên Giang">Kiên Giang</option>
            <option value="Quốc Tế">Quốc Tế</option>
          </select>
          <div class="invalid-feedback">Chọn tỉnh thành của tour</div>
        </div>
        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="showsale" required>
            <option value="">Tour sale hay không (1-sale | 0-no sale)</option>
            <option value="1">1</option>
            <option value="0">0</option>
          </select>
          <div class="invalid-feedback">Chọn tour có sale hay không</div>
        </div>
        <div class="mb-3">
          <button class="btn btn-primary" type="submit">Thêm tour</button>
        </div>
      </form>
    </div>
  </main>

</body>

</html>