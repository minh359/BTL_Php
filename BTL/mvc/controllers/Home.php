<?php
    class Home extends Controller{
        public function Index(){
        }
        public function Show($page){
            //có thể xử lý các hàm lấy dữ liệu từ DB ở đây, sau đó đưa vào list để 
            //truyền vào view
            $source=$this->model("user_account");
            // truyền tên master view, page, tham số
            $this->view("User_layout",[
                        "func"=>"Home/Show",
                        "page"=>"Index",
                        "source"=>$source->GetAll($page)
                    ]);
            
        }
        public function Novel(){
            //có thể xử lý các hàm lấy dữ liệu từ DB ở đây, sau đó đưa vào list để 
            //truyền vào view
            $source=$this->model("user_account");
            // truyền tên master view, page, tham số
            $this->view("User_layout",[
                        "func"=>"Home/Novel",
                        "page"=>"Truyen",
                    ]);
            
        }
        public function Chapter(){
            //có thể xử lý các hàm lấy dữ liệu từ DB ở đây, sau đó đưa vào list để 
            //truyền vào view
            $source=$this->model("user_account");
            // truyền tên master view, page, tham số
            $this->view("User_layout",[
                        "func"=>"Home/Chapter",
                        "page"=>"Chapter",
                    ]);
            
        }
    }
?>