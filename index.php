<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>teste cadastrar produto</title>
  </head>
  <body>
    <h1>Cadastrar Produtos</h1>

    <?php
    if(isset($_GET['status']) && $_GET['status'] == 'sucesso'){
      echo "<p>Produto cadastrado com sucesso!!</p>";
    }
    ?>

    <form action="db.php" method="post">

      <input type="hidden" name="acao" value="cadastrar">

      <label for="nome">Nome do produto</label>
      <input type="text" id="nome" name="nome_produto" required/><br>

      <label for="unidade">Unidade</label>
      <input type="text" name="unidade_produto" id="unidade" required/><br>

      <label for="quantidade">Quantidade</label>
      <input type="number" name="quantidade_produto" id="quantidade" required/>

      <button type="submit">Adicionar</button>
    </form>
  </body>
</html>
