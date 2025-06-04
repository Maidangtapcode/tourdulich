<?php
Session::init();
class giohang extends dcontroller
{
    
  public function __construct()
  {
    $data = array();
    parent::__construct();
  }
  public function index()
  {
    $this->viewcart();
  }
  public function viewgiohang(){
    $this->load->view('giohang');
  }
  public function addtocart() {
    // Kiểm tra xem các tham số có tồn tại trong URL không
    if (isset($_GET['product_id']) && isset($_GET['product_type']) && isset($_GET['quantity']) && isset($_GET['price'])) {
        $product_id = $_GET['product_id'];  // ID sản phẩm (tour hoặc loại khác)
        $product_type = $_GET['product_type'];  // Loại sản phẩm (tour, hotel, service, ticket)
        $price = (int)$_GET['price'];
        $quantity = (int) $_GET['quantity'];  // Số lượng sản phẩm
        $giohangmodel = $this->load->model('giohangmodel');
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (isset($_SESSION['nguoidung_id'])) {
            $nguoidung_id = $_SESSION['nguoidung_id'];  // Lấy ID người dùng từ session
            // Lấy cart_id của người dùng
            $cart_id = $this->getCartId($nguoidung_id);  

            // Nếu người dùng chưa có giỏ hàng, tạo giỏ hàng mới
            if (!$cart_id) {
                $cart_id = $giohangmodel->createNewCart($nguoidung_id);  // Tạo giỏ hàng mới
            }

            // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
            if ($giohangmodel->checkProductInCart($cart_id, $product_id, $product_type)) {
                // Nếu có, cập nhật số lượng sản phẩm trong giỏ hàng
                $giohangmodel->updateProductQuantity($cart_id, $product_id, $product_type, $quantity,$price);
            } else {
                // Nếu chưa có, thêm sản phẩm vào giỏ hàng
                $giohangmodel->insertProductIntoCart($cart_id, $product_id, $product_type, $quantity,$price);
            }

            // Thông báo cho người dùng
             
            $message['thanhcong']="Sản phẩm đã được thêm vào giỏ hàng!";
            $this->load->view('giohang',$message);
        } else {
            echo "Vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng.";
           
        }
    } else {
        echo "Thiếu thông tin sản phẩm hoặc số lượng!";
    }
    }


public function getCartId($nguoidung_id) {
    Session::checksessionuser();
    // Kiểm tra xem người dùng đã có giỏ hàng "active" chưa
    $giohangmodel = $this->load->model('giohangmodel');
    $cart_id = $giohangmodel->checkExistingCart($nguoidung_id);

    // Nếu chưa có giỏ hàng, tạo giỏ hàng mới
    if (!$cart_id) {
        $cart_id = $giohangmodel->createNewCart($nguoidung_id);
    }

    return $cart_id;
}
public function viewCart() {
    // Lấy ID giỏ hàng của người dùng
    $nguoidung_id = $_SESSION['nguoidung_id'];
    $cart_id = $this->getCartId($nguoidung_id);
    
    if ($cart_id) {
        $giohangmodel = $this->load->model('giohangmodel');
        $cart_items = $giohangmodel->getsanpham($cart_id);
        $data['cart_items'] = $cart_items;
        $this->load->view('giohang', $data);
    } else {
        echo "Giỏ hàng không tồn tại.";
    }
}
public function update_product_quantity(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Lấy dữ liệu từ POST request
        $cart_id = isset($_POST['cart_id']) ? (int)$_POST['cart_id'] : 0;
        $product_id = isset($_POST['product_id']) ? (int)$_POST['product_id'] : 0;
        $product_type = isset($_POST['product_type']) ? $_POST['product_type'] : '';
        $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 0;

        // Kiểm tra xem có dữ liệu hợp lệ không
        error_log("Cart ID: $cart_id, Product ID: $product_id, Product Type: $product_type, Quantity: $quantity");

        if ($cart_id > 0 && $product_id > 0 && $quantity > 0) {
            // Gọi hàm updateProductQuantity để cập nhật số lượng trong giỏ hàng
            $giohangmodel = $this->load->model('giohangmodel');  // Tạo instance của model giỏ hàng
            $result = $giohangmodel->updateProductQuantity($cart_id, $product_id, $product_type, $quantity);

            if ($result) {
                // Cập nhật thành công
                echo json_encode(['success' => true]);
            } else {
                // Lỗi khi cập nhật
                echo json_encode(['success' => false, 'message' => 'Cập nhật không thành công']);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Dữ liệu không hợp lệ']);
        }
    }
}


}
 
