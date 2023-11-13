<?php

    session_start(); //sessao iniciada



    //verificação de ação//

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    //campo preenchido

        include_once('conectar.php');

    //variavel de armazenamento

        $email = $_POST['email'];
        $senha = $_POST['senha'];

    //verificando dados no banco 

        $sql =" SELECT * FROM cadastro_clientes WHERE email_cliente = '$email' and senha_cliente ='$senha' ";

        $verificar = $conexao -> query($sql);

    //verificar se é valido

    if(mysqli_num_rows ($verificar) < 1 ){

    //caso nao seja valido usuario enviado para pagina de login novamente
        unset($_SESSION['email_cliente']);
        unset($_SESSION['senha_cliente']);
        header('Location:entrar.php');
    } else {

    //caso seja valido, usuario enviado para pagina de usuario 
        $_SESSION['email_cliente'] = $email;
        $_SESSION['senha_cliente'] = $senha;

        header('Location:usuario.php');
    }

    }
    //campo não preenchido
    else {
        header ('location:entrar.php');
    }





?>