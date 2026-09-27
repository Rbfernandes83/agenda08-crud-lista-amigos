<?php

require_once('verificarAcesso.php');
require_once('conexaoBD.php');

$id = $_POST['id'] ?? 0;
$nome = $_POST['txtNome'] ?? '';
$sobrenome = $_POST['txtSobrenome'] ?? '';
$email = $_POST['txtEmail'] ?? '';

if (
    empty($id) ||
    empty($nome) ||
    empty($sobrenome) ||
    empty($email)
) {
    header("Location: listar.php");
    exit;
}

$sql = "UPDATE amigo
        SET nome = ?, sobrenome = ?, email = ?
        WHERE id = ?";

$stmt = $conexao->prepare($sql);

$stmt->bind_param(
    "sssi",
    $nome,
    $sobrenome,
    $email,
    $id
);

if ($stmt->execute()) {

    header("Location: listar.php?edicao=sucesso");
    exit;

} else {

    echo "Erro ao atualizar amigo: " . $stmt->error;

}

?>