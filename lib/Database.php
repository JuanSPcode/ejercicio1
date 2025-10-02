<?php
namespace lib;

class Database{
    private $host = "";
    private $dbname = "";
    private $user = "";
    private $pwd ="";

    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new \PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->pwd);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
?>