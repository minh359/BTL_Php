<?php
    class novel extends DB{
        public function GetAll($page)
        {
        $item_per_page = 4;
        $current_page = !empty($page) ? $page : 1; //Trang hiện tại
        $offset = ($current_page - 1) * $item_per_page;
        $novel = mysqli_query($this->conn, "SELECT * FROM `novel`   LIMIT " . $item_per_page . " OFFSET " . $offset);
        $totalRecords = mysqli_query($this->conn, "SELECT * FROM `novel`");
        $totalRecords = $totalRecords->num_rows;
        $totalPages = ceil($totalRecords / $item_per_page);
        return $data = [
            "sp" => $novel,
            "currentPage" => $current_page,
            "totalRecords" => $totalRecords,
            "totalPages" => $totalPages
        ];
        }
        public function GetById($id)
        {
            $novel = mysqli_query($this->conn, "SELECT * FROM `novel` Where id=".$id."");
            return $data=[
                "sp"=>$novel
            ];
        
        }
        public function CreateNovel($username,$pass,$name,$dob,$email)
        {
            $result="Thêm thất bại!";
            if(mysqli_query($this->conn, "INSERT INTO `user_account` VALUES('".$username."','".md5($pass)."','".$name."','".$dob."','".$email."')"))
            {
                $result="Thêm thành công!";
            }
            return $result;
        }
        public function DeleteNovel($id)
        {
            $result="Xóa thất bại!";
            if(mysqli_query($this->conn, "DELETE from `user_account` Where username='".$id."'"))
            {
                if(mysqli_query($this->conn, "DELETE from `chapter` Where novel_id='".$id."'"))
                {
                    $result="Xóa thành công!";
                }
            }
            return $result;
        }
        public function UpdateNovel($username,$pass,$name,$dob,$email)
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