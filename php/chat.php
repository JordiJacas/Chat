<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/styleChat.css">
	<link rel="stylesheet" type="text/css" href="../css/bottstrap/bootstrap.css">
	<script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="../js/scriptChat.js"></script>
	<script type="text/javascript" src="../js/bottstrap/bootstrap.js"></script>
	<script type="text/javascript" src="../../js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/styleInicio.css">
</head>
<body>
<header>
    <div>
      <img src="../img/logo.jpg" width="200px" height="200px">
      <img src="../img/banner.jpg" width="796px" height="200px">
    </div>
      <nav>
      <ul class="menu">
        <li><a href="menu_principal.php">Inicio</a></li>
        <li><a href="debate.php">Debates</a></li>
        <li><a href="#">Denuncias</a></li>
        <li><a href="#">Intercambios</a></li>
        <li><a href="chat.php">Chat</a></li>
        <?php
          echo "  <p id='ini_ses'>".$user."</p>";   
        ?>
        <a href='logout.php' id='reg'>Logout</a>
      </ul>
    </nav>
 </header>
<section>
<div class="chat_window">
	<div class="top_menu">
		<div class="buttons">
			<div class="button close"></div>
			<div class="button minimize"></div>
			<div class="button maximize"></div>
		</div>
		<div class="title">Chat</div>
	</div>
	<ul class="messages"></ul>
	<div class="bottom_wrapper clearfix">
		<div class="message_input_wrapper">
			<input class="message_input" placeholder="Type your message here..." />
		</div>
		<div class="send_message">
			<div class="icon"></div>
			<div class="text">Send</div>
		</div>
	</div>
	</div>
	<div class="message_template">
		<li class="message">
			<div class="avatar"></div>
			<div class="text_wrapper">
				<div class="text"></div>
			</div>
		</li>
	</div>
</section>

<footer>
    <p>Ayuntamiento de Cornella</p>
</footer>

</body>
</html>