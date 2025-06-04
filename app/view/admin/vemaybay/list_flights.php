<?php include_once '../app/view/admin/headeradmin.php'; ?>
<main>

    <div class="container">
        <h3 class="text-center">Liệt Kê Tour</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nơi Đi</th>
                    <th scope="col">Nơi Đến</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Ngày</th>
                    <th scope="col">Loại vé</th>
                    <th scope="col">Giá vé</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $i = 0;
                if (is_array($flights) || is_object($flights)) {
                    foreach ($flights as $key => $value) {
                        $i++;
                ?>
                        <tr>
                            <th><?php echo $i; ?></th>
                            <td  class=""><?php echo $value['noidi']; ?></td>
                            <td><?php echo $value['noiden']; ?></td>
                            <td><img src="../<?php echo $value['imgvmb']; ?>" alt="" width="50px" height="50px"></td>
                            <td><?php echo $value['thoigian']; ?></td>
                            <td><?php echo $value['loaive']; ?></td>
                            <td><?php echo number_format($value['giave'],0,',','.').' đ'; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary my-1">
                                    <a class="text-white text-decoration-none" href="<?php echo BASE_URL ?>flights/edit_flights/<?php echo $value['id_vmb'] ?>">Cập Nhật</a>
                                </button>
                                <button type="button" class="btn btn-primary my-1" name="delete-contact">
                                    <a class="text-white text-decoration-none" href="<?php echo BASE_URL ?>flights/delete_flights/<?php echo $value['id_vmb'] ?>">Xóa</a>
                                </button>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "Dữ liệu không hợp lệ";
                }
                ?>
            </tbody>
        </table>
        <div id="delete-confirm" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Confirmation</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-body">Do you want to delete this contact?</div>
                    <div class="modal-footer">
                        <button type="button" data-bs-dismiss="modal"
                            class="btn btn-danger" id="delete">Delete</button>
                        <button type="button" data-bs-dismiss="modal"
                            class="btn btn-default">Cancel</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    let table = new DataTable('#contacts', {
        responsive: true,
        pagingType: 'simple_numbers'
    });

    const deleteButtons = document.querySelectorAll('button[name="delete-contact"]');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const form = button.closest('form');
            const nameTd = button.closest('tr').querySelector('td:first-child');
            if (nameTd) {
                document.querySelector('.modal-body').textContent =
                    `Do you want to delete "${nameTd.textContent}"?`;

            }
            const submitForm = function() {
                form.submit();
            };
            document.getElementById('delete').addEventListener('click', submitForm, {
                once: true
            });
            const modalEl = document.getElementById('delete-confirm');
            modalEl.addEventListener('hidden.bs.modal', function() {
                document.getElementById('delete').removeEventListener('click',
                    submitForm);
            });
            const confirmModal = new bootstrap.Modal(modalEl, {
                backdrop: 'static',
                keyboard: false
            });
            confirmModal.show();
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>