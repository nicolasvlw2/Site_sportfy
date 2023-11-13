<?php

//criar sessão

session_start();


//destruindo variaveis quando sessao é encerrada!

unset($_SESSION['email_cliente']);
unset($_SESSION['senha_cliente']);

//direcionando para a pagina principal apos sessao encerrada

header('Location:index.html')

?>