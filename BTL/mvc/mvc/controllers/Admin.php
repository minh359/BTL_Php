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
        public function CrudUser($username)
        {
            $source=$this->model("user_account");
            $this->view("Admin_layout",[
                "func"=>"Admin/CrudUser",
                "page"=>"pages/samples/blank-page",
                "source"=>$source->GetById($username)
            ]);
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
    }
?>