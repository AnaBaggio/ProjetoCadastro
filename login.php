<?php
    include('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM USUARIO
            WHERE   email_usuario = '$email'
            AND senha = '$senha'";
    
    $result = mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    if($rowcount > 0){
        include('criasessao.php');
        // array comn os dados do usuário que estão no banco
        $_SESSION['login'] = mysqli_fetch_array($result);
        // volta para a página inicial
        header('Location: index.php');
    }else{
        echo "<h1>Usuário não encotrado!</h1>";
    }
?>