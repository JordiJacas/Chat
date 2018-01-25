<!DOCTYPE html>
<?php
  session_start();
  $pwd = $_SESSION['pwd']; 
  $user = $_SESSION['user'];
?>
<html>
  <head>
  <title> Ayuntamiento de tu casa</title>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
    
  <body>
  	<header><h1>Banner</h1></header>
      <nav>
      <ul class="menu">
        <li><a href="../../index.html">Inicio</a></li>
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
  </body>
</html>