<?php
    class Api extends Controller{
        public $model;
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
        public function DeleteUser()
        {
            $this->model=$this->model("user_account");
            $username = addslashes($_POST['username']);
            $result=$this->model->DeleteUser($username);
            $this->view("Admin_layout",[
                "func"=>"Admin/UserTable",
                "page"=>"pages/tables/user_table",
                "has_paging"=>true,
                "source"=>$this->model->GetAll(1),
                "result"=>$result
            ]);
        }
        public function CreateUser()
        {
            $this->model=$this->model("user_account");
            $username = addslashes($_POST['username']);
            $pass = $_POST['password'];
            $name = ($_POST['name']);
            $dob = date($_POST['dob']);
            $email = ($_POST['email']);
            $result=$this->model-> CreateUser($username,$pass,$name,$dob,$email);
            return $result;
        }
        public function UpdateUser()
        {
            $this->model=$this->model("user_account");
            $username = addslashes($_POST['username']);
            $pass = $_POST['password'];
            $name = ($_POST['name']);
            $dob = date($_POST['dob']);
            $email = ($_POST['email']);
            $result=$this->model-> UpdateUser($username,$pass,$name,$dob,$email);
            return $result;
        }
    }
?>