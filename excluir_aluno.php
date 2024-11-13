<?php

    include "conexao.php";

    if(isset($_GET['id'])) {
        //entrada
        $id = $_GET['id'];
        //processamento escreve e executa a sql
        $sql = "delete from aluno where id = '$id'";
        $excluir = mysqli_query($conexao, $sql);
        //saida feedback ao usuario
        if($excluir) {
            echo "
            <script>
                alert('Registro Excluido com Sucesso!');
                window.location = 'listar_alunos.php';
            </script>
            ";
        }
        else{
            echo "
                <p> Banco de Dados fora do ar. Tente novamente mais tarde.</p>
                <p> Entre em contato com o adm do site...</p>    
            ";
            echo mysqli_error($conexao);
        }
    }
    else{
        echo "
        <p> esta é uma passagem de tratamento de dados bla bla bla clica <a href='listar_alunos.php'>aqui</a> vai </p>
        ";
    }
?>