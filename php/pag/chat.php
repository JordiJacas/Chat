<!DOCTYPE html>
<?php
  session_start();
  $pwd = $_SESSION['pwd']; 
  $user = $_SESSION['user'];
?>
<html>
  <head>
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
          echo "  <p id='ini_ses'>".$user."</p>";   
        ?>
        <a href='logout.php' id='reg'>Logout</a>
      </ul>
    </nav>
    <footer>
      <p>Ayuntamiento de Cornella</p>
    </footer>
  </body>
</html>