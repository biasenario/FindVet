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

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-15" style="background-color:#fcf1c8!important;">
		<div class="container">
			<a href="#" class="navbar-brand h1 mb-0">Cadastro</a>
			<button class="navbar-toggler" type="bottom" data-toggle="collapse" data-target="#navbarSite">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSite">
				<ul class="navbar-nav mr-auto">

					<li class="nav-item">
						<a class="nav-link" href="../index.html">Sair</a>
					</li>

				</ul>

			</div>
		</div>
	</nav>
<div id="box_usuarios">
<br /><br />
<a class="a2" href="membros3.php?pg=cadastra">cadastre-se</a>
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
      <td>Endereço</td> </tr>
      <tr>
      <td>
      <input type="text" name="Endereco" id="textfield1" required></td>
      </td>

      <tr>
      <td>Serviços</td> </tr>
      <tr>
      <td>
      <input type="text" name="Servicos" id="textfield1" required></td>
      </td>
      
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


</body>

</html>






