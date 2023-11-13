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
<!-----------------------------FORM-ENTRAR-------------------------------------->
    <div class="login">
        <div class="logar">
            <h1>LOGIN</h1>
            <form action="login.php" method="post">
                <input type="email"  name = "email" id="email_usuario" placeholder="Digite seu e-mail" onchange="validateFields()">
                <br>
                <input type="password"  name ="senha" id="senha_usuario" placeholder="Digite sua senha">
                <br>
                <button type="submit" name="submit" id="btn_logar" value="ENTRAR" disabled="true">ENTRAR</button>
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
    <!---------------------------------JAVA SCRIPT--------------------------------------------->
    <script>
        function validateFields() {
            const email = document.getElementById("email_usuario").value;
            if (!email) {
                document.getElementById("btn_logar").disabled = true;
            } else if(validateEmail(email)) {
                document.getElementById("btn_logar").disabled = false;
            } else {
                document.getElementById("btn_logar").disabled = true;
            }
        }
        function isEmailValid(){
            const email = document.getElementById("email_usuario").value;
            if (!email) {
                return validateEmail(email);
            }
        }

  
        function validateEmail(email) {
            return /\S+@\S+\.\S+/.test(email);
        }
    </script>

</body>

</html>