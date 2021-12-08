<?php
    class Admin extends Controller{
        
        public function IsLoged(){
            if(isset($_SESSION["admin"]))
            {
                return true;
            }
            return false;
        }
        public function Login(){
            $_SESSION["admin"]="ok";
            $this->Index();
        }
        public function LogOut(){
            $_SESSION["admin"]=null;
            $this->Index();
        }
        public function Index(){
            if($this->IsLoged())
            {
                $this->view("Admin_layout",["page"=>"partials/_devinfo"]);
            }
            else
            {
                $this->view("Admin_pages/pages/samples/login",[]);
            }
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
            if($method=='Create' && $id=='0' && $page=='0')
            {
                $this->view("Admin_layout",[
                    "func"=>"Admin/CrudNovel",
                    "page"=>"pages/samples/detail_novel",
                    "method"=>$method,
                    "author"=>$this->model("author")->GetAllAuthor(),
                    "category"=>$this->model("category")->GetAllCategory(),
                    "chapter"=>$this->model("chapter")->GetById('17')
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
                    "author"=>$this->model("author")->GetAllAuthor(),
                    "category"=>$this->model("category")->GetAllCategory(),
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
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function AuthorTable($page){
            //có thể xử lý các hàm lấy dữ liệu từ DB ở đây, sau đó đưa vào list để 
            //truyền vào view
            $source=$this->model("author");
            // truyền tên master view, page, tham số
            $this->view("Admin_layout",[
                        "func"=>"Admin/AuthorTable",
                        "page"=>"pages/tables/author_table",
                        "has_paging"=>true,
                        "source"=>$source->GetAll($page)
                    ]);
        }
        public function CrudAuthor($method,$id)
        {
            if($method=='Create' && $id=='0')
            {
                $this->view("Admin_layout",[
                    "func"=>"Admin/CrudAuthor",
                    "page"=>"pages/samples/crud_author",
                    "method"=>$method,
                ]);
            }
            else
            {
                $source=$this->model("author");
                $this->view("Admin_layout",[
                    "func"=>"Admin/CrudAuthor",
                    "page"=>"pages/samples/crud_author",
                    "method"=>$method,
                    "source"=>$source->GetById($id)
                ]);
            }
            
        }

        public function DeleteAuthor($id)
        {
            $source=$this->model("author");
            $source->DeleteAuthor($id);
            $this->view("Admin_layout",[
                "func"=>"Admin/AuthorTable",
                "page"=>"pages/tables/author_table",
                "has_paging"=>true,
                "source"=>$source->GetAll(1)
            ]);
        }
        public function UpdateAuthor($id,$name)
        {
            $source=$this->model("author");
            $source->EditAuthor($id,$name);
            $this->view("Admin_layout",[
                "func"=>"Admin/AuthorTable",
                "page"=>"pages/tables/author_table",
                "has_paging"=>true,
                "source"=>$source->GetAll(1)
            ]);
        }
        public function CreateAuthor($id,$name)
        {
            $source=$this->model("author");
            $source->CreateUser($id,$name);
            $this->view("Admin_layout",[
                "func"=>"Admin/AuthorTable",
                "page"=>"pages/tables/author_table",
                "has_paging"=>true,
                "source"=>$source->GetAll(1)
            ]);
        }
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function CategoryTable($page){
            //có thể xử lý các hàm lấy dữ liệu từ DB ở đây, sau đó đưa vào list để 
            //truyền vào view
            $source=$this->model("category");
            // truyền tên master view, page, tham số
            $this->view("Admin_layout",[
                        "func"=>"Admin/CategoryTable",
                        "page"=>"pages/tables/category_table",
                        "has_paging"=>true,
                        "source"=>$source->GetAll($page)
                    ]);
        }
        public function CrudCategory($method,$id)
        {
            if($method=='Create' && $id=='0')
            {
                $this->view("Admin_layout",[
                    "func"=>"Admin/CrudCategory",
                    "page"=>"pages/samples/crud_category",
                    "method"=>$method,
                ]);
            }
            else
            {
                $source=$this->model("category");
                $this->view("Admin_layout",[
                    "func"=>"Admin/CrudCategory",
                    "page"=>"pages/samples/crud_category",
                    "method"=>$method,
                    "source"=>$source->GetById($id)
                ]);
            }
            
        }

        public function DeleteCategory($id)
        {
            $source=$this->model("category");
            $source->DeleteCategory($id);
            $this->view("Admin_layout",[
                "func"=>"Admin/AuthorTable",
                "page"=>"pages/tables/category_table",
                "has_paging"=>true,
                "source"=>$source->GetAll(1)
            ]);
        }
        public function UpdateCategory($id,$name)
        {
            $source=$this->model("category");
            $source->EditCategory($id,$name);
            $this->view("Admin_layout",[
                "func"=>"Admin/CategoryTable",
                "page"=>"pages/tables/category_table",
                "has_paging"=>true,
                "source"=>$source->GetAll(1)
            ]);
        }
        public function CreateCategory($id,$name)
        {
            $source=$this->model("category");
            $source->CreateCategory($id,$name);
            $this->view("Admin_layout",[
                "func"=>"Admin/CategoryTable",
                "page"=>"pages/tables/category_table",
                "has_paging"=>true,
                "source"=>$source->GetAll(1)
            ]);
        }
    }
?>