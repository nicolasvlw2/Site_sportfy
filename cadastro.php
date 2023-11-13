<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportfy</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
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
<!-----------------------------FORM-CADASTRO-------------------------------------->
    <div class="cadastro">
            <div class="cad" id="cadastro">
                <h1>CADASTRO DE CLIENTES</h1>
                <form action="#" method="post" id="form">
                    <input type="text" id='nome' name="nome" placeholder="digite seu nome" onchange="validateFieldName()">

                    <input type="email" id="email" name="email" placeholder="digite seu email" onchange="validateFields()">

                    <input type="password" id="senha" name="senha" placeholder="digite sua senha segura">
                    
                    <button type="submit" id="button" name="submit" value="CADASTRAR" disabled="true">CADASTRAR</button>
                </form>
            </div>
    </div>
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
    <script>
        function validateFields() {
            const email = document.getElementById("email").value;
            
            if (!email) {
                document.getElementById("button").disabled = true;
            } else if(validateEmail(email)) {
                document.getElementById("button").disabled = false;
            } else {
                document.getElementById("button").disabled = true;
            }
        }
        function validateFieldName() {
            const name = document.getElementById("nome").value;
            
            if (!name) {
                document.getElementById("button").disabled = true;
            } else if(validateName(name)) {
                document.getElementById("button").disabled = false;
            } else {
                document.getElementById("button").disabled = true;
            }
        }
  
        function validateEmail(email) {
            return /\S+@\S+\.\S+/.test(email);
        }
        function validateName(name) {
            return /\S+@\S+\.\S+/.test(name);
        }
    </script>

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