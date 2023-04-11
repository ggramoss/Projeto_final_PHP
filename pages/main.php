<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset='utf-8'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Suspiros Modas</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='../css/main.css'>
</head>

<body>

  <?php include 'layout/menu.php'  ?>

  <?php include 'layout/carrousel/carrousel-main.php' ?>



  <section>
    <h2>Produtos em Destaque</h2>
    <figure class="produtos">

      <div class="produto_img_nome">
        <a href="item_tricot_perolas.php">
          <img src="../img/blusao_720x850.png" alt="tricot perolas" class="img_produto">
        </a>
        <h3> Tricot NY pérolas com capuz </h3>
      </div>

      <div class="produto_img_nome">
        <a href="item_toucas.php">
          <img src="../img/toucas_720x850.png" alt="toucas" class="img_produto">
        </a>
        <h3> Touca de lã </h3>
      </div>

      <div class="produto_img_nome">
        <a href="item_pijama.php">
          <img src="../img/pijama_720x850.png" alt="pijama" class="img_produto">
        </a>
        <h3> Pijama manga longa Nutella </h3>
      </div>

    </figure>
  </section>

  <?php include 'layout/footer.php' ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
  crossorigin="anonymous"></script>
</body>

</html>