<?php 
    class DB{
        public $conn;
        protected $servername='localhost';
        protected $username='root';
        protected $password='';
        protected $dbname='db_webnovel';
        function __construct()
        {
            $this->conn=mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
            mysqli_select_db($this->conn,$this->dbname);
            mysqli_query($this->conn,"SET NAMES 'utf8' ");
        }
    }

?>