<?php require_once('cabecalho.php'); ?>

<div class="w3-container w3-round-xxlarge
            w3-display-middle w3-card-4 w3-third">

    <div class="w3-center w3-padding">
        <h2 class="w3-text-teal">
            Lista de Amigos
        </h2>

        <i class="fa fa-users w3-text-teal"
           style="font-size:100px"></i>
    </div>

    <form class="w3-container"
          action="loginAction.php"
          method="post">

        <div class="w3-section">

            <label><b>Usuário</b></label>

            <input
                class="w3-input w3-border w3-margin-bottom"
                type="text"
                placeholder="Digite seu usuário"
                name="txtNome"
                required>

            <label><b>Senha</b></label>

            <input
                class="w3-input w3-border"
                type="password"
                placeholder="Digite sua senha"
                name="txtSenha"
                required>

            <button
                class="w3-button w3-block w3-teal
                       w3-section w3-padding"
                type="submit">

                <i class="fa fa-sign-in"></i>
                Entrar

            </button>

        </div>

    </form>

</div>

<?php require_once('rodape.php'); ?>