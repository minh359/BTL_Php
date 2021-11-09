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
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
        public function CrudNovel($method,$id,$page)
        {
            if($method=='Create' && $id=='0' && $page='0')
            {
                $this->view("Admin_layout",[
                    "func"=>"Admin/CrudNovel",
                    "page"=>"pages/samples/detail_novel",
                    "method"=>$method
                ]);
            }
            else
            {
                $s="Admin/CrudNovel/".$method."/".$id;
                $source=$this->model("novel");
                $this->view("Admin_layout",[
                    "func"=>$s,
                    "page"=>"pages/samples/detail_novel",
                    "method"=>$method,
                    "novel"=>$source->GetById($id),
                    "has_paging"=>true,
                    "category"=>$this->model("category")->GetById($id),
                    "author"=>$this->model("author")->GetById($id),
                    "source"=>$this->model("chapter")->GetByNovel($id,$page)
                ]);
            }
            
        }
        public function DeleteNovel($id)
        {
            $source=$this->model("novel");
            $source->DeleteNovel($id);
            $this->view("Admin_layout",[
                "func"=>"Admin/NovelTable",
                "page"=>"pages/tables/novel_table",
                "has_paging"=>true,
                "source"=>$source->GetAll(1)
            ]);
        }
        public function UpdateNovel($id,$name,$description,$avatar,$author_id,$category_id)
        {
            $source=$this->model("novel");
            $source->UpdateNovel($id,$name,$description,$avatar,$author_id,$category_id);
            $this->view("Admin_layout",[
                "func"=>"Admin/NovelTable",
                "page"=>"pages/tables/novel_table",
                "has_paging"=>true,
                "source"=>$source->GetAll(1)
            ]);
        }
        public function CreateNovel($name,$description,$avatar,$author_id,$category_id)
        {
            $source=$this->model("novel");
            $source->CreateNovel($name,$description,$avatar,$author_id,$category_id);
            $this->view("Admin_layout",[
                "func"=>"Admin/NovelTable",
                "page"=>"pages/tables/novel_table",
                "has_paging"=>true,
                "source"=>$source->GetAll(1)
            ]);
        }
         /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
        public function CrudChapter($method,$novel_id,$id)
        {
            if($method=='Create' && $id=='0')
            {
                $this->view("Admin_layout",[
                    "func"=>"Admin/CrudChapter",
                    "page"=>"pages/samples/detail_chapter",
                    "method"=>$method,
                    "novel"=>$novel_id
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
                    // "novel"=>$this->model("novel")->GetById($id),
                    "novel"=>$novel_id
                ]);
            }
            
        }
        public function DeleteChapter($id)
        {
            $source=$this->model("chapter");
            $source->DeleteChapter($id);
            $source2=$this->model("novel");
                $this->view("Admin_layout",[
                    "func"=>"Admin/CrudNovel",
                    "page"=>"pages/samples/detail_novel",
                    "method"=>"view",
                    "source"=>$source2->GetById($id),
                    "chapter"=>$this->model("chapter")->GetByNovel($id)
                ]);
        }
        public function UpdateChapter($id,$chapter_number,$image,$content,$novel_id)
        {
            $source=$this->model("chapter");
            $source->UpdateChapter($id,$chapter_number,$image,$content,$novel_id);
            $source2=$this->model("novel");
                $this->view("Admin_layout",[
                    "func"=>"Admin/CrudNovel",
                    "page"=>"pages/samples/detail_novel",
                    "method"=>"view",
                    "source"=>$source2->GetById($novel_id),
                    "chapter"=>$this->model("chapter")->GetByNovel($novel_id)
                ]);
        }
        public function CreateChapter($chapter_number,$image,$content,$novel_id)
        {
            $source=$this->model("chapter");
            $source->CreateChapter($chapter_number,$image,$content,$novel_id);
            $source2=$this->model("novel");
                $this->view("Admin_layout",[
                    "func"=>"Admin/CrudNovel",
                    "page"=>"pages/samples/detail_novel",
                    "method"=>"view",
                    "source"=>$source2->GetById($novel_id),
                    "chapter"=>$this->model("chapter")->GetByNovel($novel_id)
                ]);
        }
    }
?>