<?php
class Conexion{
    private $connection;
    private $host;
    private $username;
    private $password;
    private $db;
    private $port;
    private $server;

    public function __construct()
    {
        $this-> server = $_SERVER['HTTP_HOST'];
        $this-> connection = null;
        $this-> port = 3306;
        $this-> db="ciisa_backend_71";
        $this-> host="localhost";
        
        if ($this->server =='localhost'){
            $this-> username = 'ciisa_backend_71';
            $this-> password = 'ciisa';
        }
    }

    public function getConnection(){
        $this-> connection = mysqli_connect($this->host, $this->username, $this->password, $this->bd,$this->port );
        mysqli_set_charset($this->connection, "utf8");
        if(!$this->connection){
            return mysqli_connect_errno(){

            }
            retunr $this-> connection;
        }

        public function closeConnection(){
            mysqli_close($this->connection);
        }
    }
}