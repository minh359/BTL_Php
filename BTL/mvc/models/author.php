<?php
    class author extends DB{
        public function GetAll($page)
        {
        $item_per_page = 4;
        $current_page = !empty($page) ? $page : 1; //Trang hiện tại
        $offset = ($current_page - 1) * $item_per_page;
        $author = mysqli_query($this->conn, "SELECT * FROM `author`   LIMIT " . $item_per_page . " OFFSET " . $offset);
        $totalRecords = mysqli_query($this->conn, "SELECT * FROM `author`");
        $totalRecords = $totalRecords->num_rows;
        $totalPages = ceil($totalRecords / $item_per_page);
        return $data = [
            "sp" => $author,
            "currentPage" => $current_page,
            "totalRecords" => $totalRecords,
            "totalPages" => $totalPages
        ];
        }
        public function GetById($id)
        {
            $author = mysqli_query($this->conn, "SELECT * FROM `author` Where id=".$id."");
            return $data=[
                "sp"=>$author
            ];
        
        }

        public function CreateAuthor($name)
        {
            $result="Thêm thất bại!";
            if(mysqli_query($this->conn, "INSERT INTO `author`(name) VALUES('".$name."')"))
            {
                $result="Thêm thành công!";
            }
            return $result;
        }
        public function DeleteAuthor($id)
        { 
            $result="Xóa thất bại!";
                if(mysqli_query($this->conn, "DELETE from `author` Where id='".$id."'"))
                {
                    $result="Xóa thành công!";
                }
            return $result;
        }
        public function UpdateAuthor($id,$name)
        {
            $result=false;
            if(mysqli_query($this->conn, "UPDATE `author` SET name='".$name."' where id='".$id."'"))
            {
                $result=true;
            }
            return $result;
        }
    }
?>        