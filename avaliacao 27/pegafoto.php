<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=3.0">
        <title>Cadastro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="card w-75 text-black bg-blue mb-3">
                <div class="card-body text-center">
  
                <div class="card-header text-center"> <h2>Formulário de Cadastro</h2></div>
                    
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        
                        <div class="card text-blue bg-primary mb-5">
                            
                            <h3>Nome</h3>
                            <input type="text" name="nome"> 
                            <br>
                            <h3>Foto</h3>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <br>
                            <input type="submit" value="Cadastrar">
                            
                        </div>
                    </form>
                
                </div>
            </div>            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>