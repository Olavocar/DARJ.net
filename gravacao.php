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
<meta charset=utf-8>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gravação</title>
<link href=favicon_io/favicon-16x16.png rel=icon>
<link href=estilo.css rel=stylesheet>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-240370538-2"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag("js",new Date());gtag("config","UA-240370538-2");</script>
<meta name=lomadee-verification content=23139291 />
</head>
<?php require_once "controlleruserdata.php"; ?>
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
<div clas="session">
<b>Olá, <?php echo $fetch_info['nome'];?></b>
<button type="button" class="w3-button"><a href="logout-user.php">Sair</a></button>
</div>
<body id=bg><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Menu</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gravacao.php">Gravação</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mixmaster.php">Mix/Master</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="beats.php">Beats</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="videoclipes.php">Video Clipes</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="distribuicaodigital.php">Distribuição Digital</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mktdigital.php">Marketing Digital & Impulsionamento</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="playlists.php">Playlists</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contato.php">Contato</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="videos.php">Videos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="afiliados.php">Afiliados</a>
            </li>
            </ul>
          </div>
        </div>
    </nav>
<header id=topo>
<div id=logo>
<img src=imgs/logonovodarj.png alt=Logo title=Logo>
<div id=imagem>
<img src=imgs/arquivos/banner.jpg width=720px alt=Favela&Piano title=Favela&Piano>
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
<a href="https://open.spotify.  hecom/artist/3bFWviDYBQ8sDsTDpf3tcK?si=-M-rO1V7Tv-6XWW8j04aVw" target=_blank>
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
<main id=conteudo><article id="publi"><!-- BEGIN -->
<script src="//ad.lomadee.com/banners/script.js?sourceId=37684855&dimension=15&height=600&width=160&method=0" type="text/javascript" language="javascript"></script>
<!-- END --></article>
<article class=img><img src=imgs/arquivos/mic-vintage.jpg width=120 height=600 alt="Mic" title="Mic-Vintage"></article><article class="espaco">
<b><h2>Gravação / Captação</h2>Venha fazer sua captação\gravação conosco em nosso home studio conforme recomendado,<br>ou agende sua gravação "in loco" (à domicílio), caso você possua um ambiente propício<br>nós levamos nossos equipamentos.<br>Pague e agende agora mesmo da melhor forma possível.<p>Caso deseje uma gravação "in loco" ou à domicílio<br>cobramos uma taxa de deslocamento, efetuando o pagamento é só agendar o<br>dia e horário. O pagamento pode ser feito aqui:</p></b></article><article></article><!-- BEGIN -->
<script src="//ad.lomadee.com/banners/script.js?sourceId=37684855&dimension=8&height=250&width=250&method=0" type="text/javascript" language="javascript"></script>
<!-- END --></article>
</main>
<footer class="style"><b>Contato:<br>daarearj@gmail.com | +55 (21) 99905-1545</b>
</footer>
</body>
</html>
