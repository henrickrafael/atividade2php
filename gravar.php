<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <link rel="stylesheet" href="master.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>CRUD - PHP</title>
  </head>
  <body>
    <div class="cad-main-wrapper">
      <div class="cad-wrapper">
        <h2>Cadastro</h2>
        <br>
          <form action="#" method="post">
            <div class="input-wrapper">
              <span class="span">Nome:</span>
              <input type="text" name="nome" value="<?php echo @$nome?>" placeholder="Nome completo" required>
            </div>
            <div class="input-wrapper">
              <span class="span">Idade:</span>
              <input type="number" name="idade" min="0" value="<?php echo @$idade?>" placeholder="Apenas números" required>
            </div>
            <div class="input-wrapper">
              <span class="span">Email:</span>
              <input type="email" name="email" value="<?php echo @$email?>" placeholder="Email completo" required>
            </div>
            <div class="input-wrapper">
              <span class="span">Telefone:</span>
              <input type="text" name="fone" value="<?php echo @$fone?>" placeholder="Número com DDD" maxlength="11" required>
            </div>
            <div class="input-wrapper">
              <input type="submit" name="botao" value="Gravar">
            </div>
          </form>
      </div>
    </div>
    <div class="hr-wrapper">
      <div class="hr"></div>
    </div>
      <div class="cad-main-wrapper delete">
        <div class="cad-wrapper">
          <h2>Deletar registro</h2>
          <form action="#" method="post">
            <div class="input-wrapper">
              <span class="span">Código:</span>
              <input type="number" name="cod" min="0" placeholder="Apenas números" required>
              <input type="submit" name="botao" value="Apagar">
            </div>
          </form>
        </div>
      </div>
  </body>
</html>

<?php

@$nome = $_POST['nome'];
@$idade = $_POST['idade'];
@$email = $_POST['email'];
@$fone = $_POST['fone'];
@$codigo = $_POST['cod'];

if(@$_REQUEST['botao'] == "Gravar") {

  $insert = "INSERT INTO cliente (nome, idade, email, fone) VALUES ('$nome','$idade','$email','$fone') ";
  $sql = mysqli_query($con, $insert);

}

if(@$_REQUEST['botao'] == "Apagar") {
  $delete = "DELETE FROM cliente where id = '$codigo' ";
  $sql = mysqli_query($con, $delete);

}

?>
