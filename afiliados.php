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

<meta charset=utf-8>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Afiliados</title>
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

<div clas="session">
<b>Olá, <?php echo $fetch_info['nome'];?></b>
<button type="button" class="w3-button"><a href="logout-user.php">Sair</a></button>
</div>

<body id=bg>

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

<div>
<b><h2>Afiliados</h2></b>

<div>

<table>

<tr>

<div class="photo">
<img src="imgs/afiliados/solitario.jpg" width="200px" height="200px">
</div>

<div class="texto">
<b>"volao"</b>
</div>
</tr>

<tr>

<div class="bio">
<b>
Nascido e criado na Zona Sul do RJ, circulou por vários bairro como
TTK, Flamengo, Laranjeira, Botafogo, ... Frequentador sempre de círculos 
sociais presentes nas praias da Zona Sul, eventos, boites e noitadas, 
sempre teve a influência de boa música em sua vida, do erudito ao funk, 
arriscou suas primeiras composições em '96 mescladas com textos confusos 
em meio à muita drogadição que foi mais tarde lhe causando muitos 
problemas. Acabou fazendo de sua obra, sua música uma válvula de escape,
um prazer, uma terapia.
</b>
</div>

</tr>

<br>

<tr>

<div class="photo">
<img src="imgs/afiliados/adictos.jpg" width="200px" height="200px">
</div>

<div class="texto">
<b>"Adictos"</b>
</div>
</tr>

<tr>
<div class="bio">
<b>
Cria da Tijuca e Adjacências Pedro vulgo: "Osama" , recentemente 
contou com a entrada de "King" atuam no Rap desde meados de 2010 com 
referências de Gutierrez, Cone Crew, Mc Marechal, e muios gringos como 
Wu-Tang Clan, entre outros participou 5 anos de coletivo 4:20 que foi 
criado junto ao CCRP de São Cristóvão uma das primeiras rodas de rima 
do RJ onde eram cerca de 10 envolvidos rimando entre eles Tiago Mac, 
Jhonny, Original Raíz, Cogumelo Dub, chegaram a se apresentar em SP 
com 1 ano de banda, porém a banda veio acabar em 2016. Em 2015 já havia 
criado a "adictos" que veio com logo com muitos lançamentos. Sua luta 
é para nunca perder a essência do Underground. Atravessa e atravessou 
muitas dificuldades por problemas com drogas, adicção, porém hoje leva 
uma vida limpo e longe das drogas, e se orgulha muito disso.
</b>
</div>


</tr>

</table>

</div>

<div id=lateral></div>
</main>

<br>
<br>

<footer class="style"><b>Contato:<br>daarearj@gmail.com | +55 (21) 99905-1545</b>

</footer>

</body>
</html>