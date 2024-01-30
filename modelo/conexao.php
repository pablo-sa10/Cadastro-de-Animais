<?php
class Conexao{
    private $servidor = "sqlsrv:Server=TAR221\\TARAMPS;Database=animais";
    private $username = "sa";
    private $senha = "@TAR2023";
    private $conn;

    public function conectar(){
            try{
            $this->conn = new PDO($this->servidor, 
                            $this->username,
                            $this->senha);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            die("Erro de Conexão " . $e->getMessage());
        }
    }

    public function getConexao(){
        if (!$this->conn) {
            $this->conectar();
        }
        return $this->conn;
    }
}
/* $conexao = array(
    "Database" => "Animais",
    "Uid" => "sa",
    "PWD" => "@TAR2023"
);

$conn = sqlsrv_connect($servidor, $conexao);

if(!$conn){
    die(print_r(sqlsrv_errors(), true));
} */
