<?php include_once '../app/view/header.php'; ?>

<body>
    <header>
        <h1 style="text-align: center;">LIÊN HỆ</h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.84151844204!2d105.76804037404061!3d10.029933690076952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zxJDhuqFpIGjhu41jIEPhuqduIFRoxqE!5e0!3m2!1svi!2s!4v1727062492251!5m2!1svi!2s"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class=" col-lg-6 ">
                    <div class="">
                        <h3>Thông tin liên hệ</h3>

                        <ul class="list-menu list-unstyled">

                            <li><i class="bi bi-geo-alt-fill"></i> Địa chỉ: <span>Đại học Cần Thơ Đ. 3 Tháng 2, Xuân Khánh, Ninh Kiều, Cần Thơ</span></li>
                            <li><i class="bi bi-telephone-fill"></i> Điện thoại: <a href="tel:19006750">19006750</a></li>
                            <li><i class="bi bi-envelope-fill"></i> Email: <a href="mailto:support@worldtravel.vn">support@worldtravel.vn</a></li>

                        </ul>

                    </div>
                    <div class="">
                        <h3>Gửi thắc mắc cho chúng tôi</h3>
                        <form action="" class="was-validated">
                            <div class="mb-3 mt-3 form-floating">
                                <input type="text" class="form-control" id="uname" placeholder="Họ tên" name="uname"
                                    required>
                                <label for="email">Họ tên</label>

                                <div class="invalid-feedback">Vui lòng điền vào mục này.</div>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="text" class="form-control" id="email" placeholder="Email" name="email"
                                    required>
                                <label for="email">Email</label>

                                <div class="invalid-feedback">Vui lòng điền vào mục này.</div>
                            </div>

                            <div class="mb-3">
                                <label for="validationTextarea" class="form-label">Nhập nội dung</label>
                                <textarea class="form-control is-invalid" id="validationTextarea" rows="3"
                                    placeholder="Vui lòng điền vào mục này." required></textarea>


                            </div>
                            <button type="submit" class="btn btn-primary">Gửi thắc mắc</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php include_once '../app/view/footer.php'; ?>
</body>

</html>