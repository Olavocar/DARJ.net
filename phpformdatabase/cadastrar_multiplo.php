<?php

// Incluir a conexão com o banco de dados
include_once 'conectiondb.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>

<body>
    <a href="index.php">Listar</a><br>
    <a href="cadastrar.php">Cadastrar</a><br>
    <a href="cadastrar_multiplo.php">Cadastrar Múltiplo</a><br><br>

    <h1>Upload Múltiplo PDF BLOB</h1>

    <?php

    // Receber os dados do formulário
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['CadArquivoPdf'])) {
        //var_dump($dados);

        // Receber o arquivo PDF do formulario
        $arquivo_pdf = $_FILES['arquivo_pdf'];
        //var_dump($arquivo_pdf);

        $qnt_arquivos_salvo = 0;
        $qnt_arquivos_nao_salvo = 0;
        // Ler o array de arquivos
        for ($cont = 0; $cont < count($arquivo_pdf['name']); $cont++) {
            //var_dump($arquivo_pdf['name'][$cont]);

            // Receber nome da imagem
            $nome_arquivo = $arquivo_pdf['name'][$cont];

            // Converter o arquivo para blob
            $arquivo_pdf_blob = file_get_contents($arquivo_pdf['tmp_name'][$cont]);

            // QUERY para cadastrar o arquivo blob no banco de dados
            $query_arquivo = "INSERT INTO arquivos (numero_contrato, nome_documento, arquivo_pdf) VALUES (:numero_contrato, :nome_documento, :arquivo_pdf)";

            // Preparar a QUERY
            $cad_arquivo = $conn->prepare($query_arquivo);

            // Substituir o link da QUERY pelo valor
            $cad_arquivo->bindParam(':numero_contrato', $dados['numero_contrato']);
            $cad_arquivo->bindParam(':nome_documento', $nome_arquivo);
            $cad_arquivo->bindParam(':arquivo_pdf', $arquivo_pdf_blob);

            // Executar a QUERY com PDO
            $cad_arquivo->execute();

            // Verificar se cosegui cadastrar no banco de dados e acesso o IF
            if ($cad_arquivo->rowCount()) {
                $qnt_arquivos_salvo++;
                //echo "<p style='color: green;'>$qnt_arquivos_salvo arquivo(s) cadastrado com sucesso. $qnt_arquivos_nao_salvo arquivo(s) não cadastrado com sucesso.</p>";
                echo "<p style='color: green;'>Arquivo $nome_arquivo cadastrado com sucesso.</p>";
            } else {
                $qnt_arquivos_nao_salvo++;
                //echo "<p style='color: #f00;'>Erro: $qnt_arquivos_nao_salvo arquivo(s) não cadastrado com sucesso. $qnt_arquivos_salvo arquivo(s) cadastrado com sucesso.</p>";
                echo "<p style='color: #f00;'>Erro: Arquivo $nome_arquivo não cadastrado com sucesso.</p>";
            }
        }
    }

    ?>

    <!-- Formulário para cadastrar múltiplos arquivos blob no banco de dados -->
    <form method="POST" action="" enctype="multipart/form-data">
        <label>Número do Contrato: </label>
        <input type="text" name="numero_contrato" placeholder="Número do contrato"><br><br>

        <label>Arquivo PDF: </label>
        <input type="file" name="arquivo_pdf[]" multiple="multiple" accept="application/pdf"><br><br>

        <input type="submit" name="CadArquivoPdf" value="Enviar"><br><br>
    </form>

</body>

</html>