<?php
    class Admin extends Controller{
        public function Index(){
            $this->view("Admin_layout",["page"=>"partials/_devinfo"
                    ]);
        }

        public function UserTable($page){
            //có thể xử lý các hàm lấy dữ liệu từ DB ở đây, sau đó đưa vào list để 
            //truyền vào view
            $source=$this->model("user_account");
            // truyền tên master view, page, tham số
            $this->view("Admin_layout",[
                        "func"=>"Admin/UserTable",
                        "page"=>"pages/tables/user_table",
                        "has_paging"=>true,
                        "source"=>$source->GetAll($page)
                    ]);
        }
        public function CrudUser($method,$username)
        {
            if($method=='Create' && $username=='0')
            {
                $this->view("Admin_layout",[
                    "func"=>"Admin/CrudUser",
                    "page"=>"pages/samples/crud_user",
                    "method"=>$method,
                ]);
            }
            else
            {
                $source=$this->model("user_account");
                $this->view("Admin_layout",[
                    "func"=>"Admin/CrudUser",
                    "page"=>"pages/samples/crud_user",
                    "method"=>$method,
                    "source"=>$source->GetById($username)
                ]);
            }
            
        }
        public function DeleteUser($username)
        {
            $source=$this->model("user_account");
            $source->DeleteUser($username);
            $this->view("Admin_layout",[
                "func"=>"Admin/UserTable",
                "page"=>"pages/tables/user_table",
                "has_paging"=>true,
                "source"=>$source->GetAll(1)
            ]);
        }
        public function UpdateUser($username,$pass,$name,$dob,$email)
        {
            $source=$this->model("user_account");
            $source->EditUser($username,$pass,$name,$dob,$email);
            $this->view("Admin_layout",[
                "func"=>"Admin/UserTable",
                "page"=>"pages/tables/user_table",
                "has_paging"=>true,
                "source"=>$source->GetAll(1)
            ]);
        }
        public function CreateUser($username,$pass,$name,$dob,$email)
        {
            $source=$this->model("user_account");
            $source->CreateUser($username,$pass,$name,$dob,$email);
            $this->view("Admin_layout",[
                "func"=>"Admin/UserTable",
                "page"=>"pages/tables/user_table",
                "has_paging"=>true,
                "source"=>$source->GetAll(1)
            ]);
        }
        public function NovelTable($page){
            //có thể xử lý các hàm lấy dữ liệu từ DB ở đây, sau đó đưa vào list để 
            //truyền vào view
            $source=$this->model("novel");
            // truyền tên master view, page, tham số
            $this->view("Admin_layout",[
                        "func"=>"Admin/NovelTable",
                        "page"=>"pages/tables/novel_table",
                        "has_paging"=>true,
                        "source"=>$source->GetAll($page)
                    ]);
        }
        public function CrudNovel($method,$id)
        {
            if($method=='Create' && $id=='0')
            {
                $this->view("Admin_layout",[
                    "func"=>"Admin/CrudNovel",
                    "page"=>"pages/samples/detail_novel",
                    "method"=>$method
                ]);
            }
            else
            {
                $source=$this->model("novel");
                $this->view("Admin_layout",[
                    "func"=>"Admin/CrudNovel",
                    "page"=>"pages/samples/detail_novel",
                    "method"=>$method,
                    "source"=>$source->GetById($id),
                    "chapter"=>$this->model("chapter")->GetByNovel($id)
                ]);
            }
            
        }

        public function CrudChapter($method,$id)
        {
            if($method=='Create' && $id=='0')
            {
                $this->view("Admin_layout",[
                    "func"=>"Admin/CrudChapter",
                    "page"=>"pages/samples/detail_chapter",
                    "method"=>$method
                ]);
            }
            else
            {
                $source=$this->model("chapter");
                $this->view("Admin_layout",[
                    "func"=>"Admin/CrudChapter",
                    "page"=>"pages/samples/detail_chapter",
                    "method"=>$method,
                    "source"=>$source->GetById($id),
                ]);
            }
            
        }
    }
?>