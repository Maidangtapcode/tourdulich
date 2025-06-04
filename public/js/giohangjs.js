// Hàm cập nhật số lượng sản phẩm
function updateQuantity(button, change) {
    var row = button.closest('tr'); // Lấy dòng sản phẩm
    var cart_id = row.dataset.cartId; // Lấy cart_id
    var product_id = row.dataset.productId; // Lấy product_id
    var product_type = row.dataset.productType; // Lấy product_type
    var input = row.querySelector('.quantity-input'); // Trường số lượng
    var currentQuantity = parseInt(input.value);
    var newQuantity = currentQuantity + change;

    // Đảm bảo số lượng không nhỏ hơn 1
    if (newQuantity < 1) newQuantity = 1;

    // Cập nhật giá trị mới trong input
    input.value = newQuantity;

    // Gửi yêu cầu AJAX để cập nhật số lượng trên server
    fetch('http://localhost/ct275h01-project-Maidangtapcode/public/giohang/update_product_quantity', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'cart_id=' + cart_id + '&product_id=' + product_id + '&product_type=' + product_type + '&quantity=' + newQuantity
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log('Số lượng đã được cập nhật');
            updateTotalPrice(); // Cập nhật lại tổng tiền sau khi cập nhật số lượng
        } else {
            console.log('Cập nhật không thành công');
        }
    })
    .catch(error => console.log('Lỗi mạng: ' + error));
}

// Hàm tính toán lại tổng tiền
function updateTotalPrice() {
    var total = 0;
    var rows = document.querySelectorAll('tbody tr'); // Lấy tất cả các dòng trong giỏ hàng

    rows.forEach(function(row) {
        var checkbox = row.querySelector('input[type="checkbox"]'); // Lấy checkbox của sản phẩm

        // Kiểm tra xem checkbox có tồn tại không
        if (checkbox) {
            var isChecked = checkbox.checked; // Kiểm tra checkbox có được chọn hay không
            var priceText = row.querySelector('td:nth-child(3)').textContent;
            var price = priceText.replace(' VND', '').replace(/,/g, ''); // Loại bỏ " VND" và tất cả dấu phẩy
            price = parseFloat(price); // Chuyển đổi giá trị sang kiểu số thực (float)            
            var quantity = parseInt(row.querySelector('.quantity-input').value); // Lấy số lượng
            price = parseFloat(price);

            if (isChecked) {
                total += price * quantity; // Cộng tổng tiền cho các sản phẩm được chọn
            }
        }
    });

    // Cập nhật giá trị tổng tiền vào ô input với id="total"
    document.querySelector('#total').value = total.toFixed(0) + ' VND';
}

// Đảm bảo tính toán lại tổng tiền sau khi trang được tải
window.addEventListener('DOMContentLoaded', function() {
    updateTotalPrice(); // Tính toán tổng tiền khi trang được tải
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', updateTotalPrice); // Cập nhật tổng khi checkbox thay đổi
    });
});

