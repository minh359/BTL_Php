<?php
    class Home extends Controller{
        public function Index(){
        }
        public function Show($name){
            //có thể xử lý các hàm lấy dữ liệu từ DB ở đây, sau đó đưa vào list để 
            //truyền vào view
            $source=$this->model("user_account");
            // truyền tên master view, page, tham số
            $this->view("User_layout",["page"=>"contact",
                        "class"=>$source->GetAll()
                    ]);
            
        }
    }
?>