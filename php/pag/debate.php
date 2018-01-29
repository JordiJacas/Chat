<!DOCTYPE html>
<html>
<?php
  session_start();
  $pwd = $_SESSION['pwd']; 
  $user = $_SESSION['user'];
?>
<head>
	<title> Ayuntamiento de tu casa</title>
	<script type="text/javascript" src="../../js/jquery-3.2.1.js"></script>
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
			<a href="#"><p>Contenido 1</p></a>
		</aside>
		<section class="articles">
			<div>
				<header><h1>Iniciar nuevo debate</h1></header>
				<p class="submit">
				<input name="ini_debate" class="button" value="Iniciar debate" type="submit">
				</p>
			</div>
			<div id="debates_creados">
				<header><h1>Debates Creados</h1></header>
				<div class="debates">
					<p>Nombre del Usuario :</p>
					<p>Hola muy buenas a todos me gustaria que , bla bla bla...</p>
					<img align="right" src="../img/responder.png" onclick="responder()" height="15px" />
					<hr/>
				</div>
			</div>
		</section>
		<aside id="aside-right">
			<a href="#"><p>Contenido 2</p></a>
		</aside>
	</section>
		<footer>
			<p>Ayuntamiento de Cornella</p>
		</footer>
</body>
</html>