<?php  //listarclientes.php

include('conexao.php');

$sql = "select * from tblblog";
$qry = mysqli_query($conexao,$sql);
$fotos = $qry->fetchALL(PDO::FETCH_OBJ);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Avaliação</title>



</style>
  </head>
  <body .>
  
    <div class="container" >

      <div class="card w-75 text-white bg-dark mb-3">

        <div class="card-body">

          <h2 class="card-title text-center">Tabela</h2>

            <table class="table table-dark table-striped">
              <thead>

                <tr>                
                  <th scope="col">Foto</th>
                  <th scope="col">Nome</th>
                </tr>

              </thead>
              <tbody>
                <?php while ($linha = mysqli_fetch_array($qry)){ ?>
                <tr>
                
                <td ><img src="<?php echo "{$linha['foto']}";?>" alt="<?php echo "{$linha['nome']}" ?>" width='110px' height='130px'> </td>
                <td><?php echo "{$linha['nome']}" ?></th>
                
                </tr>
                <?php }?>
              </tbody>
            </table>

        </div>
      </div>
    </div>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
  </body>
</html>
<?php