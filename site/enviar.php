<?php 
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$assunto = $_POST['assunto'];

$dest = 'biase901@gmail.com';

$dados = 'Nome: '.$nome.' - Email: '.$email.' - Telefone: '.$telefone.' - A mensagem enviada é: '.$mensagem;

mail($dest, $assunto, $dados);



 ?>

 <script>
 	alert('Enviado com sucesso!!');

 </script>

 <meta http-equiv="refresh" content="0; url=contatos.html">