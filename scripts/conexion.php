<?php
    
    class Conexion{
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "escuelatortuga";
        private $conect;

        public function __construct(){
            $connectionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
            try{
                $this->connect = new PDO($connectionString,$this->user,$this->password);
                $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                //echo"Siiii";
            }catch (Exception $e){
                $this->connect = 'Error de conexion';
                echo "Error: ".$e->getMessage();
            }
        }

        public function connect(){
            return $this->connect;
        }
    }

   // $conect = new Conexion();




?>