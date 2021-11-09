<?php
    class chapter extends DB{
        public function GetAll($page)
        {
        $item_per_page = 4;
        $current_page = !empty($page) ? $page : 1; //Trang hiện tại
        $offset = ($current_page - 1) * $item_per_page;
        $chapter = mysqli_query($this->conn, "SELECT * FROM `chapter`   LIMIT " . $item_per_page . " OFFSET " . $offset);
        $totalRecords = mysqli_query($this->conn, "SELECT * FROM `chapter`");
        $totalRecords = $totalRecords->num_rows;
        $totalPages = ceil($totalRecords / $item_per_page);
        return $data = [
            "sp" => $chapter,
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
        public function GetByNovel($id,$page)
        {
            $item_per_page = 1;
            $current_page = !empty($page) ? $page : 1; //Trang hiện tại
            $offset = ($current_page - 1) * $item_per_page;
            $lst_chapter = mysqli_query($this->conn, "SELECT * FROM `chapter` Where novel_id=".$id."   LIMIT " . $item_per_page . " OFFSET " . $offset);
            $totalRecords = mysqli_query($this->conn, "SELECT * FROM `chapter`");
            $totalRecords = $totalRecords->num_rows;
            $totalPages = ceil($totalRecords / $item_per_page);
            return $data = [
                "sp" => $lst_chapter,
                "currentPage" => $current_page,
                "totalRecords" => $totalRecords,
                "totalPages" => $totalPages
            ];
        
        }
        public function CreateChapter($chapter_number,$image,$content,$novel_id)
        {
            $result="Thêm thất bại!";
            if(mysqli_query($this->conn, "INSERT INTO `chapter`(chapter_number,image,content,novel_id) VALUES('".$chapter_number."','".$image."','".$content."','".$novel_id."')"))
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
        public function UpdateChapter($id,$chapter_number,$image,$content,$novel_id)
        {
            $result=false;
            if(mysqli_query($this->conn, "UPDATE `chapter` SET chapter_number='".$chapter_number."',image='".$image."',
            content='".$content."',
            novel_id='".$novel_id."' where id='".$id."'"))
            {
                $result=true;
            }
            return $result;
        }
    }
?>        