<?php
//Inicie a sessão
session_start();

//Destrua todas as variaveis de sessão
$_SESSION = array();

//Se desejar destruir completamente a sessão, descomente a linha abaixo
// session_destroy();

//Redirecione para a página de login após o logout
header("Location: index.html");
exit();
?>