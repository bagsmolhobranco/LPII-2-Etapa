<?php

    include "conexao.php";

    if(isset($_GET['id'])){
        //entrada
        $id = $_GET['id'];

        //processamento
        $sql = "select * from produto where id = '$id'"; 
        $seleciona = mysqli_query($conexao, $sql); //executa a variavel
        $exibe = mysqli_fetch_array($seleciona); //carrega o vetor com o banco

        //carrega as variaveis com dados do banco
        $descricao = $exibe['descricao'];
        $preco = $exibe['preco'];
        $estoque = $exibe['estoque'];   

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

    
    <form name="editar" method="post" action="update_produto.php">
        <input type="hidden" name="id" value="<?=$id?>">
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" name='descricao' id="descricao" value="<?php echo $descricao ?>" required>
         </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" class="form-control" name="preco" id="preco" value="<?php echo $preco ?>" required>
        </div>

        <div class="mb-3">
            <label for="estoque" class="form-label">Estoque</label>
            <input type="number" class="form-control" name="estoque" id="estoque" value="<?php echo $estoque ?>" required>
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
        <p> esta é uma pagina de tratamento de dados, clique <a href='listar_produtos.php'> aqui </a> para voltar.
        ";
        }
    ?>


    

</body>
</html>