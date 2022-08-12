<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Biblioteca - Cadastro de Autores</title>
        <link rel="stylesheet" type="text/css" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>
    </head>
    <body>
        <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
        <div class="container">
            <?php include 'barra_menu.php'; ?>
            <div class="p-3 mb-2 bg-warning text-dark"><h1>Pesquisa de Autores<h1></div><br><br>
  <form action="exibe_pesquisa_autor.php"  method="post">
  <div class="form-group">
    <label for="exampleInputText">Nome</label>
    <input type="text" class="form-control" name="NomeAutor" aria-describedby="emailHelp" placeholder="Informe o nome do autor">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control" name="EmailAutor" aria-describedby="emailHelp" placeholder="Informe o email">
  </div>
  <div class="form-group">
    <label for="exampleInputText">Telefone</label>
    <input type="text" class="form-control" name="TelefoneAutor" aria-describedby="TelefoneHelp" placeholder="Informe o telefone">
  </div>
  <button type="submit" class="btn btn-primary">Pesquisar</button>
</form>
</div>
    </body>
</html>
