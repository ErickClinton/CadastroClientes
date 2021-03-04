
<?php 
session_start();

include ("./db_connect.php");
//coletando/inserindo dados no banco de dados
$nome = mysqli_escape_string($connect, $_POST['nome']);
$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
$email = mysqli_escape_string($connect, $_POST['email']);
$idade = mysqli_escape_string($connect, $_POST['idade']);

$sql = "INSERT INTO clientes(nome, sobrenome, email, idade) VALUES ('$nome','$sobrenome', '$email', '$idade')";


if(mysqli_query($connect, $sql)){
    $_SESSION['mensagem'] = " Cadastro realizado com sucesso";
    header('Location: ../index.php');
}else{
    $_SESSION['mensagem'] = " Erro ao cadastrar";

    header('Location: ../index.php');
}
    


?>