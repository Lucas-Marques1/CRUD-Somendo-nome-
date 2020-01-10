<?php 

class Nome {

    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:dbname=crud;host=localhost", "root", "");
    }

    public function error(){
        echo "<script type='javascript'>alert('Nome não cadastrado!');";
        echo "javascript:window.location='index.php';</script>";
    }

    public function adicionar($nome) {
        
        if ($this->existeNome($nome) == false) {
            date_default_timezone_set('America/Sao_Paulo');
            $date = date("Y-m-d H:i:s");
            $nome = strtoupper($nome);
            $sql = "INSERT INTO nomes (nome, date) values (:nome, :date)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':date', $date);
            $sql->execute();

            return true;

        } else {
            return false;
        }
    }

    public function getAll(){
        $sql = "SELECT * FROM nomes";
        $sql = $this->pdo->query($sql);
        
        if ($sql->rowCount() > 0) {
            return$sql->fetchAll();
        } else {
            return array();
        }
    }

    public function getInfo($id) {
        $sql = "SELECT * FROM nomes WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return $sql->fetch();
        } else {
            return array();
        }

    }

    public function update($nome, $id) {
        if ($this->existeNome($nome)) {
            return false;
        } else {
            date_default_timezone_set('America/Sao_Paulo');
            $date = date("Y-m-d H:i:s");
            $nome = strtoupper($nome);
            $sql = "UPDATE nomes SET nome = :nome, date = :date WHERE id = :id";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':date', $date);
            $sql->bindValue(':id', $id);
            $sql->execute();
        }
       
    }

    public function excluir($id) {
    
        $sql = "DELETE FROM nomes WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
  
    }

    private function existeNome($nome) {
        $sql = "SELECT * FROM nomes WHERE nome = :nome";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':nome', $nome);
        $sql->execute();

        if($sql-> rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

}