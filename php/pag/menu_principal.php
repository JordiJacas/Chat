<!DOCTYPE html>
<html>
<?php
	session_start();
	$pwd = $_SESSION['pwd']; 
	$user = $_SESSION['user'];
?>
<head>
	<title> Ayuntamiento de tu casa</title>
    <script type="text/javascript" src="../../js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/styleInicio.css">
	<meta charset="UTF-8">
</head>
	<header>
		<div>
			<img src="../../img/logo.jpg" width="200px" height="200px">
			<img src="../../img/banner.jpg" width="796px" height="200px">
		</div>
		<nav>
			<ul class="menu">
				<li><a href="menu_principal.php">Inicio</a></li>
	            <li><a href="debate.php">Debates</a></li>
	            <li><a href="#">Denuncias</a></li>
	            <li><a href="#">Intercambios</a></li>
	            <li><a href="chat.php">Chat</a></li>
	            <?php
	            	echo "	<p id='ini_ses'>".$user."</p>";		
	            ?>
	            <a href='../logout.php' id='reg'>Logout</a>
			</ul>
		</nav>
	</header>
	<section class="main">
		<aside id="aside-left">
			<h3>Noticias</h3>
			<p><a href="http://www.cornella.cat/es/noticia.asp?pag=&id=7787&por=1&tf=ap">Cornellà reclama també a la Generalitat els pagaments pendents de les escoles bressol des de 2015 fins ara</a></p>
		</aside>
		<section class="articles">

		</section>
		<aside id="aside-right">
			<h3>Redes Sociales</h3>
			<p><a href="https://twitter.com/qferacornella?lang=ca">Twitter</a></p>
			<p><a href="https://www.facebook.com/Informer.Cornella.De.Llobregat/">Facebook</a></p>
			<p><a href="https://www.youtube.com/channel/UCN-E583ha902JhhQwQ3Xq_g">YouTube</a></p>
			<p><a href="https://www.instagram.com/inscornella/">Instagram</a></p>
		</aside>
	</section>
		<footer>
			<p>Ayuntamiento de Cornella</p>
		</footer>
</body>
</html>