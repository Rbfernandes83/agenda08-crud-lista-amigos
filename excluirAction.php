<?php

require_once('verificarAcesso.php');
require_once('conexaoBD.php');

$id = $_GET['id'] ?? 0;

if (empty($id)) {
    header("Location: listar.php");
    exit;
}

$sql = "DELETE FROM amigo WHERE id = ?";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {

    header("Location: listar.php?exclusao=sucesso");
    exit;

} else {

    echo "Erro ao excluir amigo: " . $stmt->error;

}

?>