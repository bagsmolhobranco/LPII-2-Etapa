<?php
    include "conexao.php"; 
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];

        $sql = "select * from cliente where id = '$id'";
        $seleciona = mysqli_query($conexao,$sql);
        $exibe = mysqli_fetch_array($seleciona);

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
      
      <div class="container">
          <h1 class="mt-3 text-center">Cliente: <?php echo $nome ?></h1>
          <hr>
          <p>Telefone: <?php echo $telefone ?></p>
          <php>Email: <?php echo $email ?></p>
          
          <hr>

          <div class="row">
            <div class="col text-start">
                <button type="button" class="btn btn-warning" onclick="history.go(-1)">Voltar</button>
            </div>
            <div class="col text-end">
                <button type="button" class="btn btn-primary" onclick="location.href='editar_cliente.php?id=<?php echo $id ?>';">Editar</button>
            </div>
          </div>
        </div>
        
        
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    }

    else {
        echo "
        <p>
        bla bla bla bla clica <a href='listar_clientes.php'>aqui</a>
        ";
    }



?>