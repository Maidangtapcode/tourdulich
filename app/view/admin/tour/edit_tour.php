<?php include_once '../app/view/admin/headeradmin.php'; ?>
  <main>
    <div class="container">
        <?php 
        foreach ($edittourbyid as $key => $value){
        ?>
      <form action="<?php echo BASE_URL?>tour/update_tour/<?php echo $value['id_tour']?>" method="post" class="was-validated" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label fw-bold fs-4">Sửa Thông Tin Tour</label><br>
          <label class="form-label">Tên tour</label>
          <input type="text" class="form-control"  placeholder="Thêm vào tên tour" name="nametour" value="<?php echo $value['nametour']?>">
        </div>
        <div class="mb-3">
          <input type="file" class="form-control" aria-label="file example" required  name="imagetour" value="<?php echo $value['imagetour']?>">
          <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
          <label class="form-label">Thêm banner</label>
          <input type="text" class="form-control"  placeholder="Thêm banner tour" name="bannertour" value="<?php echo $value['bannertour']?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Thêm mô tả 1</label>
          <input type="text" class="form-control"  placeholder="Mô tả 1" name="labeltour1" value="<?php echo $value['labeltour1']?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Thêm mô tả 2</label>
          <input type="text" class="form-control"  placeholder="Mô tả 2" name="labeltour2" value="<?php echo $value['labeltour2']?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Thêm mô tả 3</label>
          <input type="text" class="form-control"  placeholder="Mô tả 3" name="labeltour3" value="<?php echo $value['labeltour3']?>">
        </div>
        <div class="mb-3"> 
          <label class="form-label">Thêm mô tả 4</label>
          <input type="text" class="form-control"  placeholder="Mô tả 4" name="labeltour4" value="<?php echo $value['labeltour4']?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Giá tiền</label>
          <input type="number" class="form-control"  placeholder="Thêm giá tiền" name="giatour" value="<?php echo $value['giatour']?>">
        </div>
        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="quocgia" required>
            <option value="">Quốc Gia</option>
            <option value="Việt Nam" <?php if($value['quocgia'] == 'Việt Nam') echo 'selected'; ?>>Việt Nam</option>
            <option value="Trung Quốc" <?php if($value['quocgia'] == 'Trung Quốc') echo 'selected'; ?>>Trung Quốc</option>
            <option value="Thái Lan" <?php if($value['quocgia'] == 'Thái Lan') echo 'selected'; ?>>Thái Lan</option>
            <option value="Nhật Bản" <?php if($value['quocgia'] == 'Nhật Bản') echo 'selected'; ?>>Nhật Bản</option>
            <option value="Hàn Quốc" <?php if($value['quocgia'] == 'Hàn Quốc') echo 'selected'; ?>>Hàn Quốc</option>
            <option value="Singapore" <?php if($value['quocgia'] == 'Singapore') echo 'selected'; ?>>Singapore</option>
          </select>
          <div class="invalid-feedback">Chọn quốc gia của tour</div>
        </div>
        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="tinhthanh" required>
            <option value="">Tỉnh thành</option>
            <option value="Hà Giang" <?php if($value['tinhthanh'] == 'Hà Giang') echo 'selected'; ?>>Hà Giang</option>
            <option value="Hà Nội" <?php if($value['tinhthanh'] == 'Hà Nội') echo 'selected'; ?>>Hà Nội</option>
            <option value="Cao Bằng" <?php if($value['tinhthanh'] == 'Cao Bằng') echo 'selected'; ?>>Cao Bằng</option>
            <option value="Tp Hồ Chí Minh" <?php if($value['tinhthanh'] == 'Tp Hồ Chí Minh') echo 'selected'; ?>>Tp Hồ Chí Minh</option>
            <option value="Cần Thơ" <?php if($value['tinhthanh'] == 'Cần Thơ') echo 'selected'; ?>>Cần Thơ</option>
            <option value="Kiên Giang" <?php if($value['tinhthanh'] == 'Kiên Giang') echo 'selected'; ?>>Kiên Giang</option>
            <option value="Quốc Tế" <?php if($value['tinhthanh'] == 'Quốc Tế') echo 'selected'; ?>>Quốc Tế</option>
          </select>
          <div class="invalid-feedback">Chọn tỉnh thành của tour</div>
        </div>
        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="showsale" required>
            <option value="">Tour sale hay không (1-sale | 0-no sale)</option>
            <option value="1" <?php if($value['tinhthanh'] == '1') echo 'selected'; ?>>1</option>
            <option value="0" <?php if($value['tinhthanh'] == '0') echo 'selected'; ?>>0</option>
          </select>
          <div class="invalid-feedback">Chọn tour có sale hay không</div>
        </div>
        <div class="mb-3">
          <button class="btn btn-primary" type="submit">Sửa tour</button>
        </div>
      </form>
      <?php }?>
    </div>
  </main>

</body>

</html>