<?php
class database extends PDO {

    public function __construct($connect,$user,$passwd) {
       parent::__construct($connect,$user,$passwd);
    }
    public function select($sql,$data = array(),$fetchstyle = PDO :: FETCH_ASSOC){
        $statement = $this->prepare($sql);
        foreach($data as $key => $value){
            $statement->bindValue($key,$value);
        }
        $statement->execute();
        return $statement->fetchAll();
    }
    public function insert($table_product,$data){
        $key = implode(", ", array_keys($data));
        $values = ":" . implode(", :",array_keys($data));
        $sql = "INSERT INTO $table_product ($key) values ($values) ";
        $statement = $this->prepare($sql);
        foreach($data as $key => $value){
            $statement->bindValue(":$key",$value);
        }
       return $statement->execute();
    }
    public function update($table, $data, $cond) {
        $updateKeys = array();
    
        foreach ($data as $key => $value) {
            $updateKeys[] = "$key = :$key";
        }
    
        $updateString = implode(", ", $updateKeys);
    
        $sql = "UPDATE $table SET $updateString WHERE $cond";
        $statement = $this->prepare($sql);
    
        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value);
        }
    
        return $statement->execute();
    }
    public function updateuser($table, $data, $cond) {
        $updateKeys = array();
        
        foreach ($data as $key => $value) {
            $updateKeys[] = "$key = :$key";
        }
        
        $updateString = implode(", ", $updateKeys);
        
        $sql = "UPDATE $table SET $updateString WHERE $cond";
        $statement = $this->prepare($sql);
    
        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value);
        }
    
        return $statement->execute();
    }
    
    // Phương thức lấy lại thông tin người dùng theo ID
    public function getUserById($sql) {
        $statement = $this->prepare($sql);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
    
    public function delete($table,$cond,$limit=1){
        $sql = "DELETE FROM $table WHERE $cond LIMIT $limit";
        return $this->exec($sql);
    }
    public function affectedRows($sql,$email,$matkhau){
        $statement = $this->prepare($sql);
        $statement->execute(array($email,$matkhau));
         return $statement->rowCount();
    }
    public function selectuser($sql,$email,$matkhau){
        $statement = $this->prepare($sql);
        $statement->execute(array($email,$matkhau));
        return $statement->fetchAll( PDO :: FETCH_ASSOC);
    }
    public function checkexitcart($sql, $data) {
        $stmt = $this->prepare($sql);
        if ($stmt->execute($data)) {
            // Trả về mảng kết quả từ truy vấn
            return $stmt->fetchAll(PDO::FETCH_ASSOC);  // fetchAll() trả về mảng các bản ghi
        } else {
            // Log lỗi nếu truy vấn thất bại
            error_log("Lỗi SQL: " . implode(" ", $data));
            return false;  // Trả về false nếu có lỗi
        }
    }
    
    public function insertcart($sql, $data = array()) {
        // Chuẩn bị câu truy vấn SQL
        $stmt = $this->prepare($sql);
    
        // Bind các giá trị tham số vào câu truy vấn
        foreach ($data as $key => $value) {
            $stmt->bindValue($key, $value);
        }

        $stmt->execute();
        return $this->lastInsertId();  // Lấy cart_id của giỏ hàng vừa được thêm vào
    }
    public function updatecart($sql, $data) {
        $statement = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $statement->bindValue($key, $value);
        }
        $statement->execute();
        
        return $statement->rowCount() > 0;  // Trả về true nếu có dòng bị ảnh hưởng
    }
    
}
?>