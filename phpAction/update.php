
<?php 
session_start();

include ("./db_connect.php");
//coletando/inserindo dados no banco de dados
$nome = mysqli_escape_string($connect, $_POST['nome']);
$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
$email = mysqli_escape_string($connect, $_POST['email']);
$idade = mysqli_escape_string($connect, $_POST['idade']);
$id = mysqli_escape_string($connect, $_POST['id']);


$sql = "UPDATE clientes SET nome ='$nome', sobrenome='$sobrenome',email='$email', idade='$idade'WHERE id = '$id'";

if(mysqli_query($connect, $sql)){
    $_SESSION['mensagem'] = " Atualizado sucesso";
    header('Location: ../index.php');
}else{
    $_SESSION['mensagem'] = " Erro ao atualizar";

    header('Location: ../index.php');
}
    


?>