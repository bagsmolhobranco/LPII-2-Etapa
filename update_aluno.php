<?php

    include "conexao.php";

    if(isset($_POST['id'])){
        //entrada
        $id = $_REQUEST['id'];
        $nome = $_REQUEST['nome'];
        $telefone = $_REQUEST['telefone'];
        $email = $_REQUEST['email'];   

        //processamento
        $sql = "update aluno set nome = '$nome', telefone = '$telefone', email = '$email' where id = '$id'";
        $alterar = mysqli_query($conexao, $sql);

        //saida
        if($alterar){
            echo "
                <script>
                    alert('Registro Alterado!');
                    window.location = 'listar_alunos.php';
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
        <p> esta é uma passagem de tratamento de dados bla bla bla clica <a href='listar_alunos.php'> aqui </a> vai </p>
        ";
    }








?>