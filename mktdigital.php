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
<title>Marketing Digital & Impulsionamento</title>
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
<img src=imgs/arquivos/banner.jpg width="720px" alt=Favela&Piano title=Favela&Piano>
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
<main id=conteudo><!-- BEGIN -->
<script src="//ad.lomadee.com/banners/script.js?sourceId=37684855&dimension=3&height=600&width=120&method=0" type="text/javascript" language="javascript"></script>
<!-- END -->
<article id=img></article>
<article class=espaco><b><h2>Marketing Digital & Impulsionamento</h2>Marketing Digital & Impulsionamento<br>Obtenha os melhores alcances e maior<br>streaming com as suas músicas, construa o seu público<br>tudo 100% orgânico e feitos à partir de direcionamento automático e<br>Google Ads.<br>
<p>Planos:</p>
<p>(Spotify)<br>1k Plays = R$ 70
<br>1k Plays + Ouvintes = R$ 100<br>1k seguidores = R$ 70<br>1k Ouvintes = R$ 70</p>
<p>(Youtube)<br>1k Views = R$ 120<br>1k Inscritos = R$ 300</p>Caso opte por já efetuar o pagamento e<br>contratar o impulsionamento digital o nosso plano padrão é de 1k de plays<br>no spotify com duração de 1 mês por R$ 70,00.<br>Efetuando o pagamento é só mandar o link da sua música</b>
</article><div class="form"><article class="form2">
<?php 

if(isset($_POST['submit']))

{

include_once('connectiondb.php');

$name = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$plano = $_POST['plano'];
$link = $_POST['link'];
$mensagem = $_POST['mensagem'];

$result = mysqli_query($con, "INSERT INTO mkt_digital_daarearj(name,email,telefone,plano,link,mensagem) 
VALUES ('$name','$email','$telefone','$plano','$link','$mensagem')");

}
?>
<form action="pagamento.php" method="POST"><b>Marketing Digital
</b><br><b>Escolha seu Impulsionamento:</b>
<fieldset><br>
<legend class="dados"><b>Dados Pessoais</b></legend>
<p>

<label for=name>Nome</label>
<input type=text name=name placeholder="Nome Completo" required>
</p>
<p>
<label for=email>E-mail</label>
<input type=email name=email placeholder="E-mail válido" required>
</p>
<p>
<label for=tel>Telefone</label>
<input type=telefone name=telefone required>
</p>
</fieldset>
<fieldset>
<legend>Tipo:</legend>
<p>
<label for=plano>Plano:</label>
<select name=plano>
<option value=1>Spotify 1k Plays = R$ 70</option>
<option value=2>Spotify 1k Plays + Ouvintes = R$ 100</option>
<option value=3>Spotify 1k seguidores = R$ 70</option>
<option value=4>Spotify 1k Ouvintes = R$ 70</option>
<option value=5>YouTube 1k Views = R$ 120</option>
<option value=6>Youtube 1k Inscritos = R$ 300</option>
</select>
</p>
<fieldset>
<label for=link>Link:</label>
<input type=link name=link required>
</fieldset>
<fieldset><br>
<legend class="dados">Mande sua mensagem (Opcional)</legend>
<label for="mensagem">Mensagem</label><br>
<textarea id="caixamsg" name="mensagem" placeholder="Digite sua mensagem"></textarea>
<p>Envie seu pedido e você será redirecionado para a página de pagamento<br>
É muito importante que você faça corretamente o pagamento , com o valor do respectivo pedido.<br>Não os responsabiliamos por pedidos feitos de maneira errada</p>
<input type="hidden" name="_autoresponse" value="Recebemos sua mensagem com sucesso, obrigado pelo contato e logo responderemos">
<button type="submit" name="submit" id="submit">Enviar</button>
</p>
</div>
</fieldset>
</form>

</article>
<article><!-- BEGIN -->
<script src="//ad.lomadee.com/banners/script.js?sourceId=37684855&dimension=15&height=600&width=160&method=0" type="text/javascript" language="javascript"></script>
<!-- END --></article>
<aside id=lateral></aside>
</main>
<footer class="style"><b>Contato:<br>daarearj@gmail.com | +55 (21) 99905-1545</b>
</footer>
</body>
</html>
