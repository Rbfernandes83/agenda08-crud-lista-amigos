<?php require_once('verificarAcesso.php'); ?>
<?php require_once('cabecalho.php'); ?>

<div class="w3-container w3-padding">

    <a href="principal.php"
       class="w3-button w3-teal w3-round-large">
        <i class="fa fa-arrow-left"></i>
        Voltar
    </a>

    <h2 class="w3-text-teal w3-center">
        Cadastro de Amigos
    </h2>

</div>

<div class="w3-container w3-card-4 w3-light-grey
            w3-round-large w3-padding"
     style="max-width:600px; margin:auto;">

    <form action="cadastroAction.php" method="post">

        <label><b>Nome</b></label>

        <input
            class="w3-input w3-border w3-margin-bottom"
            type="text"
            name="txtNome"
            placeholder="Digite o nome"
            required>

        <label><b>Sobrenome</b></label>

        <input
            class="w3-input w3-border w3-margin-bottom"
            type="text"
            name="txtSobrenome"
            placeholder="Digite o sobrenome"
            required>

        <label><b>E-mail</b></label>

        <input
            class="w3-input w3-border w3-margin-bottom"
            type="email"
            name="txtEmail"
            placeholder="Digite o e-mail"
            required>

        <button
            class="w3-button w3-teal w3-block
                   w3-round-large w3-padding"
            type="submit">

            <i class="fa fa-save"></i>
            Cadastrar Amigo

        </button>

    </form>

</div>

<?php require_once('rodape.php'); ?>