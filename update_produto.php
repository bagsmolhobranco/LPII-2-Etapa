<?php

    include "conexao.php";

    if(isset($_POST['id'])){
        //entrada
        $id = $_REQUEST['id'];
        $descricao = $_REQUEST['descricao'];
        $preco = $_REQUEST['preco'];
        $estoque = $_REQUEST['estoque'];

        //processamento
        $sql = "update produto set descricao = '$descricao', preco = '$preco', estoque = '$estoque' where id = '$id'";
        $alterar = mysqli_query($conexao, $sql);

        //saida
        if($alterar){
            echo "
                <script>
                    alert('Registro Alterado!');
                    window.location = 'listar_produtos.php';
                </script>
            ";
        }
        else {
            echo "
            <p> Banco temporariamente fora do ar, fala com o adm...</p>
            ";
            echo mysqli_error($conexao);
        }
    } else{
        echo "
        <p> esta é uma passagem de tratamento de dados bla bla bla clica <a href='listar_produtos.php'> aqui </a> vai </p>
        ";
    }

?>