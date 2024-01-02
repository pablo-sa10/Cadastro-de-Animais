<?php
    include '../includes/conexao.php';
    require_once '../modelo/animal.php';
    require_once '../modelo/AnimalRepositorio.php';
    
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
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Adicionar Animal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Editar Animal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- formulario -->

    <h1 class="titulo d-flex justify-content-center"> Cadastro do animal </h1>
    <form class="container p-4 border border-3 border-dark">

        <div class="form-group">
            <label for="formGroupExampleInput">Animal</label>
            <input type="text" class="form-control mb-2" id="formGroupExampleInput" placeholder="Example input">
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
                Macho
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label mb-4" for="exampleRadios2">
                Fêmea
            </label>
        </div>

        <input type="submit" value="Enviar" class="btn btn-dark"></input>

    </form>

</body>

</html>