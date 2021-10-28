<?php
    class user_account extends DB{
        public function GetAll($page)
        {
        $item_per_page = 4;
        $current_page = !empty($page) ? $page : 1; //Trang hiện tại
        $offset = ($current_page - 1) * $item_per_page;
        $account = mysqli_query($this->conn, "SELECT * FROM `user_account`   LIMIT " . $item_per_page . " OFFSET " . $offset);
        $totalRecords = mysqli_query($this->conn, "SELECT * FROM `user_account`");
        $totalRecords = $totalRecords->num_rows;
        $totalPages = ceil($totalRecords / $item_per_page);
        return $data = [
            "sp" => $account,
            "currentPage" => $current_page,
            "totalRecords" => $totalRecords,
            "totalPages" => $totalPages
        ];
        }
        public function GetById($id)
        {
            $account = mysqli_query($this->conn, "SELECT * FROM `user_account` Where username='".$id."'");
            return $data=[
                "sp"=>$account
            ];
        
        }

        public function CreateUser($username,$pass,$name,$dob,$email)
        {
            $result="Thêm thất bại!";
            if(mysqli_query($this->conn, "INSERT INTO `user_account` VALUES('".$username."','".md5($pass)."','".$name."','".$dob."','".$email."')"))
            {
                $result="Thêm thành công!";
            }
            return $result;
        }
        public function DeleteUser($id)
        {
            $result="Xóa thất bại!";
            if(mysqli_query($this->conn, "DELETE from `user_account` Where username='".$id."'"))
            {
                $result="Xóa thành công!";
            }
            return $result;
        }
        public function UpdateUser($username,$pass,$name,$dob,$email)
        {
            $result=false;
            if(mysqli_query($this->conn, "UPDATE `user_account` SET password='".md5($pass)."',name='".$name."',
            dob='".$dob."',
            email='".$email."' where username='".$username."'"))
            {
                $result=true;
            }
            return $result;
        }
}
?>