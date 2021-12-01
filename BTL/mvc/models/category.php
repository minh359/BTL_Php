<?php
    class category extends DB{
        public function GetAll($page)
        {
        $item_per_page = 4;
        $current_page = !empty($page) ? $page : 1; //Trang hiện tại
        $offset = ($current_page - 1) * $item_per_page;
        $category = mysqli_query($this->conn, "SELECT * FROM `category`   LIMIT " . $item_per_page . " OFFSET " . $offset);
        $totalRecords = mysqli_query($this->conn, "SELECT * FROM `category`");
        $totalRecords = $totalRecords->num_rows;
        $totalPages = ceil($totalRecords / $item_per_page);
        return $data = [
            "sp" => $category,
            "currentPage" => $current_page,
            "totalRecords" => $totalRecords,
            "totalPages" => $totalPages
        ];
        }
        public function GetAllCategory()
        {
            $category = mysqli_query($this->conn, "SELECT * FROM `category`  ");
            return $data = [
                "sp" => $category,
            ];
        }
        public function GetById($id)
        {
            $category = mysqli_query($this->conn, "SELECT * FROM `category` Where id=".$id."");
            return $data=[
                "sp"=>$category
            ];
        
        }

        public function CreateCategory($name,$description)
        {
            $result="Thêm thất bại!";
            if(mysqli_query($this->conn, "INSERT INTO `category`(name,description) VALUES('".$name."','".$description."')"))
            {
                $result="Thêm thành công!";
            }
            return $result;
        }
        public function DeleteCategory($id)
        { 
            $result="Xóa thất bại!";
                if(mysqli_query($this->conn, "DELETE from `category` Where id='".$id."'"))
                {
                    $result="Xóa thành công!";
                }
            return $result;
        }
        public function UpdateCategory($id,$name,$description)
        {
            $result=false;
            if(mysqli_query($this->conn, "UPDATE `category` SET name='".$name."',description='".$description."' where id='".$id."'"))
            {
                $result=true;
            }
            return $result;
        }
    }
?>        