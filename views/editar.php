<?php
include '../includes/conexao.php';
require_once '../modelo/animal.php';
require_once '../modelo/AnimalRepositorio.php';

$conexao = new Conexao();
$conexao->conectar(); // Conecte ao banco de dados
$pdo = $conexao->getConexao(); // Obtenha a conexão


