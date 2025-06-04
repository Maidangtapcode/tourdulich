<?php include_once '../app/view/admin/headeradmin.php'; ?>
  <main>
    <div class="container">
    <?php 
        foreach ($editflightsbyid as $key => $value){
        ?>
      <form action="<?php echo BASE_URL?>flights/insert_flights" method="post" class="was-validated" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label fw-bold fs-4">Cập nhật Chuyến Bay</label><br>
          <label class="form-label">Chuyến bay bắt đầu từ</label>
          <input type="text" class="form-control"  placeholder="Chuyến bay bắt đầu từ" name="noidi" required value="<?php echo $value['noidi']?>">
          <div class="invalid-feedback">Nhập nơi chuyến bay bắt đầu từ</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Chuyến bay đến</label>
          <input type="text" class="form-control"  placeholder="huyến bay đến" name="noiden" required value="<?php echo $value['noiden']?>">
          <div class="invalid-feedback">Nhập nơi chuyến bay đến</div>
        </div>
        <div class="mb-3">
          <input type="file" class="form-control" aria-label="file example" name="imgvmb" required>
          <div class="invalid-feedback">Ảnh của chuyến bay</div>
        </div>

        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="loaive" >
            <option value="">Loại chuyến bay</option>
            <option value="Một chiều / Phổ thông" <?php if($value['loaive'] == 'Một chiều / Phổ thông') echo 'selected'; ?>>Một chiều / Phổ thông</option>
            <option value="Khứ hồi / Phổ thông" <?php if($value['loaive'] == 'Khứ hồi / Phổ thông') echo 'selected'; ?>>Khứ hồi / Phổ thông</option>
            <option value="Một chiều / Thương gia" <?php if($value['loaive'] == 'Một chiều / Thương gia') echo 'selected'; ?>>Một chiều / Thương gia</option>
            <option value="Khứ hồi / Phổ thông" <?php if($value['loaive'] == 'Khứ hồi / Phổ thông') echo 'selected'; ?>>Khứ hồi / Phổ thông</option>
          </select>
          <div class="invalid-feedback">Chọn loại vé máy bay</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Giá chuyến bay</label>
          <input type="text" class="form-control"  placeholder="Giá chuyến bay" name="giave" required value="<?php echo $value['giave']?>">
          <div class="invalid-feedback">Nhập giá của chuyến bay</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Thời gian khởi hành </label>
          <input type="date" class="form-control"  placeholder="Thời gian khởi hành" name="thoigian" required value="<?php echo $value['thoigian']?>">
          <div class="invalid-feedback">Thời gian khởi hành</div>
        </div>
        <div class="mb-3">
          <button class="btn btn-primary" type="submit">Cập nhật chuyến bay</button>
        </div>
      </form>
      <?php 
        }
        ?>
    </div>
  </main>

</body>

</html>