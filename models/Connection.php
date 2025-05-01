<?php
class Connection{
    protected $connection = null;
    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $db = "tienda_online";
    public $port = 3306;

    protected function connect() {
        try{
            $this->connection = mysqli_connect($this->host,$this->user,$this->password,$this->db,$this->port);
        }catch (Exception $e) {
            error_log($e->getMessage()); 
            header('Location: ../controllers/404.php');
            exit();
        }
    }
}
?>