<?php

require_once('verificarAcesso.php');
require_once('conexaoBD.php');
require_once('cabecalho.php');

$sql = "SELECT * FROM amigo ORDER BY id ASC";
$resultado = $conexao->query($sql);

?>

<div class="w3-container w3-padding">

    <a href="principal.php"
       class="w3-button w3-teal w3-round-large">

        <i class="fa fa-arrow-left"></i>
        Voltar

    </a>

    <a href="cadastro.php"
       class="w3-button w3-green w3-round-large">

        <i class="fa fa-user-plus"></i>
        Novo Amigo

    </a>

    <h2 class="w3-text-teal w3-center">
        Lista de Amigos
    </h2>

</div>

<div class="w3-container"
     style="max-width:1000px; margin:auto;">

<?php if (isset($_GET['cadastro'])): ?>

    <div class="w3-panel w3-green w3-round-large">
        <p>
            <i class="fa fa-check"></i>
            Amigo cadastrado com sucesso!
        </p>
    </div>

<?php endif; ?>

<?php if (isset($_GET['edicao'])): ?>

    <div class="w3-panel w3-blue w3-round-large">
        <p>
            <i class="fa fa-check"></i>
            Amigo atualizado com sucesso!
        </p>
    </div>

<?php endif; ?>

<?php if (isset($_GET['exclusao'])): ?>

    <div class="w3-panel w3-red w3-round-large">

        <p>
            <i class="fa fa-check"></i>
            Amigo excluído com sucesso!
        </p>

    </div>

<?php endif; ?>
<table class="w3-table-all w3-card-4">

    <tr class="w3-teal">

        <th>ID</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>E-mail</th>
        <th>Ações</th>

    </tr>

    <?php while ($amigo = $resultado->fetch_assoc()): ?>

        <tr>

            <td>
                <?php echo $amigo['id']; ?>
            </td>

            <td>
                <?php echo htmlspecialchars($amigo['nome']); ?>
            </td>

            <td>
                <?php echo htmlspecialchars($amigo['sobrenome']); ?>
            </td>

            <td>
                <?php echo htmlspecialchars($amigo['email']); ?>
            </td>

            <td>

                <a
                    href="editar.php?id=<?php echo $amigo['id']; ?>"
                    class="w3-button w3-blue w3-round">

                    <i class="fa fa-edit"></i>
                    Editar

                </a>

                <a
                    href="excluir.php?id=<?php echo $amigo['id']; ?>"
                    class="w3-button w3-red w3-round">

                    <i class="fa fa-trash"></i>
                    Excluir

                </a>

            </td>

        </tr>

    <?php endwhile; ?>

</table>

</div>

<?php require_once('rodape.php'); ?>