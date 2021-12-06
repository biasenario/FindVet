

<?php 

//BANCO DE DADOS LOCAL

function conectar(){
	$servidor = "localhost";
	$usuario = "root";
	$senha = "123456";
	$bd = "findvet";

	$con = new mysqli($servidor, $usuario, $senha, $bd);
	return $con;
}

$conexao = conectar();



//BANCO DE DADOS HOSPEDADO
/*function conectar(){
	$servidor = "localhost";
	$usuario = "id7182440_beatriz";
	$senha = "123456";
	$bd = "id7182440_findvet";

	$con = new mysqli($servidor, $usuario, $senha, $bd);
	return $con;
}

$conexao = conectar();
*/
 ?>