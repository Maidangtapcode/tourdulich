<?php
class giohangmodel extends dmodel {
    public function __construct(){
        parent::__construct();
    }
    public function checkExistingCart($nguoidung_id) {
        $sql = "SELECT cart_id FROM carts WHERE nguoidung_id = :nguoidung_id AND status = 'active'";
        $result = $this->db->checkexitcart($sql, array(':nguoidung_id' => $nguoidung_id));
        if ($result !== false && is_array($result)) {
            if (count($result) > 0) {
                return $result[0]['cart_id'];  
            }
        }
        return null;
    }
    
    
    public function createNewCart($nguoidung_id) {
        $sql = "INSERT INTO carts (nguoidung_id, status) VALUES (:nguoidung_id, 'active')";
        $data = array(':nguoidung_id' => $nguoidung_id);
        return $this->db->insertcart($sql, $data);
    }
    public function checkProductInCart($cart_id, $product_id, $product_type) {
        $sql = "SELECT * FROM cart_items WHERE cart_id = :cart_id AND product_id = :product_id AND product_type = :product_type";
        $data = array(':cart_id' => $cart_id, ':product_id' => $product_id, ':product_type' => $product_type);
        $result = $this->db->checkexitcart($sql, $data); 
        if (is_array($result) && count($result) > 0) {
            return true; 
        }
        return false;  
    }
    
    public function updateProductQuantity($cart_id, $product_id, $product_type, $quantity) {
        $sql = "UPDATE cart_items SET quantity = :quantity WHERE cart_id = :cart_id AND product_id = :product_id AND product_type = :product_type";
        $data = array(':quantity' => $quantity, ':cart_id' => $cart_id, ':product_id' => $product_id, ':product_type' => $product_type);
        $result = $this->db->updatecart($sql, $data);
        error_log("SQL Update Result: " . print_r($result, true)); // Thêm log để kiểm tra kết quả trả về
        return $result;
    }
    
    
    public function insertProductIntoCart($cart_id, $product_id, $product_type, $quantity,$price) {
        $sql = "INSERT INTO cart_items (cart_id, product_id, product_type, quantity,price) VALUES (:cart_id, :product_id, :product_type, :quantity,:price)";
        $data = array(':cart_id' => $cart_id, ':product_id' => $product_id, ':product_type' => $product_type, ':quantity' => $quantity, 'price' => $price);
        
        $this->db->insertcart($sql, $data);  // Thực thi câu lệnh INSERT
    }
    public function getsanpham($cart_id) {
        // Câu truy vấn SQL để lấy tất cả sản phẩm trong giỏ hàng và kết hợp thông tin từ bảng tour, hotel, vmb, dichvu
        $sql = "
            SELECT  
                ci.product_type, 
                ci.quantity,
                ci.cart_id,
                ci.product_id,
                ci.price,
                CASE 
                    WHEN ci.product_type = 'tour' THEN p_tour.nametour
                    WHEN ci.product_type = 'hotel' THEN p_hotel.namehotel
                    WHEN ci.product_type = 'vmb' THEN p_vmb.name
                    WHEN ci.product_type = 'dichvu' THEN p_dichvu.namedv
                END AS product_name
            FROM cart_items ci
 
            LEFT JOIN tour p_tour ON ci.product_type = 'tour' AND ci.product_id = p_tour.id_tour
 
            LEFT JOIN hotel p_hotel ON ci.product_type = 'hotel' AND ci.product_id = p_hotel.id_hotel
            LEFT JOIN vmb p_vmb ON ci.product_type = 'vmb' AND ci.product_id = p_vmb.id_vmb
 
            LEFT JOIN dichvu p_dichvu ON ci.product_type = 'dichvu' AND ci.product_id = p_dichvu.id_dv
            WHERE ci.cart_id = :cart_id
        ";
        $data = array(':cart_id' => $cart_id);
        $result = $this->db->select($sql, $data);

        if ($result !== false && is_array($result) && count($result) > 0) {
            return $result; 
        } else {
            return []; 
        }
    }
    
    
}
?>