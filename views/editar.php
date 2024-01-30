<?php
include '../modelo/conexao.php';
require_once '../modelo/animal.php';
require_once '../modelo/AnimalRepositorio.php';

$conexao = new Conexao();
$conexao->conectar(); // Conecte ao banco de dados
$pdo = $conexao->getConexao(); // Obtenha a conexão

$animalRepositroio = new Repositorio($pdo);

if (isset($_FILES['editar'])) {
    $animal = new Animais($_POST['id'],
        $_POST['nome'],
        $_POST['sexo']
    );

    $animalRepositroio->atualizar($animal);
    header("Location: index.php");
}else{ 
    $animal = $animalRepositroio->buscar($_GET['id']);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" class="css">
</head>


<body>

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg cor mb-3">
        <div class="conatiner row">

            <img class="img" src="./img/logo.png" alt="Logo do site">

            <div class="collapse navbar-collapse col-md-4 d-flex" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formulario.php">Adicionar Animal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Editar Animal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- formulario -->

    <h1 class="titulo d-flex justify-content-center"> Edição do animal </h1>
    <form method="post" class="container p-4 border border-3 border-dark">

        <div class="form-group">
            <label for="nome">Animal</label>
            <input name="nome" type="text" class="form-control mb-2" id="nome" placeholder="Example input" value="<?=$animal->getNome()?>"required>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Macho" <?= $animal->getSexo() == "Macho"? "checked" : "" ?>checked>
            <label class="form-check-label" for="sexo">
                Macho
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Fêmea" <?= $animal->getSexo() == "Fêmea"? "checked" : "" ?>>
            <label class="form-check-label mb-4" for="sexo">
                Fêmea
            </label>
        </div>

        <input type="hidden" name="id" value="<?= $animal->getId()?>">
        <input name="editar" type="submit" value="Editar" class="btn btn-dark"></input>

    </form>

</body>

</html>