<?php
ini_set('default_charset','UTF-8');
include "conexao.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en"  >
<head>
	<meta charset="utf-8"/>
	<title>Formulário de Cagastro Gilbertgram</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!--    <meta name="author" content="Gilbertgram" />
    <meta property="og:url" content="http://www.carlospiller.adv.br/telegram/login-telegram.php" />
    <meta name="keywords" content="Um elegante sistema de login baseado no Telegram.">
    <meta property="og:title" content="Sistema de Login Gilbertgram" />
    <meta property="og:site_name" content="Sistema de Login Gilbertgram">
    <meta property="og:description" content="Um elegante sistema de login baseado no Telegram." />
    <meta property="og:type" content="company">
    <meta property="og:image" itemprop="image" content="http://www.carlospiller.adv.br/telegram/share-miniatura.png" />
    <link itemprop="thumbnailUrl" href="http://www.carlospiller.adv.br/telegram/share-miniatura.png">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="fb:app_id" content="224868018369212" />
    <meta name="google-site-verification" content="t3RdCbid1pioDvxA2t0Z8sfqQ2c7putRE_LkbzMMiCs" />
-->
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
		
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="css/login-telegram.css" rel="stylesheet" type="text/css"/>

    <link href="assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>


	<link rel="shortcut icon" href="favicon.ico"/>
	<script src="assets/plugins/jquery.min.js" type="text/javascript" ></script>
<style>
.mensagemcadastro {
	opacity: 1; 
	position:relative; 
	right:0%; 
	display: block
}
.login_head_bg {
	background: #5682a3;
	height: 226px;
}
.login_head_wrap {
	height: 75px;
}
.login_head_submit_wrap {
    float: right;
}
.login_head_submit_btn, .login_head_anterior_btn, .login_head_submit_progress {
    font-size: 14px;
    line-height: 20px;
    padding: 27px 15px 28px;
    display: inline-block;
    color: #fff;
    font-weight: 400;
}
.icon-next-submit {
    width: 7px;
    height: 12px;
    display: inline-block;
    vertical-align: middle;
    margin-left: 10px;
    margin-top: -1px;
    background-image: url(https://web.telegram.org/img/icons/General.png);
    background-repeat: no-repeat;
    background-position: -18px -50px;
}
.login_head_submit_btn:hover {
    color: #fff;
}
.login_head_logo_link {
    display: inline-block;
    line-height: 30px;
    padding: 23px 15px 22px;
}
a {
    color: #3a6d99;
    text-decoration: none;
}
.icon-tg-logo {
    width: 30px;
    height: 30px;
    display: inline-block;
    vertical-align: top;
    margin-right: 10px;
    background-image: url(https://web.telegram.org/img/icons/General.png);
    background-repeat: no-repeat;
    background-position: -5px -10px;
}
.icon-tg-title {
    width: 100px;
    height: 25px;
    display: inline-block;
    vertical-align: middle;
    background-image: url(gilbertgram.png);
    background-repeat: no-repeat;
    background-position: 0 0;
    margin-top: 1px;
}
.c-content-box.c-size-md {
    padding: 50px 0 30px 0;
}
p {
	font-size: 14px;
}

@keyframes spinner {
  0% {
    transform: rotateZ(0deg);
  }
  100% {
    transform: rotateZ(359deg);
  }
}

.aguarde {
  display: block;
  width: 15px;
  height: 15px;
  position: relative;
  border: 3px solid #5682a3;
  border-top-color: rgba(255, 255, 255, 0.3);
  border-radius: 100%;
  left: 27%;
  top: 24%;
  opacity: 1;
  margin-left: -20px;
  margin-top: -20px;
  animation: spinner 0.6s infinite linear;
  transition: top 0.3s 0.3s ease, opacity 0.3s 0.3s ease, border-radius 0.3s ease;
  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2);
}

.proxima {
  display: block;
  width: 15px;
  height: 15px;
  position: relative;
  border: 3px solid #ffffff;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-radius: 100%;
  left: 155%;
  top: 5%;
  opacity: 1;
  margin-left: -20px;
  margin-top: -18px;
  animation: spinner 0.6s infinite linear;
  transition: top 0.3s 0.3s ease, opacity 0.3s 0.3s ease, border-radius 0.3s ease;
  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2);
}





/* Extra small devices (phones, 360px and down) CELULAR EM PÉ */
@media only screen and (min-width: 360px) {

.etapa-2 {
	text-align: center; position: absolute;right: 3%; top: 95px; opacity: 0
}
.form-input input ~ .label-2 {
	left: 26%
}

.mensagemcadastrook {
	opacity: 0; position:absolute; left:17.5%; width: 225px
}

}

/* Extra small devices (phones, 360px and down) CELULAR EM PÉ */
@media only screen and (min-width: 375px) {

.etapa-2 {
	text-align: center; position: absolute;right: 3%; top: 95px; opacity: 0
}
.form-input input ~ .label-2 {
	left: 26%
}

.mensagemcadastrook {
	opacity: 0; position:absolute; left:17.5%; width: 225px
}

}

/* Extra small devices (phones, 414px and down) CELULAR EM PÉ */
@media only screen and (min-width: 414px) {

.etapa-2 {
	text-align: center; position: absolute;right: 3%; top: 95px; opacity: 0
}
.form-input input ~ .label-2 {
	left: 20%
}

.mensagemcadastrook {
	opacity: 0; position:absolute; left:15.5%; width: 264px
}

}

/* Small devices (portrait tablets and large phones, 600px and up) ANDROID, IPHONE 6,7,8 (PLUS) DEITADO */
@media only screen and (min-width: 600px) {

.etapa-2 {
	text-align: center; position: absolute;right: 7%; top: 95px; opacity: 0
}
.form-input input ~ .label-2 {
	left: 39%
}

.mensagemcadastrook {
	opacity: 0; position:absolute; left:12.6%;
}

}

/* Small devices (portrait tablets and large phones, 667px and up) ANDROID, IPHONE 6,7,8 (PLUS) DEITADO */
@media only screen and (min-width: 667px) {

.etapa-2 {
	text-align: center; position: absolute;right: 7%; top: 95px; opacity: 0
}
.form-input input ~ .label-2 {
	left: 33.5%
}

.mensagemcadastrook {
	opacity: 0; position:absolute; left:9.4%; width: 517px
}

}

/* Medium devices (landscape tablets, 768px and up) IPAD, IPHONE X DEITADO*/
@media only screen and (min-width: 740px) {

.etapa-2 {
	text-align: center; position: absolute;right: 8%; top: 95px; opacity: 0
}
.form-input input ~ .label-2 {
	left: 33.5% !important
}

.mensagemcadastrook {
	opacity: 0; position:absolute; left:8.5%; width: 590px
}

}

/* Medium devices (landscape tablets, 768px and up) IPAD, IPHONE X DEITADO*/
@media only screen and (min-width: 768px) {

.etapa-2 {
	text-align: center; position: absolute;right: 8%; top: 95px; opacity: 0
}
.form-input input ~ .label-2 {
	left: 33.5% !important
}

.mensagemcadastrook {
	opacity: 0; position:absolute; left:8.4%; width: 600px
}

}

/* Medium devices (landscape tablets, 768px and up) IPAD, IPHONE X DEITADO*/
@media only screen and (min-width: 800px) {

.etapa-2 {
	text-align: center; position: absolute;right: 8%; top: 95px; opacity: 0
}
.form-input input ~ .label-2 {
	left: 33.5% !important
}

.mensagemcadastrook {
	opacity: 0; position:absolute; left:8.4%; width: 600px
}

}

/* Medium devices (landscape tablets, 768px and up) IPAD, IPHONE X DEITADO*/
@media only screen and (min-width: 812px) {

.etapa-2 {
	text-align: center; position: absolute;right: 8%; top: 95px; opacity: 0
}
.form-input input ~ .label-2 {
	left: 33.5% !important
}

.mensagemcadastrook {
	opacity: 0; position:absolute; left:8.4%; width: 600px
}

}




/* Large devices (laptops/desktops, 992px and up) IPAD DEITADO*/
@media only screen and (min-width: 992px) {

.etapa-2 {
	text-align: center; position: absolute;right: 8%; top: 30px; opacity: 0
}
.form-input input ~ .label-2 {
	left: 31% !important
}

.mensagemcadastrook {
	opacity: 0; position:absolute; left:12.6%;
}

}

/* Medium devices (landscape tablets, 1024px and up) IPAD, IPHONE X DEITADO*/
@media only screen and (min-width: 1024px) {

.etapa-2 {
	text-align: center; position: absolute;right: 8%; top: 30px; opacity: 0
}
.form-input input ~ .label-2 {
	left: 3% !important
}

.mensagemcadastrook {
	opacity: 0; position:absolute; left:9.6%; width: 496.667px
}

.col-md-4 {
	width:30%
}

.col-md-8 {
	width:70%
}

.col-md-offset-2 {
    margin-left: 15%;
}

}


/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {

.etapa-2 {
	text-align: center; position: absolute;right: 3%; top: 30px; opacity: 0
}
.label-2 {
	left: 28%
}

.mensagemcadastrook {
	opacity: 0; position:absolute; left:12.6%;
}

} 

/* Medium devices (landscape tablets, 1280px and up) IPAD, IPHONE X DEITADO*/
@media only screen and (min-width: 1280px) {

.etapa-2 {
	text-align: center; position: absolute;right: 8%; top: 30px; opacity: 0
}
.form-input input ~ .label-2 {
	left: 18% !important
}

.mensagemcadastrook {
	opacity: 0; position:absolute; left:7.2%; width: 660.667px
}

}

</style>
<script type="text/javascript">
	function somenteNumeros(e) {
        var charCode = e.charCode ? e.charCode : e.keyCode;
        // charCode 8 = backspace   
        // charCode 9 = tab
        if (charCode != 8 && charCode != 9) {
            // charCode 48 equivale a 0   
            // charCode 57 equivale a 9
            if (charCode < 48 || charCode > 57) {
                return false;
            }
        }
    }

    function proximoCampo(atual,proximo){
		if(atual.value.length >= atual.maxLength){
		document.getElementById(proximo).focus();
		}
	}

	function mS(tipo){
              
	document.getElementById('senha').type = tipo;
	document.getElementById('confisenha').type = tipo;
	              
	$('#exibe').attr('onclick','mS("password")').removeClass('fa-eye').addClass('fa-eye-slash');

	if(tipo == 'password'){

	$('#exibe').attr('onclick','mS("text")').removeClass('fa-eye-slash').addClass('fa-eye');

	}}

</script>
</head>




<body class="c-layout-header-fixed c-layout-header-6-topbar" style="background-color: #e7ebf0"> 
	<div class="login_head_bg">
 		<div class="c-content-box c-size-md ">
			<div class="container">
				<div class="c-shop-login-register-1">
					<form class="login" id="formcad" action="cadastro" method="post" enctype="multipart/form-data" autocomplete="off">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="login_head_wrap clearfix" style="margin-top: -30px;">
						      	<div class="login_head_submit_wrap">
						        	<a class="login_head_submit_btn" id="cadastrar" style="cursor: pointer; position: relative; left: 10px; top: 0px; z-index: 10">Cadastrar 
						        	</a>
						        	<i id="carregando" class="fa fa-angle-right" style="color: #fff; font-size: 22px; position: relative; top: 3px; left: -3px"></i>
						      	</div>
						      	<a class="login_head_logo_link" href="index.php" style="z-index: 10; display: block;">
						        	<i class="icon icon-tg-logo"></i>
						        	<i class="icon icon-tg-title"></i>
						      	</a>
						      
						      	<a class="login_head_anterior_btn anterior" id="anterior" style="cursor: pointer; position: relative; left: -10px; top: -4px; z-index: 10; display: none; color: #fff; width: 90px"><i id="carregando" class="fa fa-angle-left" style="color: #fff; font-size: 22px; position: relative; top: 3px; right: 2px"></i> Anterior 
						        </a>
				    		</div>
							<div class="panel panel-default c-panel">
								<div style="position: relative;left: 0; opacity: 1">
			                        <div style="padding: 40px 60px 0px 60px">
										<span class="mensagemcadastrook">
											<h2 style="color:#27ae60">Parabéns</h2>
											<p style="color:#27ae60">Seu cadastro junto ao sistema foi realizado com êxito. Você receberá um e-mail de ativação de conta. Ative o seu registro.</p>
										</span>
										<span class="mensagemcadastro">
											<h2>Cadastro</h2>
											<p>Preencha todos os campos para realizar o seu cadastro. Você receberá um email para ativação do seu acesso justo ao sistema.</p>
										</span>
									</div>
									<div class="panel-body c-panel-body" style="padding: 20px 60px 60px 60px">
									  	<div class="row">
									  		<div class="col-md-6">
									      		<label class="form-input input-effect">
									        		<input type="text" name="nome" id="nome"/>
									        		<span id="alertanome" class="label">Nome</span>
									        		<div id="nomelinha" class="underline"></div>
									      		</label>
									      		<label class="form-input input-effect">
									        		<input type="text" name="sobrenome" id="sobrenome"/>
									        		<span id="alertasobrenome" class="label">Sobrenome</span>
									        		<div id="sobrenomelinha" class="underline"></div>
									      		</label>
									      		<label class="form-input input-effect">
									        		<input type="text" name="nickname" id="nickname"/>
									        		<span id="alertanickname" class="label">Nickname</span>
									        		<div id="nicknamelinha" class="underline"></div>
									      		</label>
									      		<label class="form-input input-effect">
									        		<input type="text" name="email" id="email"/>
									        		<span id="alertaemail" class="label">E-mail</span>
									        		<div id="emaillinha" class="underline"></div>
									      		</label>
									      		
											</div>
											<div class="col-md-6">
												<div class="row">
            										<div class="col-md-4">
														<label class="form-input input-effect">
															
											        		<input type="<?php if($dispositivo == "web"){?>text<?php } else {?>tel<?php } ?>" name="ddd" id="ddd" maxlength="2" onkeypress="return somenteNumeros(event)" onkeyup="proximoCampo(this, 'telefone')"/>
											        		<span id="alertaddd" class="label">DDD</span>
											        		<div id="dddlinha" class="underline"></div>
											      		</label>
									      			</div>
            										<div class="col-md-8">
												      	<label class="form-input input-effect">
												        	<input type="<?php if($dispositivo == "web"){?>text<?php } else {?>tel<?php } ?>" name="telefone" id="telefone" maxlength="9" onkeypress="return somenteNumeros(event)" onkeyup="proximoCampo(this, 'frase')"/>
												        	<span id="alertatelefone" class="label">Número de telefone</span>
												        	<div id="telefonelinha" class="underline"></div>
												      	</label>
												    </div>
												</div>
										      	<label class="form-input input-effect">
									        		<input type="text" name="frase" id="frase"/>
									        		<span id="alertafrase" class="label">Frase do perfil</span>
									        		<div id="fraselinha" class="underline"></div>
									      		</label>
									      		<label class="form-input input-effect">
									        		<input type="password" name="senha" id="senha"/>
									        		<span id="alertasenha" class="label">Senha</span>
									        		<div id="senhalinha" class="underline"></div>
									      		</label>
									      		<label class="form-input input-effect">
									        		<input type="password" name="confisenha" id="confisenha"/>
									        		<span id="alertaconfisenha" class="label">Confirmação de senha</span>
									        		<div id="confisenhalinha" class="underline"></div>
									      		</label>
									      		<a id="exibe" onClick="mS('text')" style="cursor: pointer; position: relative; left: 5px; top: 2px; margin-top: -10px; font-size: 18px" class="fa fa-eye fa-1x"> <span style="font-family: 'Roboto Condensed', sans-serif; font-size: 14px">Clique aqui ára exibir as senhas</span></a>
										  	</div>
									  	</div>
									</div> 
								</div>
							</div>
							<div style="text-align: center;">
								<p style="margin: 0 0 10px;color: #84a2bc;font-size: 14px;line-height: 16px;text-align: center;">Bem vindo ao cliente web oficial do Gilbertgram. <a href="login-telegram.php"><i class="fa fa-sign-in"></i> Login</a></p>
								<a style="color: #84a2bc;font-weight: 700;font-size: 14px;line-height: 16px;text-align: center; cursor:pointer" data-toggle="modal" data-target="#suporte-form">Dificuldades de acesso?</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade c-content-suporte-form" id="suporte-form" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content c-square">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">SUPORTE GILBERTGRAM</h4>
            </div>
            <div class="modal-body">
                <p style="text-align:justify">Ao informar o seu telefone com DDD, encaminharemos para o e-mail associado ao número informado um código de confirmação de acesso.<br> Caso não lembre o número ou não tenha mais acesso ao seu e-mail cadastrado, entre em contato com o desenvolvedor pelo telefone: <span style="color:#5682a3; font-weight:bold">(96)99151-1351</span>.
                </p>
            </div>
            <div class="modal-footer">								
				<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Fechar</button>
			</div>
        </div>
    </div>
</div>

<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
<script src='js/cadastro.js'></script>
<script src='js/google-login.js'></script>
<script >

	$('input#nome').focus();

	$(window).load(function(){


		$(".form-input input").val("");
		
		$(".input-effect input").focusout(function(){

			if($(this).val() != ""){
				$(this).addClass("has-content");
			}else{
				$(this).removeClass("has-content");
			}
		})
	});

</script>
</body>
</html>