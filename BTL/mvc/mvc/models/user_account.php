<?php
    class user_account extends DB{
        public function GetAll($page)
        {
        $item_per_page = 4;
        $current_page = !empty($page) ? $page : 1; //Trang hiện tại
        $offset = ($current_page - 1) * $item_per_page;
        $account = mysqli_query($this->conn, "SELECT * FROM `user_account` ORDER BY `username` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
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
        public function DeleteUser($id)
        {
            mysqli_query($this->conn, "DELETE from `user_account` Where username='".$id."'");
        }
        public function EditUser($username,$pass,$name,$dob,$email)
        {
            mysqli_query($this->conn, "UPDATE `user_account` set password='".md5($pass)."',name='".$name."',
            dob='".$dob."',
            emauk='".$email."', Where username='".$username."'");
        }
}
