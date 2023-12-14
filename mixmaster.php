<?php require_once "controlleruserdata.php"; ?>
<!doctype html>
<html>
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RNBEEP96R5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RNBEEP96R5');
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mixagem & Masterização</title>
<link href=favicon_io/favicon-16x16.png rel=icon>
<link href=estilo.css rel=stylesheet>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-240370538-2"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag("js",new Date());gtag("config","UA-240370538-2");</script>
<meta name=lomadee-verification content=23139291 />
</head>

<?php 
$email = $_SESSION['email'];
$senha = $_SESSION['senha'];
if($email != false && $senha != false){
    $sql = "SELECT * FROM cadastro WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>

<body id=bg>
  
<link href="estilo.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 
    <b>Ola <?php echo $fetch_info['nome'] ?></b><button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    
<header id=topo>
<div id=logo>
<img src="imgs/logonovodarj.png" alt="Logo" title="Logo">
<div id=imagem>
<img src=imgs/arquivos/banner.jpg width="100%" alt="Favela&Piano" title="Favela&Piano">
</div>
</div>

<div class=blank>
<div class-=links><b>
siga nossas redes sociais:
</b>
<div class=icones>
<a href=https://www.facebook.com/daarearj target=_blank>
<img src=imgs/linkslogos/facebook.png alt=Facebook title=Facebook>
</a>
<a href=https://www.instagram.com/daarearj target=_blank>
<img src=imgs/linkslogos/instagram.png alt=Instagram title=Instagram>
</a>
<a href=https://twitter.com/DaareaRJ target=_blank>
<img src=imgs/linkslogos/twitter.png alt=Twitter title=Twitter>
</a>
<a href=https://soundcloud.com/daarearj target=_blank>
<img src=imgs/linkslogos/soundcloud.png alt=Soundcloud title=Soundcloud>
</a>
<a href=https://www.youtube.com/channel/UCD4to51oOgeONWXPBgOcpTQ target=_blank>
<img src=imgs/linkslogos/youtube.png alt=Youtube title=Youtube>
</a>
<a href="https://open.spotify.com/artist/3bFWviDYBQ8sDsTDpf3tcK?si=-M-rO1V7Tv-6XWW8j04aVw" target=_blank>
<img src=imgs/linkslogos/spotify.png alt=Spotify title=Spotify>
</a>
<a href="
https://wa.me/+5521999051545?text=Somos%20a%20Da%C3%81rea%20RJ!%20Atenderemos%20voc%C3%AA%20em%20breve,%20obrigado%20por%20entrar%20em%20contato.
" target=_blank>
<img src=imgs/linkslogos/whatsapp.png alt=Whatsapp title=Whatsapp>
</a>
</div>
</div>
</div>
</header>

<table>
<nav id="menu">
  <div class="botoes">
    <a href="home.php">Inicio</a>
    <a href="gravacao.php">Gravaçao</a>
    <a href="mixmaster.php">Mix/Master</a>
    <a href="beats.php">Beats</a>
    <a href="videoclipes.php">VideoClipes</a>
    <a href="distribuicaodigital.php">Distibuiçao Digital</a>
    <a href="mktdigital.php">Marketing Digital</a>
    <a href="playlists.php">Playlists</a>
    <a href="videos.php">Videos</a>
    <a href="afiliados.php">Afiliados</a>
    <a href="contato.php">Contato</a>
    <a href="novidades.php">Novidades</a>
</nav>
</table>


<br>

<main id=conteudo>
  <table>
    <td>
<div id="publi">

</div>
</td>

<td>
<div class=img>
<div>
<div class=mix>
<img src=imgs/arquivos/mesadesom.jpg alt="Mesa de Som" title="Mesa de Som">
</div>
<div class=mix2>
<img src=imgs/arquivos/mesadesom2.jpg alt="Mesa de Som" title="Mesa de Som"></div>
</div>
</div>
</td>

</table>

<div class=espaco>

<b><h2>Mixagem & Masterização</h2>
<p>
<h4>Mixagem\Masterização</h4>
</p>
Mande seus arquivos de áudio (em pistas) para mixagem e masterização.</p>

<?php

// Receber os dados do formulário
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// Acessa o IF quando o usuário clicar no botão
if (!empty($dados['SendFile'])) {

    // Receber os arquivos do formulário
    $arquivo = $_FILES['arquivo'];

    // Ler o array de arquivos
    for ($cont = 0; $cont < count($arquivo['name']); $cont++) {

        // Criar o endereço de destino das imagens
        $destino = "mixagem/" . $arquivo['name'][$cont];

        // Acessa o IF quando realizar o upload corretamente
        if (move_uploaded_file($arquivo['tmp_name'][$cont], $destino)) {
            $_SESSION['msg'] = "<p style='color: green;'>Upload realizado com sucesso!</p>";
        } else {
            $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Upload não realizado com sucesso!</p>";
        }
    }

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $destino = $_POST['path'];

    $result = mysqli_query($con, "INSERT INTO mixagem(nome, email, telefone, arquivo, path) VALUES ('$nome', '$email', '$telefone', '$nomedoarquivo', '$destino')") or die($mysqli->error);
    
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
        <input type="submit" name="SendFile" value="Enviar" accept=".mp3, .wav">
</form>
<!-- FIM FORMULÁRIO -->

</div>

<div>

</div>

</main>

<br>
<br>

<footer class="style"><b>Contato:<br>daarearj@gmail.com | +55 (21) 99905-1545</b>

</footer>

</body>
</html>
