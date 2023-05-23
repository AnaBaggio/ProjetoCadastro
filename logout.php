<?php
    include ('criasessao.php');
    // limpa as variáveis da sessão
    session_unset();
    // destrói a sessão
    session_destroy();
    // volta para a página inicial
    header('Location: index.php');
?>