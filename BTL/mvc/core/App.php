<?php
    class App{
        protected $route="User";
        protected $controller="Home";
        protected $action="Index";
        protected $params=[];
        function __construct()
        {
            $arr=$this->UrlProcess();
            //xử lý controller
            if(isset($arr[1]))
            {
                if(file_exists("./mvc/controllers/".$arr[0].".php"))
                {
                    $this->controller=$arr[0];
                    unset($arr[0]);
                }
            }
            require_once "./mvc/controllers/".$this->controller.".php";
            //xử lý action
            if(isset($arr[1]))
            {
                if(method_exists($this->controller,$arr[1]))
                {
                    $this->action=$arr[1];
                    unset($arr[1]);
                }
            }
            //Xử lý param
            $this->params=$arr?array_values($arr):[];
            $this->controller=new $this->controller;
            call_user_func_array([$this->controller,$this->action],$this->params);
            
        }
        function UrlProcess()
        {
            if(isset($_GET["url"]))
            {
                return explode("/",filter_var(trim($_GET["url"],"/")));
            }
        }
    }
?>