<?php
    include('conexao.php');
    $id_usuario=$_GET['id_usuario'];
   
    echo "<h1>Deletar usuário</h1>";
    echo "<p>ID_Usuário: $id_usuario</p>";
    $sql = "DELETE FROM usuario
            WHERE id_usuario=$id_usuario";
echo $sql."<br>";
$result = mysqli_query($con, $sql);
if($result)
    echo "Usuário deletado com sucesso!<br>";
else
    echo "Erro ao deletar: ".mysqli_error($con)."!";
?>
<a href="index.php">Voltar</a>