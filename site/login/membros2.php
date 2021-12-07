<?php include "../conexao.php" ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="usuarios.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<title>Lista de Serviços</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-15" style="background-color:#fcf1c8!important;">
		<div class="container">

			
			</button>
				<ul class="navbar-nav mr-auto">
	
					<li class="nav-item">
						<a class="nav-link" href="../index.html">Sair</a>
					</li>


				</ul>
		</div>
	</nav>

<div id="box_usuarios">
<br /><br />
<h1>Membros</h1>


	<?php 
   		$sql = "SELECT * FROM membros WHERE nome != ''";
   		$result = mysqli_query($conexao, $sql);
   		if(mysqli_num_rows($result) == ''){
   			echo "<h2>Não existem membros cadastrados!!</h2>";
   		}else{
   			?>

    <table width="900" border="0">
      <tr>
        <td><strong>Código:</strong></td>
        <td><strong>Nome:</strong></td>
        <td><strong>Telefone:</strong></td>
        <td><strong>Endereco</strong></td>
        <td><strong>Servicos:</strong></td>
		<td><strong>Imagem:</strong></td>
        <td></td>
      </tr>
     


      	<?php 
      		while($res_1 = mysqli_fetch_array($result)){
      			$id = $res_1['codigo'];
      			$nome = $res_1['nome'];
      			$telefone = $res_1['telefone'];
            $endereco = $res_1['endereco'];
      			$servico = $res_1['servicos'];
      			$imagem = $res_1['imagem'];
      		
      	 ?>

      <tr>

        <td><h3><?php echo $id; ?></h3></td>
        <td><h3><?php echo $nome; ?></h3></td>
        <td><h3><?php echo $telefone; ?></h3></td>
        <td><h3><?php echo $endereco; ?></h3></td>
        <td><h3><?php echo $servico; ?></h3></td>
        <td><img src="imagens/<?php echo $imagem; ?>" width="50"></td>

      </tr>

      <?php } ?>
      
    </table>
<?php } ?>
	 

<br />


<br>



</body>

</html>






