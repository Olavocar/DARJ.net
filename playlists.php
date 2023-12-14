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
<title>Playlists</title>
<link href="favicon_io/favicon-16x16.png" rel="icon">
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

<div id=miolo>
<div class=espaco><b>
<h2>Playlists</h2>
</b>
</div>

<div class=type>
<b><p>O Selo “Da Área RJ” possui parceria, 
fortalece e também conta com a ajuda de outros artistas, 
venha fazer parte você também desse time, 
inclua suas músicas em nossas Playlists, 
entre em contato por e-mail ou pelo whatsapp e 
procure saber como é o funcionamento: <u>daarearj@gmail.com</u> | 
<a href="
https://wa.me/+5521999051545?text=Somos%20a%20Da%C3%81rea%20RJ!%20Atenderemos%20voc%C3%AA%20em%20breve,%20obrigado%20por%20entrar%20em%20contato.
" target=_blank>
<img src="imgs/linkslogos/whatsapp.png" alt="Whatsapp" 
Title="Whatsapp" width="25" height="25">
</a>
</p></b>
</div>
<br>
<br>

<div>

<div>

<table>
    <td>

<div class="coluna1">

<div>
<img src="imgs/playlists/freedom.jpg">
</div>

<div>
<img src="imgs/playlists/master.jpg">
</div>

<div>
<img src="imgs/playlists/novaera.jpg">
</div>

<div>
<img src="imgs/playlists/playdaarea.jpg">
</div>

</div>

</td>

<td>

<div class="coluna2">

<div class=id>
<a href="https://open.spotify.com/playlist/5EnQBjT0sf9BE3zBNjryJK?si=94ab50d058d840ef" target="_blank">
<b>Freedom</a>

</div>
<div class=id>
<a href="https://open.spotify.com/playlist/7K3AC9we5gsQ7UffyJ8nP0?si=280c1494961a4ac2" target="_blank">
Master</a>
</div>

<div class=id>
<a href="https://open.spotify.com/playlist/5hHsE0j5ZpMNM2j0nnPuIB?si=ca95f15bd5684b0d" target="_blank">
Nova Era</a>
</div>

<div class=id>
<a href="https://open.spotify.com/playlist/3b2M2YNfkc8fntIw91zsV5?si=9568577bf5ac4a42" target="_blank">
Da Área</a>
</b>
</div>

</div>

</td>

<td>

<div class="coluna3">

<div>
<img src="imgs/playlists/rapup.jpg">
</div>

<div>
<img src="imgs/playlists/reunion.jpg">
</div>

<div>
<img src="imgs/playlists/underground.jpg">
</div>

<div>
<img src="imgs/playlists/urban.jpg">
</div>

</div>

</td>

<td>

<div class="coluna2">

<div class=id>
<b>
<a href="https://open.spotify.com/playlist/49vk3a8M9YCPZxXmLQevS1?si=522ace0914a148b2" target="_blank">
Rap Up!</a>
</div>

<div class=id>
<a href="https://open.spotify.com/playlist/3cZxZ91IvYeE82WPXzb8xq?si=1952c130d099428e" target="_blank">
Reunion</a>
</div>

<div class=id>
<a href="https://open.spotify.com/playlist/4d7hd8VQNafuxTAqj9XY06?si=c0a36c846e054a33" target="_blank">
Underground</a>
</div>

<div class=id>
<a href="https://open.spotify.com/playlist/57oAGMzV9fKwKhsKzMQBeO?si=fce1d37f9c1e44f2" target="_blank">
Urban</a>
</b>
</div>

</div>

</td>
</table>


</div>
</div>
</div>



</main>
<br>
<br>

<footer class="style"><b>Contato:<br>daarearj@gmail.com | +55 (21) 99905-1545</b>

</footer>

</body>
</html>