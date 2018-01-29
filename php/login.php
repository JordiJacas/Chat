<?php
session_start();

$user = $_POST['usuario'];
$_SESSION['user'] = $user;

$pwd = $_POST['pass'];
$_SESSION['pwd'] = $pwd;

if($user == $pwd){

	header('Location: http://localhost/Chat/php/pag/menu_principal.php');

}else{

	header('Location: http://localhost/Chat/html/inicio_sesion.html');
}

?>