<?php include_once '../app/view/admin/headeradmin.php'; ?>
  <main>
    <div class="container">
      <form action="<?php echo BASE_URL?>flights/insert_flights" method="post" class="was-validated" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label fw-bold fs-4">Thêm Chuyến Bay</label><br>
          <label class="form-label">Chuyến bay bắt đầu từ</label>
          <input type="text" class="form-control"  placeholder="Chuyến bay bắt đầu từ" name="noidi" required>
          <div class="invalid-feedback">Nhập nơi chuyến bay bắt đầu từ</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Chuyến bay đến</label>
          <input type="text" class="form-control"  placeholder="Thêm banner tour" name="noiden" required>
          <div class="invalid-feedback">Nhập nơi chuyến bay đến</div>
        </div>
        <div class="mb-3">
          <input type="file" class="form-control" aria-label="file example" name="imgvmb" required>
          <div class="invalid-feedback">Ảnh của chuyến bay</div>
        </div>

        <div class="mb-3">
          <select class="form-select" required aria-label="select example" name="loaive" >
            <option value="">Loại chuyến bay</option>
            <option value="Một chiều / Phổ thông">Một chiều / Phổ thông</option>
            <option value="Khứ hồi / Phổ thông">Khứ hồi / Phổ thông</option>
            <option value="Một chiều / Thương gia">Một chiều / Thương gia </option>
            <option value="Khứ hồi / Thương gia">Khứ hồi / Thương gia</option>
          </select>
          <div class="invalid-feedback">Chọn loại vé máy bay</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Giá chuyến bay</label>
          <input type="text" class="form-control"  placeholder="Giá chuyến bay" name="giave" required>
          <div class="invalid-feedback">Nhập giá của chuyến bay</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Thời gian khởi hành </label>
          <input type="date" id="datepicker" class="form-control"  placeholder="dd/mm/yyyy" name="thoigian" required>
          <div class="invalid-feedback">Thời gian khởi hành</div>
        </div>
        <div class="mb-3">
          <button class="btn btn-primary" type="submit">Thêm tour</button>
        </div>
      </form>
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
</body>

</html>