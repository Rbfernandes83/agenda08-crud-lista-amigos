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

<div class="w3-container w3-padding">

    <a href="listar.php"
       class="w3-button w3-teal w3-round-large">

        <i class="fa fa-arrow-left"></i>
        Voltar

    </a>

    <h2 class="w3-text-teal w3-center">
        Editar Amigo
    </h2>

</div>

<div class="w3-container w3-card-4 w3-light-grey
            w3-round-large w3-padding"
     style="max-width:600px; margin:auto;">

    <form action="editarAction.php" method="post">

        <input
            type="hidden"
            name="id"
            value="<?php echo $amigo['id']; ?>">

        <label><b>Nome</b></label>

        <input
            class="w3-input w3-border w3-margin-bottom"
            type="text"
            name="txtNome"
            value="<?php echo htmlspecialchars($amigo['nome']); ?>"
            required>

        <label><b>Sobrenome</b></label>

        <input
            class="w3-input w3-border w3-margin-bottom"
            type="text"
            name="txtSobrenome"
            value="<?php echo htmlspecialchars($amigo['sobrenome']); ?>"
            required>

        <label><b>E-mail</b></label>

        <input
            class="w3-input w3-border w3-margin-bottom"
            type="email"
            name="txtEmail"
            value="<?php echo htmlspecialchars($amigo['email']); ?>"
            required>

        <button
            class="w3-button w3-blue w3-block
                   w3-round-large w3-padding"
            type="submit">

            <i class="fa fa-save"></i>
            Salvar Alterações

        </button>

    </form>

</div>

<?php require_once('rodape.php'); ?>