<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
           $nome = $_POST["nome"];
           $email = $_POST["email"];
           $senha = md5($_POST["senha"]);
           $data_nasc = $_POST["data_nasc"];

           $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) values ('{$nome}', '{$email}','{$senha}','{$data_nasc}')";
            break;
        
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastro com sucesso');</script>"
                print "<script>localhost.href='?page=listar';</script>"
            }else{
                print "<script>alert('Não foi possível cadastrar');</script>"
                print "<script>localhost.href='?page=listar';</script>"
            }
            break;

        case 'editar':
            //code...
            break;

        case 'excluir':
            // code...
            break;
    }

?>