<?php  
ini_set('default_charset','UTF-8');
include "../conexao.php";
session_start();

$ddd = mysqli_real_escape_string($connect,$_POST["ddd"]);
$telefone = mysqli_real_escape_string($connect,$_POST["telefone"]);
$codigo = mysqli_real_escape_string($connect,$_POST["codigo"]);

$sql = "SELECT * FROM users WHERE ddd='".$ddd."' and telefone='".$telefone."'"; 
$resultados = mysqli_query($connect,$sql) or die (mysqli_error());
$res = mysqli_fetch_array($resultados);

$id = $res['id'];


$sql2 = "SELECT * FROM token WHERE token='".$codigo."' and id_user='".$id."'"; 
$resultados2 = mysqli_query($connect,$sql2) or die (mysqli_error());
$res2 = mysqli_fetch_array($resultados2);

	if($codigo == ''){

		echo 2;

	} else if (mysqli_num_rows($resultados2) == 0){

		echo 3;

	} else if (mysqli_num_rows($resultados2) > 0){

		echo 1;

			mysqli_query($connect,"UPDATE users SET login_status = '1' WHERE id = '$id'");
			mysqli_query($connect,"DELETE FROM token WHERE id_user = '$id'");
		
			$_SESSION['login_status'] = '1';
			$_SESSION['id'] = $id;
			$_SESSION['nome'] = $res['nome'];
			$_SESSION['sobrenome'] = $res['sobrenome'];

	}
?>