<?php
 class Animais{
    private $id;
    private $nome;
    private $sexo;

    public function __construct($id, $nome, $sexo)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->sexo = $sexo;
    }

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getSexo(){
        return $this->sexo;
    }
 }
?>