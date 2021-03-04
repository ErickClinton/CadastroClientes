
<?php
//phpinfo();
//verificando erros
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);



    $host= "localhost";
    $usuario= "";
    $senha= "";
    $bd= "";
    $porta="3306"; //3306 é a porta padrão do mysql 

    
    $connect = new mysqli($host,$usuario,$senha,$bd,$porta);
    if(mysqli_connect_error())
        echo "Erro na conexao " .mysqli_connect_error();

 ?>

