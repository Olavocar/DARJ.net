<?php

    if(isset($_FILE['arquivo'])){

    if($arquivo['error'])
       die("Falha ao enviar arquivo!");

       $pasta = "mixagem/";
       $nomedoarquivo = $arquivo['name'];
       $novonomedoarquivo = uniqid();
       $extensao = strtolower(pathinfo($nomedoarquivo, PATHINFO_EXTENSION));

       if($extensao != "mp3" && $extensao != "wav")
          die("Tipo de arquivo inválido!");

          $path = $pasta . $novonomedoarquivo . "." . $extensao;
          $deu_certo = move_uploaded_file($arquivo['tmp_name'], $path);
          if($deu_certo){
              $result = mysqli_query($con, "INSERT INTO mixagem(nome, email, telefone, arquivo, path) VALUES ('nome', 'email', 'telefone', '$nomedoarquivo', '$path')") or die($mysqli->error);
              echo "<p>Arquivo enviado com sucesso</p>";
    }  else
              echo "<p>Falha ao enviar arquivo</p>";

    }

    ?>

<!-- Formulário para cadastrar múltiplos arquivos blob no banco de dados -->
<form method="POST" action="pagamento.php" enctype="multipart/form-data">
    <b>Tracks para mixagem (somente em formatos wav/mp3):</b>
    <label>Nome: </label>
    <input type="text" name="nome" placeholder="Nome completo"><br><label>Nome: </label>
    <label>E-mail: </label>
    <input type="email" name="email" placeholder="E-mail válido"><br>
    <label>Telefone: </label>
    <input type="text" name="telefone" placeholder="DDD+Telefone"><br>
    <br>
    <label>Arquivos de Áudio: </label>
    <input type="file" name="arquivo" multiple="multiple" accept=".mp3, .wav"><br><br>

    <input type="submit" name="CadMixagem" value="Enviar"><br><br>
</form>