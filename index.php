
    

<?php
//Chamando a mensagem
    session_start();
    if(isset($_SESSION['mensagem'])){

    
?>

<script>
    window.onload = function()
    {
        M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
    }
</script>

<?php
    session_unset();
}



    include_once './includes/header.php';
    include_once './phpAction/db_connect.php';
    //a inclusão do arquivo de conexão com o banco... include

  

?>
    <a href =" https://www.linkedin.com/in/erick-clinton-carvalho-leite-239599176/  " target="_blank">
        <img src="https://www.flaticon.com/svg/vstatic/svg/174/174857.svg?token=exp=1614747313~hmac=ae104f555fc80b9f26d9633073bfabd6" 
        alt="linkedin" width="50" height="50">
        <br>
        <a href ="https://github.com/ErickClinton" target="_blank">
            <img src="https://marcas-logos.net/wp-content/uploads/2020/03/GITHUB-LOGO.png" 
            alt="github" width="50" height="50">
    </a>

<div class ="row">

    <div class = "col s12 m6 push-m3 ">
        <h3 class="light"> Clientes </h3>
        <table class="striped">
        
            <thead>
                <th>Nome: </th>
                <th>Sobrenome: </th>
                <th>Email: </th>
                <th>Idade: </th>


            </thead>

            <tbody>
            <!-- Fazendo loop com as informações /UPDATE/DELETE -->

               
                <?php
                    $sql = "SELECT * FROM clientes";
                    $resultado = mysqli_query($connect, $sql);
                    while($dados = mysqli_fetch_array($resultado)):

                    
                ?>
                 
                 <tr>

                    <td> <?php echo $dados['nome'];?></td>
                    <td> <?php echo $dados['sobrenome'];?></td>
                    <td> <?php echo $dados['email'];?></td>
                    <td> <?php echo $dados['idade'];?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $dados['id'];?>" class = "btn-floating orange">
                            <i class = "material-icons">edit</i>
                        </a>
                    </td>
                    <td>
                        <a href="./phpAction/delete.php?id=<?php echo $dados['id'];?>"  class = "btn-floating red">
                        <i class = "material-icons">delete</i>

                        </a> 
                    </td>
                    
          

                    
                </tr>
                <?php endwhile; ?>
               
                

            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar cliente</a>

    </div>

</div>

<?php
    include_once './includes/footer.php';

?>