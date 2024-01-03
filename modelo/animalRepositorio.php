<?php

class Repositorio{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    private function objeto($dados){
        return new Animais
        ($dados['id'],
        $dados['nome'],
        $dados['sexo']
        );
    }

    public function getAnimal(){
        $sql = "SELECT * FROM Animais";
        $statement = $this->pdo->query($sql);
        $animais = $statement->fetchAll(PDO::FETCH_ASSOC);

        $dadosAnimais = array_map(function($animal){
            return $this->objeto($animal);
        }, $animais);

        return $dadosAnimais;
    }

    public function novoAnimal(Animais $animal){
        $sql2 = "INSERT INTO Animais (nome, sexo) VALUES (?, ?)";
        $statement = $this->pdo->prepare($sql2);
        $statement->bindValue(1, $animal->getNome());
        $statement->bindValue(2, $animal->getSexo());
        $statement->execute();
    }
}