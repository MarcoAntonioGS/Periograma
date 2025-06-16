<?php

class MySQL extends PDO {
    private $host     = "localhost";
    private $usuario  = "usuario_app";
    private $senha    = "minhaSenha123";
    private $db       = "Formulariologin";

    public function __construct()
    {
        // data source name
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db;

        // PHP Data Object
        return parent::__construct($dsn, $this->usuario, $this->senha);
 
    }
}
?>
    