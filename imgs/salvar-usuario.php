<?php
    switch($_REQUEST["acao"]){
    case 'cadastrar':
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $telefone = $_POST["telefone"];
        $data_nasc = $_POST["data_nasc"];
        $estado = $_POST["estado"];
        $sql = "INSERT INTO usuarios (nome, sobrenome, email, senha, telefone, data_nasc, estado) VALUES ('{$nome}', '($sobrenome)', {$email}', '{$senha}', '($telefone)', '{$data_nasc}', '($estado)')";

        $res = $conexao->query($sql);
        
        break;
    case "editar":

        break;
    case "excluir":

        break;
            

    }