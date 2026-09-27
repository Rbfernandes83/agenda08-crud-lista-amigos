<?php

require_once('verificarAcesso.php');
require_once('conexaoBD.php');
require_once('cabecalho.php');

$id = $_GET['id'] ?? 0;

$sql = "SELECT * FROM amigo WHERE id = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$resultado = $stmt->get_result();
$amigo = $resultado->fetch_assoc();

if (!$amigo) {
    echo "<div class='w3-panel w3-red'>
            <p>Amigo não encontrado.</p>
          </div>";
    exit;
}

?>

<div class="w3-container w3-display-middle w3-center
            w3-card-4 w3-padding w3-round-large"
     style="width:500px;">

    <i class="fa fa-exclamation-triangle w3-text-red"
       style="font-size:80px;"></i>

    <h2 class="w3-text-red">
        Confirmar Exclusão
    </h2>

    <p>Você realmente deseja excluir este amigo?</p>

    <div class="w3-panel w3-light-grey w3-padding">

        <p>
            <b>Nome:</b>
            <?php
            echo htmlspecialchars(
                $amigo['nome'] . ' ' . $amigo['sobrenome']
            );
            ?>
        </p>

        <p>
            <b>E-mail:</b>
            <?php echo htmlspecialchars($amigo['email']); ?>
        </p>

    </div>

    <a href="listar.php"
       class="w3-button w3-grey w3-round-large">

        <i class="fa fa-times"></i>
        Cancelar

    </a>

    <a href="excluirAction.php?id=<?php echo $amigo['id']; ?>"
       class="w3-button w3-red w3-round-large">

        <i class="fa fa-trash"></i>
        Confirmar Exclusão

    </a>

</div>

<?php require_once('rodape.php'); ?>