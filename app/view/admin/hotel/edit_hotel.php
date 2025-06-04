<?php include_once '../app/view/admin/headeradmin.php'; ?>
  <main>
    <div class="container">
    <?php 
        foreach ($edithotelbyid as $key => $value){
        ?>
      <form action="<?php echo BASE_URL?>hotel/update_hotel/<?php echo $value['id_hotel']?>" method="post" class="was-validated" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label fw-bold fs-4">Sửa Khách Sạn</label><br>
          <label class="form-label">Tên Khách Sạn</label>
          <input type="text" class="form-control"  placeholder="Thêm vào tên khách sạn" name="namehotel" value="<?php echo $value['namehotel']?>" required>
          <div class="invalid-feedback">Tên của khách sạn</div>
        </div>
        <div class="mb-3">
        <label class="form-label">Ảnh khách sạn</label>
          <input type="file" class="form-control" aria-label="file example" name="imghotel" required>
          <div class="invalid-feedback">Chọn ảnh khách sạn</div>
        </div>
         <div class="mb-3">
          <label class="form-label">Thêm banner</label>
          <input type="text" class="form-control"  placeholder="Thêm banner của khách sạn" name="bannerhotel" value="<?php echo $value['bannerhotel']?>" required >
          <div class="invalid-feedback">Banner của hotel</div>
        </div>
        
        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="sosaohotel">
            <option value="">Số sao</option>
            <option value="3" <?php if($value['sosaohotel'] == '3') echo 'selected'; ?>>3</option>
            <option value="4" <?php if($value['sosaohotel'] == '4') echo 'selected'; ?>>4</option>
            <option value="5" <?php if($value['sosaohotel'] == '5') echo 'selected'; ?>>5</option>
        </select>
          <div class="invalid-feedback">Số sao của khách sạn</div>
        </div>
        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="diachihotel">
            <option value="">Địa chỉ khách sạn</option>
            <option value="Hà Nội" <?php if($value['diachihotel'] == 'Hà Nội') echo 'selected'; ?>>Hà Nội</option>
            <option value="TP.Hồ Chí Minh" <?php if($value['diachihotel'] == 'TP.Hồ Chí Minh') echo 'selected'; ?>>TP.Hồ Chí Minh</option>
            <option value="Nha Trang" <?php if($value['diachihotel'] == 'Nha Trang') echo 'selected'; ?>>Nha Trang</option>
            <option value="Đà Lạt" <?php if($value['diachihotel'] == 'Đà Lạt') echo 'selected'; ?>>Đà Lạt</option>
            <option value="Vũng Tàu" <?php if($value['diachihotel'] == 'Vũng Tàu') echo 'selected'; ?>>Vũng Tàu</option>
            <option value="Phan Thiết" <?php if($value['diachihotel'] == 'Phan Thiết') echo 'selected'; ?>>Phan Thiết</option>
            <option value="Phú Quốc" <?php if($value['diachihotel'] == 'Phú Quốc') echo 'selected'; ?>>Phú Quốc</option>
            <option value="Hội An" <?php if($value['diachihotel'] == 'Hội An') echo 'selected'; ?>>Hội An</option>
            <option value="Bangkok" <?php if($value['diachihotel'] == 'Bangkok') echo 'selected'; ?>>Bangkok</option>
            <option value="Singapore" <?php if($value['diachihotel'] == 'Singapore') echo 'selected'; ?>>Singapore</option>
            <option value="Tokyo" <?php if($value['diachihotel'] == 'Tokyo') echo 'selected'; ?>>Tokyo</option>
            <option value="Seoul" <?php if($value['diachihotel'] == 'Seoul') echo 'selected'; ?>>Seoul</option>
            <option value="Phuket" <?php if($value['diachihotel'] == 'Phuket') echo 'selected'; ?>>Phuket</option>
            <option value="Bali" <?php if($value['diachihotel'] == 'Bali') echo 'selected'; ?>>Bali</option>
        </select>
          <div class="invalid-feedback">Địa chỉ của khách sạn</div>
        </div>
        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="quocgia">
            <option value="">Khu vực</option>
            <option value="Trong Nước" <?php if($value['quocgia'] == 'Trong Nước') echo 'selected'; ?>>Trong Nước</option>
            <option value="Quốc Tế" <?php if($value['quocgia'] == 'Quốc Tế') echo 'selected'; ?>>Quốc Tế</option>
        </select>
          <div class="invalid-feedback">Khu vực của khách sạn</div>
        </div>
        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="issale">
            <option value="">Sale | No sale (1-sale | 0-no sale)</option>
            <option value="1" <?php if($value['issale'] == '1') echo 'selected'; ?>>1</option>
            <option value="0" <?php if($value['issale'] == '0') echo 'selected'; ?>>0</option>
        </select>
          <div class="invalid-feedback">Khách sạn có sale không</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Giá khách sạn</label>
          <input type="number" class="form-control"  placeholder="Thêm giá tiền" name="giahotel" value="<?php echo $value['giahotel']?>" required>
          <div class="invalid-feedback">Giá của khách sạn</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Giá sale</label>
          <input type="number" class="form-control"  placeholder="Thêm giá tiền sale" name="giahotelsale" value="<?php echo $value['giahotelsale']?>"  required>
          <div class="invalid-feedback">Giá sale của khách sạn</div>
        </div>
        <div class="mb-3">
          <button class="btn btn-primary" type="submit">Sửa Khách sạn</button>
        </div>
      </form>
      <?php 
        }
        ?>
    </div>
  </main>

</body>

</html>