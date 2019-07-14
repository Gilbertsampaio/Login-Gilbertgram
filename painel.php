<?php
ini_set('default_charset','UTF-8');
include "conexao.php";
session_start();

$id = $_SESSION['id'];
$login_status = $_SESSION['login_status'];

$sql = "SELECT * FROM users WHERE id='".$id."' and login_status='1'"; 
$resultados = mysqli_query($connect,$sql) or die (mysqli_error());

if($login_status == '1' && mysqli_num_rows($resultados) > 0){

  $nome     = $_SESSION['nome'];
  $sobrenome  = $_SESSION['sobrenome'];
  
} else {

  header("location: login-telegram.php");

  $_SESSION['alerta_login'] = '<script> var segundos = 5; setTimeout(function(){ $("#sessaoencerrada").fadeOut();}, segundos*1000)</script><span id="sessaoencerrada" style="color:red; font-size:12px">Você não possui permissão para acessar essa página.</span>';

}
?>

<h3>Olá <?php echo $nome; ?> <?php echo $sobrenome; ?>, seja bem vindo a página privada de acesso.</h3><br>
Clique <a style="cursor: pointer; font-weight: bold;" onclick="sair()">aqui</a> para sair do sistema.

<script language="Javascript">
function sair() {
  location.href='logout.php?id=<?php echo $id; ?>';
}
</script>
