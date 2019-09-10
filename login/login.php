<?php
 
// inclui o arquivo de inicialização
require '../config.php';
require 'functions.php';
require '../inc/database.php';
 
// resgata variáveis do formulário
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
 
// cria o hash da senha
$database = open_database();
$sql = "SELECT id, name FROM users WHERE email = '$email' AND password = '$password'";
$query = mysqli_query($database,$sql);
$users = mysqli_fetch_assoc($query); 



if(mysqli_num_rows($query) == 0)
{
	$erro = true;
	header("Location: ../index.php?error");
}
 
if(mysqli_num_rows($query) > 0){
	session_start();
	$_SESSION['logged_in'] = true;
	$_SESSION['user_id'] = $users['id'];
	$_SESSION['user_name'] = $users['name'];	
	header('Location: ../index.php');		
}
if($erro) {
	echo mysqli_error($database);
}
