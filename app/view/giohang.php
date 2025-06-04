<?php include_once '../app/view/header.php'; ?>
    <style>
        /* Thêm một số màu sắc tùy chỉnh */
        .btn-primary {
            background-color: #ff5722;
            border-color: #ff5722;
        }
        .btn-primary:hover {
            background-color: #e64a19;
            border-color: #e64a19;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }
        .form-label {
            font-weight: bold;
        }
        .quantity-buttons {
            display: flex;
            align-items: center;
        }
        .quantity-buttons button {
            width: 30px;
            height: 30px;
            padding: 0;
            font-size: 20px;
        }
        .quantity-input {
            width: 50px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <div class="row">
        
        <?php if (!empty($cart_items)): ?>
            <?php if(isset($thanhcong)){
            echo '<div class="alert alert-success">' . $thanhcong . '</div>';
            }?>
        <!-- Cột bên trái (Giỏ hàng) -->
        <div class="col-md-7">
            <h3 class="text-primary mb-4"><i class="fas fa-shopping-cart"></i> Giỏ hàng</h3>
           <!-- Giỏ hàng: Hiển thị danh sách sản phẩm trong giỏ hàng -->
<table class="table table-bordered table-striped">
    <thead class="bg-primary text-white">
        <tr>
            <th><input type="checkbox" class="form-check-input"></th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Loại sản phẩm</th>
            <th>Số lượng</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($cart_items as $item): ?>
        <tr data-cart-id="<?php echo $item['cart_id']; ?>" data-product-id="<?php echo $item['product_id']; ?>" data-product-type="<?php echo $item['product_type']; ?>">
        <td><input type="checkbox" class="form-check-input" data-row-id="row-<?php echo $item['cart_id']; ?>"></td>

            <td><?php echo $item['product_name']; ?></td>
            <td><?php echo number_format($item['price']); ?> VND</td>
            <td><?php echo $item['product_type']; ?></td>
            <td>
                <div class="quantity-buttons">
                    <button class="btn btn-sm btn-outline-secondary" onclick="updateQuantity(this, -1)">-</button>
                    <input type="number" class="quantity-input form-control-sm mx-1" min="1" value="<?php echo $item['quantity']; ?>">
                    <button class="btn btn-sm btn-outline-secondary" onclick="updateQuantity(this, 1)">+</button>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

        </div>

        <!-- Cột bên phải (Form thanh toán) -->
        <div class="col-md-5">
            <h3 class="text-primary mb-4"><i class="fas fa-credit-card"></i> Thanh toán</h3>
            <form id="paymentForm">
                <div class="mb-3">
                    <label for="name" class="form-label">Tên</label>
                    <input type="text" class="form-control" id="name" placeholder="Nhập tên của bạn">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Số điện thoại</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Nhập số điện thoại của bạn">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Nhập email của bạn">
                </div>
                <div class="mb-3">
                    <label for="total" class="form-label">Tổng tiền</label>
                    <input type="text" class="form-control" id="total" value="0 VND" readonly>

                </div>
                <button type="submit" class="btn btn-primary w-100"><i class="fas fa-check-circle"></i> Thanh toán</button>
            </form>
        </div>
        <?php else: ?>
                <p>Giỏ hàng của bạn trống</p>
        <?php endif; ?>
    </div>
</div>

 <script src="<?php echo BASE_URL?>js/giohangjs.js?v=3"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <?php include_once '../app/view/footer.php'; ?>
</body>
</html>
