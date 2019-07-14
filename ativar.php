<?php
session_start();
include "conexao.php";

$usuario_id = $_REQUEST['id'];
$senha = $_REQUEST['token'];

$sql = mysqli_query($connect,"SELECT * FROM users WHERE id ='{$usuario_id}' AND senha='{$senha}' AND login_status !='3'");
$resultado = mysqli_num_rows($sql);

if($resultado > 0){
	
	$_SESSION['success_ativo'] = '<script> var segundos = 7; setTimeout(function(){ $("#cadastro").fadeOut();}, segundos*1000)</script><span id="cadastro" style="color:#e2726f; font-size:14px"><i class="fa fa-times"></i> Essa conta já encontra-se <span style="font-weight:bold; padding-left:5px">ATIVA </span> em nosso sistema. Efetue o login ou envie uma mensagem ao desenvolvedor.</span>';
	echo '<script language="JavaScript">window.location="login-telegram.php";</script>';

} else if($resultado == 0){	
	
$sql = mysqli_query($connect,"UPDATE users SET login_status = '0' WHERE id ='{$usuario_id}' AND senha='{$senha}'");
$sql2 = mysqli_query($connect,"SELECT * FROM users WHERE id ='{$usuario_id}' AND senha='{$senha}' AND login_status != '3'");
$resultado2 = mysqli_num_rows($sql2);

if($resultado2 == 0){
	
	$_SESSION['success_ativo'] = '<script> var segundos = 7; setTimeout(function(){ $("#cadastro").fadeOut();}, segundos*1000)</script><span id="cadastro" style="color:#e2726f; font-size:14px"><i class="fa fa-times"></i> Não foi possível <span style="font-weight:bold; padding-left:5px">ATIVAR </span> a sua conta. Tente novamente ou envie uma mensagem ao desenvolvedor.</span>';
	echo '<script language="JavaScript">window.location="login-telegram.php";</script>';
}
else if($resultado2 > 0){
	
	$_SESSION['success_ativo'] = '<script> var segundos = 7; setTimeout(function(){ $("#cadastro").fadeOut();}, segundos*1000)</script><span id="cadastro" style="color:#27ae60; font-size:14px"><i class="fa fa-check"></i><span style="font-weight:bold; padding-left:5px"> Cadastro</span> confirmado com sucesso! Agora você pode ter acesso ao sistema.</span>';
	echo '<script language="JavaScript">window.location="login-telegram.php";</script>';
}

}
?>