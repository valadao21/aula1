<?php
$servername="localhost";
$database="bdblog";//alterar conforme o nome do seu banco de dados
$username="root";//padrao - root
$password="";//senha de conexao do BD
// Create connection
$conexao=mysqli_connect($servername,$username,$password,$database);
if(!$conexao){
    echo "não conectou ao bd";
}
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"     >
<div class="container" style="width: 500px; margin-top:50px">
<center>
<h4>Adicionado com Sucesso!</h4>
<div style="padding-top: 20px">
<center>
<a4 href="formulario.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo nome</a4>
<center>
</div>
</div>