<?php  
ini_set('default_charset','UTF-8');
include "conexao.php";
session_start();

require_once("class/class.phpmailer.php");
$mail = new PHPMailer(true);
$mail->IsSMTP();


$nome = mysqli_real_escape_string($connect,$_POST["nome"]);
$sobrenome = mysqli_real_escape_string($connect,$_POST["sobrenome"]);
$nickname = mysqli_real_escape_string($connect,$_POST["nickname"]);
$frase = mysqli_real_escape_string($connect,$_POST["frase"]);
$email = mysqli_real_escape_string($connect,$_POST["email"]);
$senha = $_POST["senha"];
$confisenha = $_POST["confisenha"];
$ddd = mysqli_real_escape_string($connect,$_POST["ddd"]);
$telefone = mysqli_real_escape_string($connect,$_POST["telefone"]);
$login_status = '3';
$last_login = date("Y-m-d H:i:s");

$sql = "SELECT * FROM users WHERE nickname='".$nickname."' OR email='".$email."' OR ddd='".$ddd."' AND telefone='".$telefone."'"; 
$resultados = mysqli_query($connect,$sql) or die (mysqli_error());
$res = mysqli_fetch_array($resultados);



	if($nome == ''){

		echo 2;

	} else if($sobrenome == ''){

		echo 3;

	} else if($nickname == ''){

		echo 4;

	} else if($nickname == $res['nickname']){

		echo 5;

	} else if($email == ''){

		echo 6;

	} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

		echo 7;

	} else if($email == $res['email']){

		echo 8;

	} else if($ddd == ''){

		echo 9;

	} else if($telefone == ''){

		echo 10;

	} else if($ddd == $res['ddd'] && $telefone == $res['telefone']){

		echo 11;

	} else if($frase == ''){

		echo 12;

	} else if($senha == ''){

		echo 13;

	} else if (!preg_match("/^.*(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W+)(?=^.{6,50}$).*$/",$senha)) { 

		echo 16;

	} else if($confisenha == ''){

		echo 14;

	} else if($senha != $confisenha){

		echo 15;

	} else {
 
			echo 1;

			$senha_descrypt = $senha;
			$senha = sha1($_POST["senha"]);


			$sql = mysqli_query($connect,"INSERT INTO users (nome, sobrenome, nickname, frase, email, email_adicional, ddd, telefone, senha, senha_descrypt, foto, login_status, last_login) VALUES ('$nome', '$sobrenome', '$nickname', '$frase', '$email', '', '$ddd', '$telefone', '$senha', '$senha_descrypt', 'user.png', '$login_status', '$last_login')");

			$id = mysqli_insert_id($connect);
  			$_SESSION['nome'] = $nome;
  			$_SESSION['sobrenome'] = $sobrenome;
  			$_SESSION['nickname'] = $nickname;
  			$_SESSION['frase'] = $frase;
  			$_SESSION['email'] = $email;
  			$_SESSION['email_adicional'] = $email_adicional;
  			$_SESSION['foto'] = 'user.png';
  			$_SESSION['last_login'] = $last_login;
  			$_SESSION['ddd'] = $ddd;
  			$_SESSION['telefone'] = $telefone;
  			$_SESSION['senha'] = sha1($senha);
  			$_SESSION['senha_descrypt'] = $senha_descrypt;
  			$_SESSION['id'] = $id;

  			$sql = mysqli_query($connect,"INSERT INTO seguranca (id_user, pergunta1, pergunta2, pergunta3, resposta1, resposta2, resposta3) VALUES ('$id', '', '', '', '', '', '')");

  			try {
		
		     include "autenticaphpmailer.php";

		     $assunto = '=?utf-8?B?'.base64_encode("ATIVAÇÃO DE CONTA - link de ativação").'?=';

		     $mail->SetFrom('gilbert@carlospiller.adv.br', $assunto);
		     $mail->AddReplyTo('gilbert@carlospiller.adv.br', 'Sistema do Gilbertgram');
		     $mail->Subject = $assunto;	 	 
		     $mail->AddAddress($email, $destinatario);
			 $mail->CharSet = 'UTF-8';	 
		     $mail->MsgHTML('<div style="padding:20px; font-family: verdana"><h3>Ativação de conta</h3><p><b>'.$nome.'</b>, segue abaixo o link para ativação de conta de acesso ao sistema.<br><br><b>Lembre-se que é necessário a ativação de conta para ter acesso ao sistema.</b><br><br><br><a style="padding: 10px; background-color: blue;color: #fff; font-size: 14px; text-decoration: none;" href="http://carlospiller.adv.br/telegram/ativar.php?id='.$id.'&token='.$senha.'">ATIVAR CONTA</a><br><br><br><div>Se preferir, copie e cole o link no navegador.<br><br><b>LINK DE ATIVAÇÃO:</b> http://carlospiller.adv.br/telegram/ativar.php?id='.$id.'&token='.$senha.'</div></div>');	 
		     
		     $mail->Send();		     

			}catch (phpmailerException $e) {
			      	echo $e->errorMessage();
			}
	}

?>