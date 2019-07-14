<?php  
ini_set('default_charset','UTF-8');
include "../conexao.php";
session_start();

require_once("../class/class.phpmailer.php");
$mail = new PHPMailer(true);
$mail->IsSMTP();

$ddd = mysqli_real_escape_string($connect,$_POST["ddd"]);
$telefone = mysqli_real_escape_string($connect,$_POST["telefone"]);

$sql = "SELECT * FROM users WHERE ddd='".$ddd."' and telefone='".$telefone."'"; 
$resultados = mysqli_query($connect,$sql) or die (mysqli_error());
$res = mysqli_fetch_array($resultados);
$id = $res['id'];
$login_status = $res['login_status'];
$email = $res['email'];
$nome = $res['nome'];
$sobrenome = $res['sobrenome'];
$destinatario = $nome.' '.$sobrenome;

	if($ddd == ''){

		echo 2;

	} else if($telefone == ''){

		echo 3;

	} else if (mysqli_num_rows($resultados) == 0){

		echo 4;

	} else if ($login_status == '3'){

		echo 5;

		try {
		
	     include "../autenticaphpmailer.php";

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

	} else if (mysqli_num_rows($resultados) > 0){

		echo 1;

		$sql2 = "SELECT * FROM token WHERE id_user='".$id."'"; 
		$resultados2 = mysqli_query($connect,$sql2) or die (mysqli_error());

		function makeRandomPassword(){
		
		$salt = "0123456789";
		srand((double)microtime()*1000000);
		$i = 0;

		while ($i <= 7){
		$num = rand() % 10;
		$tmp = substr($salt, $num, 1);
		$pass = @$pass . $tmp;
		$i++;
		}
			return $pass;
		}
 
		$token = makeRandomPassword();

		if (mysqli_num_rows($resultados2) == 0){

			$sql = mysqli_query($connect,"INSERT INTO token (id_user, token) VALUES ('$id', '$token')");

		} else if (mysqli_num_rows($resultados2) > 0){

			mysqli_query($connect,"UPDATE token SET token = '$token' WHERE id_user = '$id'");

		}

		

		try {
		
	     include "../autenticaphpmailer.php";

	     $assunto = '=?utf-8?B?'.base64_encode("CÓDIGO DE ACESSO - verificação de segurança").'?=';

	     $mail->SetFrom('gilbert@carlospiller.adv.br', $assunto);
	     $mail->AddReplyTo('gilbert@carlospiller.adv.br', 'Sistema do Gilbertgram');
	     $mail->Subject = $assunto;	 	 
	     $mail->AddAddress($email, $destinatario);
		 $mail->CharSet = 'UTF-8';	 
	     $mail->MsgHTML('<div style="padding:20px; font-family: verdana"><h3>Token de acesso ao sistema</h3><p style="text-align:justify"><b>'.$nome.'</b>, segue abaixo o seu código de acesso ao sistema.<br>Informe ele na tela de login.<br><br><b>CÓDIGO DE ACESSO:</b> '.$token.'</div></div>');	 
	     
	     $mail->Send();		     

		}catch (phpmailerException $e) {
		      	echo $e->errorMessage();
		}

	} 
?>