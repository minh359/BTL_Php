<?php
    class user_account extends DB{
        public function GetAll()
        {
            $query='SELECT * FROM user_account';
            return mysqli_query($this->conn,$query);
        }
    }
?>