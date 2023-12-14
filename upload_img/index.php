<?php
session_start(); // Iniciar a sessão
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Celke - Upload multiplo</title>
</head>

<body>
    <h1>Upload de Imagem</h1>

    <?php
    // Receber os dados do formulário
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    // Acessa o IF quando o usuário clicar no botão
    if (!empty($dados['SendCadImg'])) {

        // Receber os arquivos do formulário
        $arquivo = $_FILES['arquivo'];

        // Ler o array de arquivos
        for ($cont = 0; $cont < count($arquivo['name']); $cont++) {

            // Criar o endereço de destino das imagens
            $destino = "imagens/" . $arquivo['name'][$cont];

            // Acessa o IF quando realizar o upload corretamente
            if (move_uploaded_file($arquivo['tmp_name'][$cont], $destino)) {
                $_SESSION['msg'] = "<p style='color: green;'>Upload realizado com sucesso!</p>";
            } else {
                $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Upload não realizado com sucesso!</p>";
            }
        }
    }

    // Imprimir a mensagem de erro ou sucesso da variável global
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <!-- INICIO FORMULÁRIO -->
    <!-- Obrigatório o uso do atributo enctype para trabalhar com imagem-->
    <form method="POST" action="" enctype="multipart/form-data">
        <label>Imagens</label>
        <input type="file" name="arquivo[]" multiple="multiple"><br><br>

        <input type="submit" name="SendCadImg" value="Cadastrar">
    </form>
    <!-- FIM FORMULÁRIO -->

</body>

</html>