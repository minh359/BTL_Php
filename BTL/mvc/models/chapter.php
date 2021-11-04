<?php
    class chapter extends DB{
        public function GetAll($page)
        {
        $item_per_page = 4;
        $current_page = !empty($page) ? $page : 1; //Trang hiện tại
        $offset = ($current_page - 1) * $item_per_page;
        $novel = mysqli_query($this->conn, "SELECT * FROM `chapter`   LIMIT " . $item_per_page . " OFFSET " . $offset);
        $totalRecords = mysqli_query($this->conn, "SELECT * FROM `chapter`");
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
            $chapter = mysqli_query($this->conn, "SELECT * FROM `chapter` Where id=".$id."");
            return $data=[
                "sp"=>$chapter
            ];
        
        }
        public function GetByNovel($id)
        {
            $lst_chapter = mysqli_query($this->conn, "SELECT * FROM `chapter` Where novel_id=".$id."");
            return $data=[
                "sp"=>$lst_chapter
            ];
        
        }
        public function CreateChapter($username,$pass,$name,$dob,$email)
        {
            $result="Thêm thất bại!";
            if(mysqli_query($this->conn, "INSERT INTO `user_account` VALUES('".$username."','".md5($pass)."','".$name."','".$dob."','".$email."')"))
            {
                $result="Thêm thành công!";
            }
            return $result;
        }
        public function DeleteChapter($id)
        { 
            $result="Xóa thất bại!";
                if(mysqli_query($this->conn, "DELETE from `chapter` Where id='".$id."'"))
                {
                    $result="Xóa thành công!";
                }
            return $result;
        }
        public function UpdateChapter($username,$pass,$name,$dob,$email)
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