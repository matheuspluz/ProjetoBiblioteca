<?php

    include '../model/conexao.class.php';
           
    $NomeAutor = filter_input(INPUT_POST, 'NomeAutor');
    $EmailAutor = filter_input(INPUT_POST, 'EmailAutor');
    $TelefoneAutor = filter_input(INPUT_POST, 'TelefoneAutor');

    try{
    $SqlInsert = Conexao::getInstance()->prepare("INSERT INTO autor (nome, email, telefone) VALUES ('$NomeAutor', '$EmailAutor', '$TelefoneAutor')");
    
    $SqlInsert->execute();
    
        echo "Autor cadastrado com sucesso!<br><br>";
        echo '<a class="nav-link" href="../view/index.php">Voltar</a>';
       } catch (Exception $e) {
            print "Erro: Código: ". $e->getCode() . " Mensagem: " . $e->getMessage();
       }