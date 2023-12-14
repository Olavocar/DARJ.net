<?php

// Incluir a conexão com o banco de dados
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Listar</title>
</head>

<body>
    <a href="index.php">Listar</a><br>
    <a href="cadastrar.php">Cadastrar</a><br>
    <a href="cadastrar_multiplo.php">Cadastrar Múltiplo</a><br><br>

    <h1>Listar PDF BLOB</h1>

    <?php

        // Recuperar do banco de dados o arquivo blob
        $query_arquivos = "SELECT id, numero_contrato, nome_documento 
                        FROM arquivos 
                        ORDER BY id DESC";

        // Preparar a QUERY com PDO
        $result_arquivos = $conn->prepare($query_arquivos);

        // Executar a QUERY com PDO
        $result_arquivos->execute();

        // Verificar se encontrou algum arquivo no banco de dados com PHP
        if(($result_arquivos) and ($result_arquivos->rowCount() != 0)){

            // Ler os registros retornado do banco de dados com PHP
            while($row_arquivo = $result_arquivos->fetch(PDO::FETCH_ASSOC)){
                //var_dump($row_arquivo);

                // Extrair o array de dados para imprimir através da chave do array
                extract($row_arquivo);

                // Imprimri os valores retornado do banco de dados
                echo "ID: $id <br>";
                echo "Número do contrato: $numero_contrato <br>";
                echo "Nome do documento: <a href='visualizar_arquivo.php?id=$id' target='_blank'>$nome_documento</a> <br>";
                echo "<hr>";
            }
        }else{ // Acessa o ELSE quando não encontrar nenhum registro no banco de dados
            echo "<p style='color: #f00;'>Erro: Nenhum arquivo encontrado!</p>";
        }
    ?>
</body>

</html>