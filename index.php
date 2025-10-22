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
    <div class="box">
      <div class="conteiner">
        <form action="db.php" method="post">
    
          <input type="hidden" name="acao" value="cadastrar">
    
          <label for="nome">Nome do produto</label><br>
          <input type="text" id="nome" name="nome_produto" required/><br>
    
          <label for="unidade">Unidade</label><br>
          <input type="text" name="unidade_produto" id="unidade" required/><br>
    
          <label for="quantidade">Quantidade</label><br>
          <input type="number" name="quantidade_produto" id="quantidade" required/><br>
    
          <button type="submit">click me</button>
        </form>
      </div>
    </div>

    <div class="caixa_botoes">
      <div class="botoes">
        <button onclick="window.location.href='entrada.php'">entrada</button>
        <button>saida</button>
      </div>
    </div>
  </body>
</html>
