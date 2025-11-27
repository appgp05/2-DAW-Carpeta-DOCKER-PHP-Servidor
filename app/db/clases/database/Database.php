<?php
namespace clases\database;

use mysqli;

class Database {
    private static ?Database $instance = null;
    private ?mysqli $con;
    private string $hostname;
    private string $username;
    private string $password;
    private string $database;

    private function __construct(
    ) {
        $this->hostname = $_ENV["DB_HOST"];
        $this->username = $_ENV["DB_USER"];
        $this->password = $_ENV["DB_PASSWORD"];
        $this->database = $_ENV["DB_NAME"];

        try {
            $this->con = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        } catch(mysqli_sql_exception $e) {
            $this->con = null;
            die ("Error: ".$e->getMessage()."</br>");
        }
    }

    public static function getInstance(): Database {
        if(self::$instance ==null){
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getCon(): ?mysqli
    {
        return $this->con;
    }

    public function getAllTables(){
        $sentencia = "show tables";
        $res = $this->con->query($sentencia);
        $fila = $res->fetch_row();

        $tables = [];

        while($fila){
            $tables[] = $fila[0];
            $fila = $res->fetch_row();
        }

        return $tables;
    }

    public function getTableRows(string $tabla){
        $sentencia = "SELECT * FROM $tabla";
        $res = $this->con->query($sentencia);
        $filas = [];
        $fila = $res->fetch_row();
        while($fila){
            $filas[] = $fila;
            $fila = $res->fetch_row();
        }

        return $filas;
    }
}

?>
