<?php session_start(); ?>

<h1>Login</h1>
    <?php if (isset($_SESSION["error"])): ?>
        <p class="alert-error">
            <?php echo $_SESSION["error"];
            unset($_SESSION["error"]); ?>
        </p>
    <?php endif; ?>
<form method="post" action="actions/login.php"> <!--criação do formulario -->
    Nome: <input type="text" name="name" required><br> <!-- Campo que vai requisitar o nome do cliente -->

    E-mail: <input type="email" name="email" required><br> <!-- Campo que vai requisitar o email -->

    Senha: <input type="password" name="password" required><br> <!-- Campo que vai requisitar a palavra pass -->

    <div class="buttons">
        <input type="submit" value="Entrar"> <!-- O botão para fazer login -->

        <a href="?p=inscrever">Ainda não és inscrito?<br>Inscreve-te!!</a> <!-- Caminho para a pagina de inscrições -->
    </div>

</form>