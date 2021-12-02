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
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function CreateNovel(){
            $this->model=$this->model("novel");
            $name = $_POST['name'];
            $description = $_POST['description'];
            $avatar = ($_POST['avatar']);
            $state = ($_POST['state']);
            $post_date = date($_POST['postdate']);
            $author_id = ($_POST['author']);
            $category_id = ($_POST['category']);
            $result=$this->model-> CreateNovel($name,$description,$avatar,$state,$post_date,$author_id,$category_id);
            return $result;
        }
        public function UpdateNovel(){
            $this->model=$this->model("novel");
            $id = $_POST['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $avatar = ($_POST['avatar']);
            $state = ($_POST['state']);
            $post_date = date($_POST['postdate']);
            $author_id = ($_POST['author']);
            $category_id = ($_POST['category']);
            $result=$this->model-> UpdateNovel($id,$name,$description,$avatar,$state,$post_date,$author_id,$category_id);
            return $result;
        }
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function CreateChapter(){
            $this->model=$this->model("chapter");
            $chapter_number = $_POST['chapter_number'];
            $image = $_POST['image'];
            $content = ($_POST['content']);
            $novel_id = ($_POST['novel_id']);
            $result=$this->model-> CreateChapter($chapter_number,$image,$content,$novel_id);
            return $result;
        }
        public function UpdateChapter(){
            $this->model=$this->model("chapter");
            $id = $_POST['id'];
            $chapter_number = $_POST['chapter_number'];
            $image = $_POST['image'];
            $content = ($_POST['content']);
            $novel_id = ($_POST['novel_id']);
            $result=$this->model-> UpdateChapter($id,$chapter_number,$image,$content,$novel_id);
            return $result;

        }///////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function CreateAuthor(){
            $this->model=$this->model("author");
            $name = $_POST['name'];
            $result=$this->model-> CreateAuthor($name);
            return $result;
        }
        public function UpdateAuthor(){
            $this->model=$this->model("author");
            $id=$_POST['id'];
            $name = $_POST['name'];
            $result=$this->model-> UpdateAuthor($id,$name);
            return $result;

        }///////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function CreateCategory(){
            $this->model=$this->model("category");
            $description=$_POST['description'];
            $name = $_POST['name'];
            $result=$this->model-> CreateCategory($name,$description);
            return $result;
        }
        public function UpdateCategory(){
            $this->model=$this->model("category");
            $id = $_POST['id'];
            $description=$_POST['description'];
            $name = $_POST['name'];
            $result=$this->model-> CreateCategory($id,$name,$description);
            return $result;
        }
    }
?>