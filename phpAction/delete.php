
<?php 
session_start();

include ("./db_connect.php");
//coletando/inserindo dados no banco de dados

if(isset($_GET['id']) && $_GET['id'] != ""){ 
    $id = (int)$_GET ['id'];


    $sql = "DELETE FROM clientes WHERE id = $id";

    if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = " Deletado com sucesso";
        header('Location: ../index.php');
    }else{
        $_SESSION['mensagem'] = " Erro ao deletar";

        header('Location: ../index.php');
    }
        
}



?>