<?php

    include "conexao.php";

    if(isset($_REQUEST['id'])){
        //entrada
        $id = $_REQUEST['id'];

        //processamento
        $sql = "select * from cliente where id = '$id'"; 
        $seleciona = mysqli_query($conexao, $sql); //executa a variavel
        $exibe = mysqli_fetch_array($seleciona); //carrega o vetor com o banco

        //carrega as variaveis com dados do banco
        $nome = $exibe['nome'];
        $telefone = $exibe['telefone'];
        $email = $exibe['email'];  

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1 class="text-center">VOLTA SANTO</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
    <form name="editar" method="post" action="update_cliente.php">
        <input type="hidden" name="id" value="<?=$id?>">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name='nome' id="nome" value="<?php echo $nome ?>" required>
         </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="number" class="form-control" name="telefone" id="telefone" value="<?php echo $telefone ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="<?php echo $email ?>" required>
        </div>
        <div class="mb-3 text-end">
        <button type="submit" class="btn btn-primary">Editar</button>
        <button type="button" class="btn btn-danger" onclick="history.go(-1)">Voltar</button>
        </div>
    </form>

    <?php
        }
        else {
            echo "
        <p> esta é uma pagina de tratamento de dados, clique <a href='listar_clientes.php'> aqui </a> para voltar.
        ";
        }
    ?>


    

</body>
</html>