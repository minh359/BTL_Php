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
    }
?>        