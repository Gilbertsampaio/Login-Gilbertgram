<?php
include_once('conexao.php');

$id = $_GET['id'];

$sql = mysqli_query($connect,"UPDATE users SET login_status = '0' WHERE id = $id");

session_start();
session_unset();
session_destroy(); 

session_start();

$_SESSION['alerta_login'] = '<script> var segundos = 5; setTimeout(function(){ $("#sessaoencerrada").fadeOut();}, segundos*1000)</script><span id="sessaoencerrada" style="color:red; font-size:14px">Sua sessão foi encerrada com sucesso!</span>';

header("Location: login-telegram.php");
exit;  
?>