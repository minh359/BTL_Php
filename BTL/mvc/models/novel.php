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
        public function CreateNovel($name,$description,$avatar,$author_id,$category_id)
        {
            $result="Thêm thất bại!";
            if(mysqli_query($this->conn, "INSERT INTO `novel`(name,description,avatar,post_date,state,author_id,category_id) 
                VALUES('".$$name."','".$description."','".$avatar."','" . date("Y/m/d") . "','Đang tiến hành','".$author_id."','".$category_id."')"))
            {
                $result="Thêm thành công!";
            }
            return $result;
        }
        public function DeleteNovel($id)
        {
            $result="Xóa thất bại!";
            if(mysqli_query($this->conn, "DELETE from `novel` Where id='".$id."'"))
            {
                if(mysqli_query($this->conn, "DELETE from `chapter` Where novel_id='".$id."'"))
                {
                    $result="Xóa thành công!";
                }
            }
            return $result;
        }
        public function UpdateNovel($id,$name,$description,$avatar,$author_id,$category_id)
        {
            $result=false;
            if(mysqli_query($this->conn, "UPDATE `novel` SET name='".$name."',description='".$description."',
            avatar='".$avatar."',
            author_id='".$author_id."',
            category_id='".$category_id."', where id='".$id."'"))
            {
                $result=true;
            }
            return $result;
        }
    }
?>        