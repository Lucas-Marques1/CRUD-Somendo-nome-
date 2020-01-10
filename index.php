<?php
    require('nomes.class.php');
    $nome = new Nome();

    if (!empty($_POST["name"])) {
        $newNome = $_POST["name"];
        
        $partes = explode(' ', $newNome);
        $primeiroNome = $partes[0];
        $ultimoNome = $partes[1];
        $lastNome = $partes[2];

        if (($primeiroNome <> '') and (strlen($primeiroNome) >= 3)) {

          if(($ultimoNome <> '') and (strlen($ultimoNome) >= 3)) {
           
            $nome->adicionar($newNome);

          } else {
            
            if (($lastNome <> '') and (strlen($lastNome) >= 3)) {
            
              $nome->adicionar($newNome);
            
            } else {
            
              $nome->error();
            
            }

          }
        
        }

        header('location: index.php');
         
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste MontarSite - CRUD</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
<hr class="my-4">
    <div class="container-fluid">
        <form method="POST">
            <div class="form-group">
                <label for="name"><h1>cadastre um nome: </h1></label>
                
                <input type="text" name="name" class="form-control" id="name">
            </div>
            
            <input type="submit" class="btn btn-success cadastrar" value="Cadastrar"></input>

        </form>
    </div>

    <br/>

    <div class="container-fluid">

    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $lista = $nome->getAll();
        foreach($lista as $item):
    ?>
    <tr>
      <th scope="row"><?php echo $item['nome'];?></th>
      <td><button onclick="location.href='editar.php?id=<?php echo $item['id'] ?>'" class="btn btn-primary">Editar</button></td>
      <td><button onclick="location.href='excluir.php?id=<?php echo $item['id'] ?>'" class="btn btn-danger">Deletar</button></td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>