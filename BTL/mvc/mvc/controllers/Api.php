<?php
    class Api extends Controller{
        public function TestJson()
        {
            $test=$this->model("user_account");
            $t=$test->GetAll();
            $mang=[];
            while($row=mysqli_fetch_array($t))
            {
                array_push($mang,$row);
            }
            echo json_encode($mang);
        }
    }
?>