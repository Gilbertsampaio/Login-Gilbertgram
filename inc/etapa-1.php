<?php
ini_set('default_charset','UTF-8');
session_start();
?>
<div style="padding: 40px 60px 0px 60px">
	<?php if(!empty($_SESSION['alerta_login'])){ ?>
	<?php echo $_SESSION['alerta_login']; ?>                     
	<?php unset($_SESSION['alerta_login']); } ?> 

	<?php if(!empty($_SESSION['success_ativo'])){ ?>
	<?php echo $_SESSION['success_ativo']; ?>                     
	<?php unset($_SESSION['success_ativo']); } ?> 

	<span class="mensagem3">
		<h2 style="color:#e2726f">Erro</h2>
		<p style="color:#e2726f">Verificamos que você ainda não ativou a sua conta. Você receberá um e-mail com o link de ativação!</p>
	</span>
	<span class="mensagem2">
		<h2 style="color:#e2726f">Erro</h2>
		<p style="color:#e2726f">Um dos valores informados não correspondem aos do sistema. Tente novamente!</p>
	</span>
	<span class="mensagem">
		<h2>Entrar</h2>
		<p>Insira seu número de telefone com DDD para receber no seu e-mail o token de acesso.</p>
	</span>
	
	</div>
	<input type="hidden" name="inputetapa1" id="inputetapa1" value="1" />
	<div class="panel-body c-panel-body" style="padding: 20px 60px 60px 60px">
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
        <input type="<?php if($dispositivo == "web"){?>text<?php } else {?>tel<?php } ?>" name="telefone" id="telefone" maxlength="9" onkeypress="return somenteNumeros(event)" onkeyup="proximoCampo(this, 'submeter')"/>
        <span id="alertatelefone" class="label">Número de telefone</span>
        <div id="telefonelinha" class="underline"></div>
      </label>
  	</div>
  </div>
</div>

<script >

	$('input#ddd').focus();

	
		$(".form-input input").val("");

		
		$(".input-effect input").focusout(function(){

			if($(this).val() != ""){
				$(this).addClass("has-content");
			}else{
				$(this).removeClass("has-content");
			}
		});
	

</script>