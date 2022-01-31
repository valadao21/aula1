<?php  
include 'conexao.php';
echo $id=$_GET['id'];



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="scss/bootstrap.css">
<style type="text/css"> 
#tamanhoContainer {    
    width: 700px;

}
#botao{  
  background-color: #1151ff;
  color: #ffffff; /*cor da letra*/
  font: bold;
  border-bottom: #0c0c0c;
}

</style>
    </head>
    <body>
 <div class="container" id="tamanhoContainer" style="margin-top: 80px">
    <h4>Formulário de Cadastro</h4>
    <form action="_inserir_produto.php" method="post">
<?php
$sql="SELECT*FROM 'estoque' WHERE id_estoque=$id";
$buscar=mysqli_query($conexao,$sql);
while ($array=mysql_fetch_array($buscar)){   
    $id_estoque=$array['id_estoque'];
    $nomeproduto=$array['nome'];
    $quantidade=$array['foto'];
    
}

    

       
        
        <div class="form-group">
            <label for="nome">nome</label>
            <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>" 
            style="display:disabled">          
          </div> 
          <div class="form-group">
            <label for="foto">foto</label>
            <input type="text" class="form-control" name="foto" placeholder="Insira a foto">
            
          </div> 

          
            
            <div style="text-align: right;">
          <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
            </div>
            <?php } ?>
      </form>
    </div>



  <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
    </html>