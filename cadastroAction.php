<?php

require_once('verificarAcesso.php');
require_once('conexaoBD.php');

$nome = $_POST['txtNome'] ?? '';
$sobrenome = $_POST['txtSobrenome'] ?? '';
$email = $_POST['txtEmail'] ?? '';

if (empty($nome) || empty($sobrenome) || empty($email)) {
    header("Location: cadastro.php");
    exit;
}

$sql = "INSERT INTO amigo (nome, sobrenome, email)
        VALUES (?, ?, ?)";

$stmt = $conexao->prepare($sql);

$stmt->bind_param(
    "sss",
    $nome,
    $sobrenome,
    $email
);

if ($stmt->execute()) {

    header("Location: listar.php?cadastro=sucesso");
    exit;

} else {

    echo "Erro ao cadastrar amigo: " . $stmt->error;

}

?>