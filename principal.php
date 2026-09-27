<?php require_once('verificarAcesso.php'); ?>
<?php require_once('cabecalho.php'); ?>

<div class="w3-container w3-padding">

    <div class="w3-bar">

        <span class="w3-bar-item">
            Usuário:
            <b>
                <?php echo htmlspecialchars($_SESSION['logado']); ?>
            </b>
        </span>

        <a href="logoutAction.php"
           class="w3-bar-item w3-button
                  w3-red w3-right w3-round-large">

            <i class="fa fa-sign-out"></i>
            Logout
        </a>

    </div>

</div>

<div class="w3-padding w3-text-grey
            w3-half w3-display-middle w3-center">

    <h1 class="w3-teal w3-round-large w3-padding">
        Projeto Lista de Amigos
    </h1>

    <div class="w3-row">

        <div class="w3-col w3-button
                    w3-teal w3-round-large"
             style="width:45%;">

            <a href="cadastro.php"
               style="text-decoration:none;">

                <i class="fa fa-user-plus"
                   style="font-size:8em"></i>

                <p style="font-size:2em;">
                    Adicionar
                </p>

            </a>

        </div>

        <div class="w3-col w3-button
                    w3-teal w3-round-large w3-right"
             style="width:45%;">

            <a href="listar.php"
               style="text-decoration:none;">

                <i class="fa fa-vcard-o"
                   style="font-size:8em"></i>

                <p style="font-size:2em;">
                    Listar
                </p>

            </a>

        </div>

    </div>

</div>

<?php require_once('rodape.php'); ?>