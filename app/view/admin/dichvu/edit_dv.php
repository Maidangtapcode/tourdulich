<?php include_once '../app/view/admin/headeradmin.php'; ?>
  <main>
    <div class="container">
        <?php foreach($editdvbyid as $key => $value){?>
      <form action="<?php echo BASE_URL?>dichvu/update_dv/<?php echo $value['id_dv']?>" method="post" class="was-validated" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label fw-bold fs-4">Cập Nhật Dịch Vụ</label><br>
          <label class="form-label">Tên dịch vụ</label>
          <input type="text" class="form-control"  placeholder="Tên dịch vụ" name="namedv" required value="<?php echo $value['namedv']?>">
          <div class="invalid-feedback">Tên của dịch vụ</div>
        </div>
        <div class="mb-3">
          <input type="file" class="form-control" aria-label="file example" name="imgdv" required>
          <div class="invalid-feedback">Ảnh của dịch vụ</div>
        </div>

        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="loaidv" >
            <option value="">Loại dịch vụ</option>
            <option value="Cáp treo" <?php if($value['loaidv'] == 'Cáp treo') echo 'selected'; ?>>Cáp treo</option>
            <option value="Điểm tham quan" <?php if($value['loaidv'] == 'Điểm tham quan') echo 'selected'; ?>>Điểm tham quan</option>
            <option value="Sân chơi" <?php if($value['loaidv'] == 'Sân chơi') echo 'selected'; ?>>Sân chơi</option>
            <option value="Nhạc hội & sự kiện"  <?php if($value['loaidv'] == 'Nhạc hội & sự kiện') echo 'selected'; ?>>Nhạc hội & sự kiện </option>
          </select>
          <div class="invalid-feedback">Chọn loại dịch vụ</div>
        </div>
        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="quocgiadv" >
            <option value="">Khu vực dịch vụ</option>
            <option value="Trong Nước" <?php if($value['loaidv'] == 'Trong Nước') echo 'selected'; ?>>Trong Nước</option>
            <option value="Quốc Tế" <?php if($value['loaidv'] == 'Quốc Tế') echo 'selected'; ?>>Quốc Tế</option>
          </select>
          <div class="invalid-feedback">Chọn khu vực dịch vụ</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Giá dịch vụ</label>
          <input type="text" class="form-control"  placeholder="Giá dịch vụ" name="giadv" required value="<?php echo $value['giadv']?>">
          <div class="invalid-feedback">Nhập giá của dịch vụ</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Địa chỉ dịch vụ</label>
          <input type="text" class="form-control"  placeholder="Giá dịch vụ" name="diachidv" required value="<?php echo $value['diachidv']?>">
          <div class="invalid-feedback">Nhập địa chỉ của dịch vụ</div>
        </div>
        <div class="mb-3">
          <button class="btn btn-primary" type="submit">Cập nhật dịch vụ</button>
        </div>
      </form>
      <?php }?>
    </div>
  </main>
</body>

</html>