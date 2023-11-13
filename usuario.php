<!------------CONFIG PHP-------------->

<?php

//sessao iniciada

session_start();

 if ((!isset($_SESSION['email_cliente']) == true ) and (!isset($_SESSION['senha_cliente']) == true )) {

//destruir variavies caso login nao seja valido, enviar para a pagina de login novamente
unset($_SESSION['email_cliente']);
unset($_SESSION['senha_cliente']);
header ('Location:entrar.php');
 } 

 else {
//se tudo estiver correto:

    $logado = $_SESSION['email_cliente'];
 }

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportfy</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <script src="js/script.js" defer></script>
</head>

<body>
<!-----------------------------NAV-BAR-------------------------------------->
    <header>
        <div class="logo">
            <a href="index.html">
            <img src="img/logo_resized (1).png" alt="Logotipo Sportfy">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="index.html">INÍCIO</a></li>
                <li><a href="roupas.html">ROUPAS</a></li>
                <li><a href="equipamentos.html">EQUIPAMENTOS</a></li>
                <li><a href="acessorios.html">ACESSÓRIOS</a></li>
                <li><a href="cadastro.php">CADASTRAR</a></li>
                <li><a href="entrar.php">ENTRAR</a></li>
                <li><a href="sobrenos.html">SOBRE NÓS</a></li>
                <li><a href="contato.html">CONTATO</a></li>
            </ul>
        </nav>
    </header>
<!-----------------------------SESSAO DO USUARIO-------------------------------------->
    <section class="barra_top">
        <div class="barra">
            <h1>Área do aluno</h1>
        </div>
        <div class="barra">
            <a href="sair.php">SAIR</a>
        </div>
    </section>

    <section class="usuario">
        <?php
            echo "<h2>Olá, $logado </h2>"

        ?>
        <p>Seja Bem-Vindo ao Sportfy!</p>
    </section>
<!---------------------------------RODAPE------------------------------------------>
    <footer>
        <div class="rodape">
            
            <ul>
                <li><a href="index.html">INÍCIO</a></li>
                <li><a href="roupas.html">ROUPAS</a></li>
                <li><a href="equipamentos.html">EQUIPAMENTOS</a></li>
                <li><a href="acessorios.html">ACESSÓRIOS</a></li>
                <li><a href="cadastro.php">CADASTRAR</a></li>
                <li><a href="entrar.php">ENTRAR</a></li>
                <li><a href="sobrenos.html">SOBRE NÓS</a></li>
                <li><a href="contato.html">CONTATO</a></li>
            </ul>
            
        </div>

        <div class="rodape"></div>
        <p> Av. Presidente Castelo Branco, Portão 3 - Maracanã </p><br>


        <div class="rodape">
            <p>Siga as nossas redes sociais</p>
            <a href="#"><img src="img/facebook.png" alt="Facebook Sportfy"></a>
            <a href="#"><img src="img/instagram.png" alt="Instagram Sportfy"></a>
            <a href="#"><img src="img/youtube.png" alt="Youtube Sportfy"></a>
        </div>
    </footer>
    <!--------------JAVA SCRIPT---------------->
    

    <!---------------CONFIG PHP--------------->
    <?php

    if (isset($_POST['submit'])) {
        include_once ('conectar.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $clientes = mysqli_query($conexao, "INSERT INTO cadastro_clientes(nome_cliente, email_cliente, senha_cliente) VALUES ('$nome','$email','$senha')");

    }

    ?>
</body>

</html>