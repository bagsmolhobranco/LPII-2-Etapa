<?php
    include "conexao.php";

    if(isset($_REQUEST['nome'])){
        //entrada
        $nome = trim($_REQUEST['nome']);
        $telefone = trim($_REQUEST['telefone']);
        $email = trim($_REQUEST['email']);

        //processamento
        $sql = "insert into aluno(nome,telefone,email) values ('$nome','$telefone','$email')";
        $cadastrar = mysqli_query($conexao,$sql);

        //saida
        if($cadastrar) {
            echo "
            <script>
                alert('Aluno Cadastrado com Sucesso!');
                window.location = 'listar_alunos.php';
            </script>
            ";
        }
    } else{
        echo "
            <p> Esta é uma pagina de tratamento, vem pra <a href='alunos.php'>cá</a> vem </p>
        ";
    }

?>