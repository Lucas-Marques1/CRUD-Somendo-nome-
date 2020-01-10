<?php
    require('nomes.class.php');
    
    $nome = new Nome();

    if(!empty($_GET['id'])) {
        
        $id = $_GET['id'];
        $nome->excluir($id);
    } 

    header("Location: index.php");