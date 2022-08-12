<?php


    $dsn = 'mysql:dbname=bdlivraria;host=127.0.0.1';
    $login = 'root';
    $senha = '';
    
        try{    
            $conexao = new PDO($dsn, $login, $senha);
        }catch (PDOException $e){
            die ('DB Error');
        }
        
    $CodigoAutor = filter_input(INPUT_POST, 'CodigoAutor');

    
    $SqlInsert = $conexao->prepare("DELETE FROM autor WHERE idautor = $CodigoAutor");
    
    if ($SqlInsert->execute()) {
        echo "Autor excluido com sucesso!<br><br>";
        echo '<a class="nav-link" href="index.php">Voltar</a>';
		sleep(3);
		header("location: index.php");
    } else {
        var_dump($SqlInsert);
    }