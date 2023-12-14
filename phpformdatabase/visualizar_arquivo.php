<?php

// Incluir a conexão com o banco de dados
include_once 'conexao.php';

// Receber o id do registro
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// Query para recuperar o arquivo blob no banco de dados
$query_arquivo = "SELECT arquivo_pdf
                        FROM arquivos 
                        WHERE id=:id
                        ORDER BY id DESC";

// Preparar a QUERY
$result_arquivo = $conn->prepare($query_arquivo);

// Substituir o link da QUERY pelo valor
$result_arquivo->bindParam(':id', $id);

// Executar a QUERY com PDO
$result_arquivo->execute();


// Verificar se encontrou algum registro no banco de dados com PDO
if (($result_arquivo) and ($result_arquivo->rowCount() != 0)) {

    // Ler o registro retornado do banco de dados com PDO
    $row_arquivo = $result_arquivo->fetch(PDO::FETCH_ASSOC);
    //var_dump($row_arquivo);

    // Extrair o array de dados para imprimir através da chave do array
    extract($row_arquivo);

    // Indicar que o conteúdo é PDF
    header("Content-Type: application/pdf");

    // Imprimir o PDF no navegador
    echo $arquivo_pdf;
} else {
    // Acessa o ELSE quando não encontrar o registro no banco de dados
    echo "<p style='color: #f00;'>Erro: Nenhum arquivo encontrado!</p>";
}
