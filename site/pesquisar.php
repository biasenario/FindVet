<?php include "conexao.php"?>

<table border="1" style='width:50%'>
<tr>
<th>Codigo</th>
<th>Nome</th>
<th>Telefone</th>
<th>Endereco</th>
<th>Servico</th>
<th>imagem</th>
</tr>

<?php
$pesquisar = $_POST['pesquisar'];
$sql = "SELECT * FROM membros WHERE servicos = '$pesquisar'";
$resultado = mysqli_query($conexao,$sql) or die("Ainda não temos nenhum membro que ofereça esse Serviço");
while ($registro = mysqli_fetch_array($resultado))
 {
    
    $codigo = $registro['codigo'];
    $nome = $registro['nome'];
    $telefone = $registro['telefone'];
    $endereco = $registro['endereco'];
    $servicos = $registro['servicos'];
    $imagem = $registro['imagem'];
    echo "<tr>";
    echo "<td>".$codigo."</td>";
    echo "<td>".$nome."</td>";
    echo "<td>".$telefone."</td>";
    echo "<td>".$endereco."</td>";
    echo "<td>".$servicos."</td>";
    echo "<td>".$imagem."</td>";
    echo "</tr>";
    }
    echo "</table>";

?>
