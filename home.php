<?php require_once "controlleruserdata.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RNBEEP96R5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RNBEEP96R5');
</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $fetch_info['nome'] ?> | Da Área RJ</title>
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
 
    <b>Bem vindo(a) <?php echo $fetch_info['nome'] ?></b><button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    
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

<br>
<br>
<br>
<br>

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

<main id=conteudo><div id="publi">

</div>
<div class=espaco><div class=espaco>
<b><h2>Selo / Produtora / Gravadora Independente</h2>
<p><h4>Quem somos:</h4></p>
Localizados em Niterói, RJ<br>
Venha gravar seu som conosco, traga sua base ou encomende 
um instrumental, consulte nossos serviços e solicite um 
orçamento.<br>
Faça sua mixagem e masterização, seu videoclipe, 
sua distribuição nas plataformas digitais , 
seu marketing e impulsionamento digital.<br>
Trabalhamos também com Playlists, inclua suas músicas.<hr>
Conheça alguns de nossos trabalhos , inscreva-se no 
nosso canal no Youtube, curta e compartilhe à vontade.<br>
Se você deseja ajudar de alguma maneira com qualquer valor 
até mesmo R$ 1,00 você pode fazer um PIX para:<br>
+55 (21) 98095-8408<br>Ou basta clicar aqui 
<button type="button"><a href="https://nubank.com.br/pagar/lvlyn/SCVHnK2VEk">
Doar</a></button>

<br>
<br>

Toda e qualquer ajuda é bem vinda<br>
</b>

</div>

<div></div>

<div id=vacuo></div>
</div>

<br>
<br>

</main>

<footer class="style">
    <b>Contato:<br>daarearj@gmail.com | +55 (21) 99905-1545</b>

</footer>

</body>
</html>