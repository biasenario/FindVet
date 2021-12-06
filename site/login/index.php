<?php include "../conexao.php" ?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="../css/style.css">


<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<?php 
	if(isset($_POST['button'])){
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";

		$result = mysqli_query($conexao, $sql);

		if(mysqli_num_rows($result) > 0){
			echo '<meta http-equiv="refresh" content="0; url=membros.php">';
		}else{
			echo "<script> alert('Dados Incorretos!!'); </script>";
		}
	}
 ?>

    <div class="container">
        <div class="card card-container">
            
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" name="form" method="post" action="" enctype="multipart/form-data">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                <input type="password" name="senha" class="form-control" placeholder="Senha" required>
               
                <button class="btn btn-lg btn-primary btn-block btn-signin" name="button" type="submit">Login</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->