$(document).ready(function(){

	$('#cadastrar').click(function() {

        $('#formcad').submit();
    });

	$('#formcad').submit(function(){
	
		var nome=$('#nome').val();
		var sobrenome=$('#sobrenome').val();
		var nickname=$('#nickname').val();
		var email=$('#email').val();
		var ddd=$('#ddd').val();
		var telefone=$('#telefone').val();
		var frase=$('#frase').val();
		var senha=$('#senha').val();
		var confisenha=$('#confisenha').val();

		if(nome != '' && sobrenome != '' && nickname != '' && email != '' && ddd != '' && telefone != '' && frase != '' && senha != '' && confisenha != ''){
								  
			$('#cadastrar').html('Validando <i class="proxima"></i>');
			$('#carregando').css({ opacity: 0 });

		}
		
		$.ajax({			
			url:"cadastrar.php",			
			type:"post",				
			data: "nome="+nome+"&sobrenome="+sobrenome+"&nickname="+nickname+"&email="+email+"&ddd="+ddd+"&telefone="+telefone+"&frase="+frase+"&senha="+senha+"&confisenha="+confisenha,	
			success: function (result){			
								
				if(result==1){	

					$('#cadastrar').html('Cadastrar');				 
					$('#carregando').css({ opacity: 1 });

					$(".mensagemcadastro").animate({opacity:0});
					$(".mensagemcadastrook").animate({opacity:1});
				
					var segundos = 8;
					setTimeout(function(){ 
					$(".mensagemcadastro").animate({opacity:1});
					$(".mensagemcadastrook").animate({opacity:0});
					}, segundos*1000);


				  	$('input#nome').val("");
					$('input#sobrenome').val("");
					$('input#nickname').val("");
					$('input#frase').val("");
					$('input#email').val("");
					$('input#senha').val("");
					$('input#confisenha').val("");
					$('input#ddd').val("");
					$('input#telefone').val("");

					$('#nomelinha').addClass('underline').prop('style', '');
					$('#sobrenomelinha').addClass('underline').prop('style', '');
					$('#nicknamelinha').addClass('underline').prop('style', '');
					$('#fraselinha').addClass('underline').prop('style', '');
					$('#emaillinha').addClass('underline').prop('style', '');
					$('#senhalinha').addClass('underline').prop('style', '');
					$('#confisenhalinha').addClass('underline').prop('style', '');
					$('#dddlinha').addClass('underline').prop('style', '');
					$('#telefonelinha').addClass('underline').prop('style', '');

					$('span#alertanome').css('color', '#868e96').html('Nome').fadeIn("fast");
					$('span#alertasobrenome').css('color', '#868e96').html('Sobrenome').fadeIn("fast");
					$('span#alertanickname').css('color', '#868e96').html('Nickname').fadeIn("fast");
					$('span#alertaemail').css('color', '#868e96').html('E-mail').fadeIn("fast");
					$('span#alertaddd').css('color', '#868e96').html('DDD').fadeIn("fast");
					$('span#alertatelefone').css('color', '#868e96').html('Número de telefone').fadeIn("fast");
					$('span#alertafrase').css('color', '#868e96').html('Frase do Perfil').fadeIn("fast");
					$('span#alertasenha').css('color', '#868e96').html('Senha').fadeIn("fast");
					$('span#alertaconfisenha').css('color', '#868e96').html('Confirmação de senha').fadeIn("fast");


					$('input#nome').focus();
					return false;
				}
				
				if(result==2){

					$('span#alertanome').css({'color':'#e2726f'}).html('O Nome não foi informado').fadeIn("fast");
					$('#nomelinha').css({'background-color':'#e2726f', 'height':'2px'});
					$('input#nome').focus();
					return false;

				} else {

					$('span#alertanome').css('color', '#868e96').html('Nome').fadeIn("fast");
					$('#nomelinha').addClass('underline').prop('style', '');
				}

				if(result==3){

					$('span#alertasobrenome').css({'color':'#e2726f'}).html('O Sobreome não foi informado').fadeIn("fast");
					$('#sobrenomelinha').css({'background-color':'#e2726f', 'height':'2px'});
					$('input#sobrenome').focus();
					return false;

				} else {

					$('span#alertasobrenome').css('color', '#868e96').html('Sobrenome').fadeIn("fast");
					$('#sobrenomelinha').addClass('underline').prop('style', '');
				}

				if(result==4){

					$('span#alertanickname').css({'color':'#e2726f'}).html('O Nickname não foi informado').fadeIn("fast");
					$('#nicknamelinha').css({'background-color':'#e2726f', 'height':'2px'});
					$('input#nickname').focus();
					return false;

				} else {

					$('span#alertanickname').css('color', '#868e96').html('Nickname').fadeIn("fast");
					$('#nicknamelinha').addClass('underline').prop('style', '');
				}

				if(result==5){

					$('span#alertanickname').css({'color':'#e2726f'}).html('O Nickname não está disponível').fadeIn("fast");
					$('#nicknamelinha').css({'background-color':'#e2726f', 'height':'2px'});
					$('input#nickname').val("");
					$('input#nickname').focus();
					return false;

				} else {

					$('span#alertanickname').css('color', '#868e96').html('Nickname').fadeIn("fast");
					$('#nicknamelinha').addClass('underline').prop('style', '');
				}

				if(result==6){

					$('span#alertaemail').css({'color':'#e2726f'}).html('Informe o seu E-mail').fadeIn("fast");
					$('#emaillinha').css({'background-color':'#e2726f', 'height':'2px'});
					$('input#email').focus();
					return false;

				} else {

					$('span#alertaemail').css('color', '#868e96').html('E-mail').fadeIn("fast");
					$('#emaillinha').addClass('underline').prop('style', '');
				}

				if(result==7){

					$('span#alertaemail').css({'color':'#e2726f'}).html('Informe um E-mail válido').fadeIn("fast");
					$('#emaillinha').css({'background-color':'#e2726f', 'height':'2px'});
					$('input#email').val("");
					$('input#email').focus();
					return false;

				} else {

					$('span#alertaemail').css('color', '#868e96').html('E-mail').fadeIn("fast");
					$('#emaillinha').addClass('underline').prop('style', '');
				}

				if(result==8){

					$('span#alertaemail').css({'color':'#e2726f'}).html('O E-mail não está disponível').fadeIn("fast");
					$('#emaillinha').css({'background-color':'#e2726f', 'height':'2px'});
					$('input#email').val("");
					$('input#email').focus();
					return false;

				} else {

					$('span#alertaemail').css('color', '#868e96').html('E-mail').fadeIn("fast");
					$('#emaillinha').addClass('underline').prop('style', '');
				}

				if(result==9){

					$('span#alertaddd').css({'color':'#e2726f'}).html('Digite o DDD').fadeIn("fast");
					$('#dddlinha').css({'background-color':'#e2726f', 'height':'2px'});
					$('input#ddd').focus();
					return false;

				} else {

					$('span#alertaddd').css('color', '#868e96').html('DDD').fadeIn("fast");
					$('#dddlinha').addClass('underline').prop('style', '');
				}

				if(result==10){

					$('span#alertatelefone').css({'color':'#e2726f'}).html('Informe o número de telefone').fadeIn("fast");
					$('#telefonelinha').css({'background-color':'#e2726f', 'height':'2px'});
					$('input#telefone').focus();
					return false;

				} else {

					$('span#alertatelefone').css('color', '#868e96').html('Número de telefone').fadeIn("fast");
					$('#telefonelinha').addClass('underline').prop('style', '');
				}

				if(result==11){

					$('span#alertatelefone').css({'color':'#e2726f'}).html('Telefone já cadastrado no sistema').fadeIn("fast");
					$('#telefonelinha').css({'background-color':'#e2726f', 'height':'2px'});
					$('span#alertaddd').css({'color':'#e2726f'}).html('DDD').fadeIn("fast");
					$('#dddlinha').css({'background-color':'#e2726f', 'height':'2px'});

					$('input#ddd').val("");
					$('input#telefone').val("");
					$('input#ddd').focus();
					$('.form-input input#telefone').removeClass('has-content');
					return false;

				} else {

					$('span#alertatelefone').css('color', '#868e96').html('Número de telefone').fadeIn("fast");
					$('#telefonelinha').addClass('underline').prop('style', '');
				}

				if(result==12){

					$('span#alertafrase').css({'color':'#e2726f'}).html('Digite uma frase para o perfil').fadeIn("fast");
					$('#fraselinha').css({'background-color':'#e2726f', 'height':'2px'});
					$('input#frase').focus();
					return false;

				} else {

					$('span#alertafrase').css('color', '#868e96').html('Frase do Perfil').fadeIn("fast");
					$('#fraselinha').addClass('underline').prop('style', '');
				}

				if(result==13){

					$('span#alertasenha').css({'color':'#e2726f'}).html('Digite a sua senha').fadeIn("fast");
					$('#senhalinha').css({'background-color':'#e2726f', 'height':'2px'});
					$('input#senha').focus();
					return false;

				} else {

					$('span#alertasenha').css('color', '#868e96').html('Senha').fadeIn("fast");
					$('#senhalinha').addClass('underline').prop('style', '');
				}

				if(result==14){

					$('span#alertaconfisenha').css({'color':'#e2726f'}).html('Digite a confirmação de senha').fadeIn("fast");
					$('#confisenhalinha').css({'background-color':'#e2726f', 'height':'2px'});
					$('input#confisenha').focus();
					return false;

				} else {

					$('span#alertaconfisenha').css('color', '#868e96').html('Confirmação de senha').fadeIn("fast");
					$('#confisenhalinha').addClass('underline').prop('style', '');
				}

				if(result==15){

					$('span#alertasenha').css({'color':'#e2726f'}).html('As senhas informadas não conferem').fadeIn("fast");
					$('#senhalinha').css({'background-color':'#e2726f', 'height':'2px'});
					$('span#alertaconfisenha').css({'color':'#e2726f'}).html('Confirmação de senha').fadeIn("fast");
					$('#confisenhalinha').css({'background-color':'#e2726f', 'height':'2px'});

					$('input#senha').val("");
					$('input#confisenha').val("");
					$('input#senha').focus();
					return false;

				} else {

					$('span#alertasenha').css('color', '#868e96').html('Senha').fadeIn("fast");
					$('#senhalinha').addClass('underline').prop('style', '');
				}

				if(result==16){

					$('span#alertasenha').css({'color':'#e2726f'}).html('Digite uma senha forte').fadeIn("fast");
					$('#senhalinha').css({'background-color':'#e2726f', 'height':'2px'});
					$('input#senha').val("");
					$('input#senha').focus();
					$('#popoverOption2').popover({ trigger: "hover" }).popover('show');
					return false;

				} else {

					$('span#alertasenha').css('color', '#868e96').html('Senha').fadeIn("fast");
					$('#senhalinha').addClass('underline').prop('style', '');
				}
			}
		})
	return false;	
	})
})