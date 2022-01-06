<?php
    require_once 'config/db.php';
    class model{
        private $mamh, $name, $TC, $TLT, $TBT, $TTHTN, $GTH;

        public function connectDb() {
            $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối được. Lỗi: " .mysqli_connect_error());
            }
            return $connection;
        }
    
        public function closeDb($connection = null) {
            mysqli_close($connection);
        }

        public function getAllUsers(){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sql = "SELECT * FROM monhoc";
            $result = mysqli_query($conn,$sql);

            // Tôi khai báo biến lưu kết quả trả về (dạng mảng)
            $datas = [];
            // B3. Xử lý và (KO PHẢI SHOW KẾT QUẢ) TRẢ VỀ KẾT QUẢ
            if(mysqli_num_rows($result) > 0){
                // Lấy tất cả dùng mysqli_fetch_all
                $arr_users = mysqli_fetch_all($result, MYSQLI_ASSOC); //Sử dụng MYSQLI_ASSOC để chỉ định lấy kết quả dạng MẢNG KẾT HỢP
            }
            $this->closeDb($conn);

            return $arr_users;
        }

        public function addUsers($name, $TC, $TLT, $TBT, $TTHTN, $GTH){
            $conn = $this->connectDb();
            $sql = "INSERT INTO monhoc(ten_mh,sotinchi,sotiet_lt,sotiet_bt,sotiet_thtn,sogio_tuhoc) VALUES ('$name', '$TC', '$TLT', '$TBT', '$TTHTN', '$GTH')";
            $result = mysqli_query($conn,$sql);
            $this->closeDb($conn);
            return $result;
        }


        public function getUser($id){
            $conn = $this->connectDb();

            $sql = "SELECT * FROM monhoc WHERE mamh = '$id'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0)
                $user = mysqli_fetch_assoc($result);
            $this->closeDb($conn);
            return $user;
        }

        public function updateUser($id, $name, $TC, $TLT, $TBT, $TTHTN, $GTH){
            $conn = $this->connectDb();

            $sql = "UPDATE monhoc SET ten_mh='$name', sotinchi='$TC', sotiet_lt='$TLT', sotiet_bt='$TBT', sotiet_thtn='$TTHTN', sogio_tuhoc='$GTH' WHERE mamh = '$mamh'";
            $result = mysqli_query($conn,$sql);

            $this->closeDb($conn);
            return $result;
        }

        function deleteUser($id){
            $conn = $this->connectDb();

            $sql = "DELETE FROM monhoc WHERE mamh = '$id'";
            $result = mysqli_query($conn,$sql);

            $this->closeDb($conn);
            return $result;
        }
    }
?>