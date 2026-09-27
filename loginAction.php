<?php

session_start();

require_once('conexaoBD.php');

$nome = $_POST['txtNome'] ?? '';
$senha = $_POST['txtSenha'] ?? '';

$sql = "SELECT * FROM usuario WHERE nome = ?";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $nome);
$stmt->execute();

$resultado = $stmt->get_result();
$usuario = $resultado->fetch_assoc();

if ($usuario && $usuario['senha'] === $senha) {

    $_SESSION['logado'] = $usuario['nome'];

    header("Location: principal.php");
    exit;

} else {

    header("Location: index.php?erro=1");
    exit;
}

?>