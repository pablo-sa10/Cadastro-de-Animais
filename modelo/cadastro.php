<?php

include '../includes/conexao.php';
    require_once '../modelo/animal.php';
    require_once '../modelo/AnimalRepositorio.php';

    if($_SERVER(['REQUEST_METHOD'] === 'POST')){

        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];

        $novo = new Animais(null, $nome, $sexo);

        $conexao = new Conexao();
        $conexao->conectar(); // Conecte ao banco de dados
        $pdo = $conexao->getConexao(); // Obtenha a conexão

        $animalRepositorio = new Repositorio($pdo);

        $animalRepositorio->novoAnimal($novo);

        header('Location: index.php');
    };
    