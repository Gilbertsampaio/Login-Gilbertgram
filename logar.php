<?php
ini_set('default_charset','UTF-8');
session_start();
include_once('conexao.php');

require_once("class/class.phpmailer.php");
$mail = new PHPMailer(true);
$mail->IsSMTP();

function anti_sql_injection($string)
	{
		include('conexao.php');
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysqli_real_escape_string($connect,$string);
		return $string;
	}

$sql2="select * from gestor where email='".anti_sql_injection($_POST['email'])."'"; 
$resultados2 = mysqli_query($connect,$sql2)or die (mysqli_error());
$res2=mysqli_fetch_array($resultados2); 


if($res2['acesso'] == 'Bloqueado'){//CONDIÇÃO 1
		echo 1;
	}//CONDIÇÃO 1
	else if($res2['status'] == 'Inativo'){//CONDIÇÃO 2
		echo 2;
	}//CONDIÇÃO 2
	else{//ELSE 1
	  
  	$email=mysqli_real_escape_string($connect,$_POST['email']);	//Pegando dados passados por AJAX
  	$senha=mysqli_real_escape_string($connect,$_POST['senha']);
  	if(isset($_POST['captcha'])){
  	$captcha = $_POST['captcha'];}
  	//Consulta no banco de dados
  	$sql="select * from gestor where email='".anti_sql_injection($_POST['email'])."' and senha='".sha1(anti_sql_injection($_POST['senha']))."'"; 
  	$resultados = mysqli_query($connect,$sql)or die (mysqli_error());
  	$res=mysqli_fetch_array($resultados); //

	if($res['acesso'] == 'Bloqueado'){//CONDIÇÃO 3
		echo 1;
	}//CONDIÇÃO 3
	else if($res['status'] == 'Inativo'){//CONDIÇÃO 4
		echo 2;
	}//CONDIÇÃO 4
		else{//ELSE 2
		
		if($email == ''){//CONDIÇÃO 5
			echo 3;
		}//CONDIÇÃO 5
		else
		if($senha == ''){//CONDIÇÃO 6
			echo 4;
		}//CONDIÇÃO 6
		
		else{//ELSE 3
			
			if (@mysqli_num_rows($resultados) == 0){//CONDIÇÃO 10
				echo 5;	//EMAIL E/OU SENHA INCORRETOS
		
			$q="select * from gestor where email='".anti_sql_injection($_POST['email'])."'"; 
			$resultados3 = mysqli_query($connect,$q)or die (mysqli_error());
			$teste=mysqli_fetch_array($resultados3); //
			$ID = $teste['ID'];
			$login = $teste['nome'];
		
			if($teste && $teste['status'] == 'Ativo'){//CONDIÇÃO 10.1
				
			$tenta = $teste['tentativa']+1;

				if($tenta==1){//CONDIÇÃO 10.1.1
						$sql = mysqli_query(
						$connect,"UPDATE gestor SET tentativa='1', last_acesso=NOW() WHERE email ='{$email}'");
	  			}//CONDIÇÃO 10.1.1
				else if($tenta==2){//CONDIÇÃO 10.1.2
		 				$sql = mysqli_query($connect,"UPDATE gestor SET tentativa='{$tenta}', last_acesso=NOW() WHERE email ='{$email}'");
				}//CONDIÇÃO 10.1.2
				else if($tenta==3) {//CONDIÇÃO 10.1.3
						$sql = mysqli_query($connect,"UPDATE gestor SET acesso = 'Bloqueado', tentativa='{$tenta}', last_acesso=NOW() WHERE email ='{$email}'");
						
			function makeRandomPassword(){
 
        	$salt = "abchefghjkmnpqrstuvwxyz0123456789";
        	srand((double)microtime()*1000000);
        	$i = 0;
 
        	while ($i <= 7){
            $num = rand() % 33;
            $tmp = substr($salt, $num, 1);
            $pass = @$pass . $tmp;
            $i++;
        		}
        		return $pass;
    		}
 
    		$senha_randomica = makeRandomPassword();
    		$senha = $senha_randomica;
    		$teste = sha1($senha_randomica);
			
			
try {
     $mail->Host = 'smtp.motelleblon.com';
     $mail->SMTPAuth   = true; 
     $mail->Port       = 587;
     $mail->Username = 'contato@motelleblon.com';
     $mail->Password = 'gmos7380';
 
     //Define o remetente
     // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
     $mail->SetFrom('contato@motelleblon.com', 'Equipe Conveniary');
     $mail->AddReplyTo('contato@motelleblon.com', 'Equipe Conveniary');
     $mail->Subject = utf8_decode('Seu Login está bloqueado - Conveniary');
 	 
     //Define os destinatário(s)
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     $mail->AddAddress($email, 'Nova Senha');
 
     //Campos abaixo são opcionais 
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
     //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
     //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
 
     //Define o corpo do email
		 
     $mail->MsgHTML = utf8_decode("<h2>Caro <span style='text-transform:capitalize'>{$login}</span>, seu acesso está bloqueado.</h2>
               Nosso sistema bloqueou seu acesso após 03 tentativas de senhas inválidas para o Usuário <b>{$email}</b>.<br><br> Clique no link abaixo para realizar o desbloqueio. Caso não tenha sido você, pedimos desculpas pelo transtorno.<br><br><a href ='{$url}/desbloquear.php?id=$ID&code=$teste'>{$url}/desbloquear.php?id=$ID&code=$teste</a><br><br>
				NÃO ESQUEÇA DE ALTERAR A SUA NOVA SENHA!<br><br><strong>Nova Senha</strong>: {$senha_randomica}<br><br>
<a href='{$url}/index.php'>
               {$url}/conveniary/index.php
               </a><br><br>
               Obrigado!<br><br>
               Webmaster<br><br><br>
               Esta é uma mensagem automática, por favor não responda!<br><hr>"); 
 	
	 
     ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
     //$mail->MsgHTML(file_get_contents('arquivo.html'));
 
     $mail->Send();
     
    //caso apresente algum erro é apresentado abaixo com essa exceção.
    }catch (phpmailerException $e) {
      echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
}
			
			$senha = $senha_randomica;
    		$teste = sha1($senha_randomica);
 			$sql = mysqli_query($connect,"UPDATE gestor SET senha='{$teste}'WHERE email ='{$email}'");
			
			exit;	
					}//CONDIÇÃO 10.1.3
	  			}//CONDIÇÃO 10.1
			}//CONDIÇÃO 10
			
			else if(@mysqli_num_rows($resultados) == 1 && $res['acesso'] == 'Liberado'){//CONDIÇÃO 11
				echo 6;	//Responde sucesso
				
		if(!isset($_SESSION)){ 	//verifica se há sessão aberta
		session_start();		//Inicia seção
		}

		//Abrindo seções
		$_SESSION['id_usuario'] = $res['ID'];
		$_SESSION['nome_usuario'] = $res['nome'];
		$_SESSION['sobrenome_usuario'] = $res['sobrenome'];
		$_SESSION['email'] = $res['email'];
		$_SESSION['categoria_usuario'] = $res['categoria'];
		$_SESSION['foto'] = $res['foto'];
		$horario = date("H:i:s");
		$partes = explode(':', $horario);
		$_SESSION['horario'] = $partes[0] * 3600 + $partes[1] * 60 + $partes[2];
		
		$sql = mysqli_query($connect,"UPDATE gestor SET status_chat='online' WHERE email ='{$email}' and senha='".sha1($senha)."'");
		
		//$horarioAtual = date("H:i:s");
		//$_SESSION['horario'] = strtotime('1970-01-01 '.$horarioAtual.'UTC');
		
					
		exit;	
				}//CONDIÇÃO 11
			}//ELSE 3
		}//ELSE 2
	}//ELSE 1

?>