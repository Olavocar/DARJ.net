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
<title>Contato</title>
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

<div class=espaco><form action="https://formsubmit.co/e5b8087f27cca6b5bd58f06eda636c81" method="POST"><b><h2>Contato</h2>
</b><h1 id=fontcolor>Entre em contato:</h1>
<fieldset>
<legend>Dados Pessoais</legend>
<p>
<label for=nome>Nome</label>
<input type=text name=nome placeholder="Nome Completo" required>
</p>
<p>
<label for=email>E-mail</label>
<input type=email name=email placeholder="E-mail válido" required>
</p>
<p>
<label for=tel>Telefone</label>
<input type=tel name=tel>
</p>
</fieldset>
<fieldset>
<legend>Dados adicionais:</legend>
<p>
<label for=estado>Estado</label>
<select name=estado>
<option value=ac>Acre</option>
<option value=al>Alagoas</option>
<option value=ap>Amapá</option>
<option value=am>Amazonas</option>
<option value=ba>Bahia</option>
<option value=ce>Ceará</option>
<option value=df>Distrito Federal</option>
<option value=es>Espírito Santo</option>
<option value=go>Goiás</option>
<option value=ma>Maranhão</option>
<option value=mt>Mato Grosso</option>
<option value=ms>Mato Grosso do Sul</option>
<option value=mg>Minas Gerais</option>
<option value=pa>Pará</option>
<option value=pb>Paraíba</option>
<option value=pr>Paraná</option>
<option value=pe>Pernambuco</option>
<option value=pi>Piauí</option>
<option value=rj>Rio de Janeiro</option>
<option value=rn>Rio Grande do Norte</option>
<option value=rs>Rio Grande do Sul</option>
<option value=ro>Rondônia</option>
<option value=rr>Roraima</option>
<option value=sc>Santa Catarina</option>
<option value=sp>São Paulo</option>
<option value=se>Sergipe</option>
<option value=to>Tocantins</option>
</select>
</p>
<fieldset>
<legend>Mande sua mensagem</legend>
<p>
<label for=mensagem>Mensagem</label><br>
<textarea id=caixamsg name=mensagem></textarea>
</p>
<p>
<input type=submit value=enviar>
<input type="hidden" name="_next" value="https://daarearj.net/thanks.php">
</p>
</fieldset>	
</form>
</div>


</main>

<br>
<br>

<footer class="style"><b>Contato:<br>daarearj@gmail.com | +55 (21) 99905-1545</b>
</footer>

</body>
</html>