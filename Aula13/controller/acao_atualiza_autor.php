<?php

    include '../model/conexao.class.php';
           
    $IdAutor = filter_input(INPUT_POST, 'IdAutor');
    $NomeAutor = filter_input(INPUT_POST, 'NomeAutor');
    $EmailAutor = filter_input(INPUT_POST, 'EmailAutor');
    $TelefoneAutor = filter_input(INPUT_POST, 'TelefoneAutor');

    try{
    $SqlInsert = Conexao::getInstance()->prepare("UPDATE autor SET nome='$NomeAutor', email='$EmailAutor', telefone='$TelefoneAutor' WHERE idautor=$IdAutor");
    
    $SqlInsert->execute();
    
        echo "Autor atualizado com sucesso!<br><br>";
        echo '<a class="nav-link" href="../view/index.php">Voltar</a>';
        header( "Refresh:3; url=../view/index.php");
       } catch (Exception $e) {
            print "Erro: Código: ". $e->getCode() . " Mensagem: " . $e->getMessage();
       }