<?php
ini_set('default_charset','UTF-8');
include "conexao.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en"  >
<head>
	<meta charset="utf-8"/>
	<title>Sistema Gilbertgram</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!--    <meta name="author" content="Gilbertgram" />
    <meta property="og:url" content="http://www.carlospiller.adv.br/telegram/index.php" />
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
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <!-- END GLOBAL MANDATORY STYLES -->

  <link href="assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
  <link href="assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
  <link href="assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
        <!-- END: BASE PLUGINS -->
  
  
    <!-- BEGIN THEME STYLES -->
  <link href="assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
  <link href="assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
  <link href="assets/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
  <link href="assets/demos/default/css/custom.css" rel="stylesheet" type="text/css"/>



	<link rel="shortcut icon" href="favicon.ico"/>

<style>
.mensagem {
	opacity: 1; 
	position:relative; 
	right:0%; 
	display: block;
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
    padding: 85px 0 15px 0;
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
  left: 32%;
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
	left: 12%
}

.mensagem2, .mensagem3 {
	opacity: 0; position:absolute; left:18.3%; width: 210px
}

}

/* Extra small devices (phones, 360px and down) CELULAR EM PÉ */
@media only screen and (min-width: 375px) {

.etapa-2 {
	text-align: center; position: absolute;right: 3%; top: 95px; opacity: 0
}
.form-input input ~ .label-2 {
	left: 14%
}

.mensagem2, .mensagem3 {
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

.mensagem2, .mensagem3 {
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

}

/* Small devices (portrait tablets and large phones, 667px and up) ANDROID, IPHONE 6,7,8 (PLUS) DEITADO */
@media only screen and (min-width: 667px) {

.etapa-2 {
	text-align: center; position: absolute;right: 7%; top: 95px; opacity: 0
}
.form-input input ~ .label-2 {
	left: 33.5%
}

.mensagem2, .mensagem3 {
	opacity: 0; position:absolute; left:9.4%; width: 517px
}

}

/* Small devices (portrait tablets and large phones, 667px and up) ANDROID, IPHONE 6,7,8 (PLUS) DEITADO */
@media only screen and (min-width: 736px) {

.etapa-2 {
	text-align: center; position: absolute;right: 7%; top: 95px; opacity: 0
}
.form-input input ~ .label-2 {
	left: 33.5%
}

.mensagem2, .mensagem3 {
	opacity: 0; position:absolute; left:8.5%; width: 586px
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

.mensagem2, .mensagem3 {
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

.mensagem2, .mensagem3 {
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

.mensagem2, .mensagem3 {
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

.mensagem2, .mensagem3 {
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

}

/* Medium devices (landscape tablets, 1024px and up) IPAD, IPHONE X DEITADO*/
@media only screen and (min-width: 1024px) {

.etapa-2 {
	text-align: center; position: absolute;right: 8%; top: 30px; opacity: 0
}
.form-input input ~ .label-2 {
	left: 3% !important
}

.mensagem2, .mensagem3 {
	opacity: 0; position:absolute; left:20.4%; width: 173.317px
}

.col-md-4 {
  width:50%
}

.col-md-8 {
  width:60%
}

.col-md-offset-4 {
    margin-left: 25%;
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


} 

/* Medium devices (landscape tablets, 1280px and up) IPAD, IPHONE X DEITADO*/
@media only screen and (min-width: 1280px) {

.etapa-2 {
	text-align: center; position: absolute;right: 2%; top: 30px; opacity: 0
}
.form-input input ~ .label-2 {
	left: 27.5% !important
}

.mensagem2, .mensagem3 {
	opacity: 0; position:absolute; left:12.5%; width: 362.617px
}

.col-md-4 {
	width:40%
}

.col-md-8 {
	width:60%
}

.col-md-offset-4 {
    margin-left: 30%;
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
</script>
</head>




<body class="c-layout-header-fixed c-layout-header-6-topbar" style="background-color: #e7ebf0"> 
	

  <div class="login_head_bg">
 		<div class="c-content-box c-size-md ">
			<div class="container">
				<div class="c-shop-login-register-1">
					<form id="logintelegram" action="" method="post">
					<div class="row">

						<div class="col-md-4 col-md-offset-4">
							<div class="panel panel-default c-panel">
								<div id="etapa1" style="position: relative;left: 0; opacity: 1">
									<div style="padding: 40px 60px 30px 60px">
										<?php if(!empty($_SESSION['alerta_login'])){ ?>
										<?php echo $_SESSION['alerta_login']; ?>                     
										<?php unset($_SESSION['alerta_login']); } ?> 

										<?php if(!empty($_SESSION['success_ativo'])){ ?>
										<?php echo $_SESSION['success_ativo']; ?>                     
										<?php unset($_SESSION['success_ativo']); } ?> 

										<span class="mensagem">
											<h2>Bem vindo ao Gilbertgram</h2>
											<p>Escolha abaixo uma das opções para seguir sua navegação.</p>
										</span>
										<div class="row" style="padding: 20px 0px 20px 0px">
										  	<div class="col-md-6">
										      <label class="form-input">
										      	<button type="button" onclick="window.location.href='login-telegram.php'" class="btn btn-success btn-md" style="width:100%"><i class="fa fa-sign-in"></i> LOGIN</button> 
										      </label>
											</div>
											<div class="col-md-6">
										      <label class="form-input">
										      	<button type="button" onclick="window.location.href='cadastro-telegram.php'" class="btn btn-success btn-md" style="width:100%"><i class="fa fa-plus"></i> CADASTRE-SE</button>
										      </label>
										  	</div>
									 	</div>
									</div>
								</div>
							</div>
							<div style="text-align: center;">
								<p style="margin: 0 0 10px;color: #84a2bc;font-size: 14px;line-height: 16px;text-align: center;">Bem vindo ao cliente web oficial do Gilbertgram.</p>
								<a style="color: #84a2bc;font-weight: 700;font-size: 14px;line-height: 16px;text-align: center; cursor:pointer" data-toggle="modal" data-target="#suporte-form">Dificuldades de acesso?</a>
							</div>
              <div class="container" style="margin-top: 20px">
                <div class="c-content-person-1-slider" data-slider="owl">
                  <div class="owl-carousel owl-theme c-theme c-owl-nav-center" data-rtl="false" data-items="4" data-slide-speed="8000"> 
<?php
$sql = mysqli_query($connect,"SELECT * FROM users ORDER BY id ASC");
if(mysqli_num_rows($sql) > 0){
while($ln = mysqli_fetch_object($sql)):
?>
                    <div class="item">
                      <div class="c-content-person-1">
                        <div class="c-caption c-content-overlay">
                          <div class="c-overlay-wrapper">
                            <div class="c-overlay-content">
                              <a href="img/<?php echo $ln->foto; ?>" data-lightbox="fancybox" data-fancybox-group="gallery-1">
                                <i class="fa fa-plus"></i>
                              </a>
                            </div>
                          </div>
                          <img class="c-overlay-object img-responsive" src="img/<?php echo $ln->foto; ?>" alt="<?php echo $ln->nome; ?> <?php echo $ln->sobrenome; ?>">
                        </div>
                        <div class="c-body">
                          <div class="c-head">
                            <div class="c-name c-font-uppercase c-font-bold"><?php echo $ln->nickname; ?></div>
                          </div>
                        </div>
                      </div>
                    </div>   
<?php endwhile ?>  
<?php }else if(mysqli_num_rows($sql) == false){?>
                      Em breve você verá aqui a galeria de usuários cadastrados.
<?php } ?>
                  </div>
                </div>
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


  <script src="assets/plugins/jquery.min.js" type="text/javascript" ></script>

  <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
  <script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
  <script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
  <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
  <script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
  <script src="assets/base/js/components.js" type="text/javascript"></script>
  

</body>
</html>