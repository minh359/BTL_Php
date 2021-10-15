<?php
    class user_account extends DB{
        public function GetAll($per_page,$page)
        {
        $item_per_page = !empty($per_page) ?$per_page : 4;
        $current_page = !empty($page) ? $page : 1; //Trang hiện tại
        $offset = ($current_page - 1) * $item_per_page;
        $products = mysqli_query($this->conn, "SELECT * FROM `user_account` ORDER BY `username` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
        $totalRecords = mysqli_query($this->conn, "SELECT * FROM `user_account`");
        $totalRecords = $totalRecords->num_rows;
        $totalPages = ceil($totalRecords / $item_per_page);
        return $data = [
            "sp" => $products,
            "item_per_page" => $item_per_page,
            "currentPage" => $current_page,
            "totalRecords" => $totalRecords,
            "totalPages" => $totalPages
        ];
    }
}
