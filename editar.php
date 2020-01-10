<?php
    require('nomes.class.php');
    $nome = new Nome();

    if (!empty($_GET['id'])) {
        $id = $_GET['id'];

        $info = $nome->getInfo($id);

        if (empty($info['nome'])) {
            header("Location: index.php");
            exit;
        }

    } else {

        header("Location: index.php");
        exit;
    }

    if (!empty($_POST['id'])) {
        $nick = $_POST['name'];
        $id = $_POST['id'];

        $nome->update($nick, $id);

        header("Location: index.php");
        exit;
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

    <div class="container-fluid">
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $info['id'] ?>">
            <div class="form-group">
                <label for="name">Novo nome: </label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $info['nome'] ?>">  
            </div>
            
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>