<?php

    include '../controller/acao_pesquisa_autor.php';
    
    $NomeAutor = filter_input(INPUT_POST, 'NomeAutor');
    $EmailAutor = filter_input(INPUT_POST, 'EmailAutor');
    $TelefoneAutor = filter_input(INPUT_POST, 'TelefoneAutor');
    
    $linhas = PesquisaAutor($NomeAutor, $EmailAutor, $TelefoneAutor);
    
?>    
 <html>
            <head>
                <meta charset='UTF-8'>
                <title>Sistema de Biblioteca - Cadastro de Autores</title>
                <link rel='stylesheet' type='text/css' href='../vendor/twbs/bootstrap/dist/css/bootstrap.min.css'/>
            </head>
            <body>
                <script src='../vendor/twbs/bootstrap/dist/js/bootstrap.min.js'></script>
                <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
                <script src='https://unpkg.com/@popperjs/core@2/dist/umd/popper.js'></script>
                <div class='container'>
                <?php include 'barra_menu.php'; ?><br><br>
                <h1>Pesquisa de Autores<h1><br><br>
                <table class='table'>
                    <thead class='thead-dark'>
                        <tr>
                            <th scope='col'>Código</th>
                            <th scope='col'>Nome</th>
                            <th scope='col'>e-mail</th>
                            <th scope='col'>Telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (isset($linhas)) {
                        foreach ($linhas as $row) {            
                            print "<tr><th scope='row'>".$row['idautor']."</th>";
                            print "<td>".$row['nome']."</td>";
                            print "<td>".$row['email']."</td>";
                            print "<td>".$row['telefone']."</td></tr>";
                        }
                    } else {
                        var_dump($linhas);
                    } ?>
                    </tbody>
                </table>
                </div>
            </body>
</html>