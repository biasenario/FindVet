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
	<title>Cadastro de Membros</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-15">
		<div class="container">
			<a href="#" class="navbar-brand h1 mb-0">Painél Administrativo</a>
			<button class="navbar-toggler" type="bottom" data-toggle="collapse" data-target="#navbarSite">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSite">
				<ul class="navbar-nav mr-auto">
					

					<li class="nav-item">
						<a class="nav-link" href="membros.php">Membros</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="pastores.php">Pastores</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="../index.html">Sair</a>
					</li>


				</ul>

				

			</div>
		</div>
	</nav>

<div id="box_usuarios">
<br /><br />
<a class="a2" href="membros.php?pg=cadastra">Cadastrar Membros</a>
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
        <td><strong>Status:</strong></td>
	<td><strong>Imagem:</strong></td>
        <td></td>
      </tr>
     


      	<?php 
      		while($res_1 = mysqli_fetch_array($result)){
      			$id = $res_1['codigo'];
      			$nome = $res_1['nome'];
      			$telefone = $res_1['telefone'];
      			$status = $res_1['status'];
      			$imagem = $res_1['imagem'];
      		
      	 ?>

      <tr>

        <td><h3><?php echo $id; ?></h3></td>
        <td><h3><?php echo $nome; ?></h3></td>
        <td><h3><?php echo $telefone; ?></h3></td>
        <td><h3><?php echo $status; ?></h3></td>
        
        <td><img src="imagens/<?php echo $imagem; ?>" width="50"></td>
	
        <td></td>
        <td>
        <a class="a" href="membros.php?pg=todos&func=deleta&id=<?php echo $id; ?>"><img title="Excluir Membro" src="img/deleta.jpg" width="18" height="18" border="0"></a>
       
        <?php if($status == 'Inativo'){ ?>
        <a class="a" href="membros.php?pg=todos&func=ativa&id=<?php echo $id; ?>"><img title="Ativar novamente" src="img/correto.jpg" width="20" height="20" border="0"></a>
        <?php } ?>

        <?php if($status == 'Ativo'){ ?>
           <a class="a" href="membros.php?pg=todos&func=inativa&id=<?php echo $id; ?>"><img title="Inativar Membro" src="img/ico_bloqueado.png" width="18" height="18" border="0"></a>
        <?php } ?>
        
        <a class="a" href="membros.php?pg=todos&func=edita&id=<?php echo $id; ?>"><img title="Editar Dados Cadastrais" src="img/ico-editar.png" width="18" height="18" border="0"></a>
       </td>
      </tr>

      <?php } ?>
      
    </table>
<?php } ?>
	 

<br />


<br>


<! CADASTRAR OS MEMBROS >
<?php if(@$_GET['pg'] == 'cadastra'){ ?>
<div id="cadastra_usuarios">  
<h1>Cadastrar novo Membro</h1>



<form name="form1" method="post" action="upload.php" enctype="multipart/form-data">
  <table width="900" border="0">
    <tr>
      <td>Nome:</td>
      <td>Telefone:</td>
      
      
    </tr>
    <tr>
        
        
      <td>
      <input type="text" name="nome" id="textfield1" required></td>
      <td>
      <input type="text" name="telefone" id="textfield2" required></td>
     
      </tr>
      <tr>
      <td>Status</td> </tr>
      <tr>
      <td><label for="select"></label>
        <select name="status" size="1" id="select">
          <option value="Ativo">Ativo</option>
          <option value="Inativo">Inativo</option></select></td>
      
    </tr>

    <tr>
      <td>Imagem</td> </tr>
      <tr>
      <td>
			<input type='file' name="arquivo"/></td>
      
    </tr>
    
      <td><input class="input" type="submit" name="button" id="button" value="Cadastrar"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<br />
</div>

<?php } ?>

<! FIM DO CADASTRO DE MEMBROS >




<! EDITAR OS MEMBROS >
<?php if(@$_GET['func'] == 'edita'){ ?>
<div id="cadastra_usuarios">  
<h1>Editar Membro</h1>

<?php 
$id = $_GET['id'];
$sql = "SELECT * FROM membros WHERE codigo = '$id' ";
$consulta = mysqli_query($conexao, $sql);
while($res_1 = mysqli_fetch_array($consulta)){

	
 ?>


<form name="form1" method="post" action="upload.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
  <table width="900" border="0">
    <tr>
      <td>Nome:</td>
      <td>Telefone:</td>
      
      
    </tr>
    <tr>
        
        
      <td>
      <input type="text" value="<?php echo $res_1['nome']; ?>" name="nome" id="textfield1" required></td>
      <td>
      <input type="text" value="<?php echo $res_1['telefone']; ?>" name="telefone" id="textfield2" required></td>
     
      </tr>
      <tr>
      <td>Status</td> </tr>
      <tr>
      <td><label for="select"></label>
        <select name="status" size="1" id="select">
          <option value="<?php echo $res_1['status']; ?>"><?php echo $res_1['status']; ?></option>
          <option value=""></option>
          <option value="Ativo">Ativo</option>
          <option value="Inativo">Inativo</option>
          </select></td>
      
    </tr>

    <tr>
      <td>Imagem</td> </tr>
      <tr>
      <td>
			<input type='file' value="<?php echo $res_1['imagem']; ?>" name="arquivo"/>
		</td>
		<td><img src="imagens/<?php echo $res_1['imagem']; ?>" width="100"></td>
      
    </tr>
    
      <td><input class="input" type="submit" name="button" id="button" value="Editar"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<br />
</div>

<?php }} ?>

<! FIM DA EDICÃO DE MEMBROS >






<! DELETAR OS MEMBROS >
<?php if(@$_GET['func'] == 'deleta'){
	
	$id = $_GET['id'];
	
	$sql = "DELETE FROM membros WHERE codigo = '$id'";
	mysqli_query($conexao, $sql);
	echo "<script language='javascript'>window.location='membros.php';</script>";
} ?>



<!ATIVAR O MEMBRO>
<?php if(@$_GET['func'] == 'ativa'){
	$id = $_GET['id'];
	$sql = "UPDATE membros SET status = 'Ativo' WHERE codigo = '$id'";
	mysqli_query($conexao, $sql);
		
	echo "<script language='javascript'>window.location='membros.php';</script>";
}?>




<!INATIVAR O MEMBRO>
<?php if(@$_GET['func'] == 'inativa'){
	$id = $_GET['id'];
	$sql = "UPDATE membros SET status = 'Inativo' WHERE codigo = '$id'";
	mysqli_query($conexao, $sql);
		
	echo "<script language='javascript'>window.location='membros.php';</script>";
}?>

<br />
</div>




</body>

</html>






