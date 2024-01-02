<?php

include '../includes/conexao.php';
require_once '../modelo/animal.php';
require_once '../modelo/animalRepositorio.php';

$conexao = new Conexao();
$conexao->conectar(); // Conecte ao banco de dados
$pdo = $conexao->getConexao(); // Obtenha a conexão

$animalRepositorio = new Repositorio($pdo);
$dadosAnimais = $animalRepositorio->getAnimal();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" class="c">
</head>

<body>

    <nav class="navbar navbar-expand-lg cor mb-3">
        <div class="conatiner row">

            <img class="img" src="./img/logo.png" alt="Logo do site">

            <div class="collapse navbar-collapse col-md-4 d-flex" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Adiconar Animal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Editar Animal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Animal</th>
                    <th scope="col">Sexo</th>
                    <th class="w-20" scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($dadosAnimais as $dados): ?>
                <tr>
                    <th scope="row"><?= $dados->getId()?></th>
                    <td><?= $dados->getNome()?></td>
                    <td><?= $dados->getSexo()?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>