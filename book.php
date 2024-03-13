<?php

  if(isset($_POST['submit']))
  {
    
    include_once('config.php');

    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $data_entrada = $_POST['data_entrada'];

    $result = mysqli_query($conexao, "INSERT INTO livros(nome,genero,data_entrada) 
    VALUES ('$nome','$genero','$data_entrada')");


  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registradora | GN</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background: linear-gradient(to top, rgb(204, 0, 0), rgb(102, 0, 0));
    }

    .box {
      color: white;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(0, 0, 0, 0.6);
      padding: 15px;
      border-radius: 15px;
      width: 20%;
    }

    fieldset {
      border: 3px solid darkgoldenrod;
    }

    legend {
      border: 1px solid darkgoldenrod;
      padding: 10px;
      text-align: center;
      background-color: darkgoldenrod;
      border-radius: 8px;
    }

    .inputBox {
      position: relative;
    }

    .inputUser {
      background: none;
      border: none;
      border-bottom: 1px solid white;
      outline: none;
      color: white;
      font-size: 16px;
      width: 100%;
      letter-spacing: 2px;
    }

    .labelInput {
      position: absolute;
      top: 0px;
      left: 0px;
      pointer-events: none;
      transition: .5s;
    }

    .inputUser:focus~.labelInput,
    .inputUser:valid~.labelInput {
      top: -20px;
      font-size: 12px;
      color: goldenrod;
    }

    #data_entrada {
      border: none;
      padding: 8px;
      border-radius: 10px;
      outline: none;
      font-size: 15px;
    }

    #submit {
      background-image: linear-gradient(to right, rgb(197 164 0), rgb(211 148 66));
      width: 100%;
      border: none;
      padding: 15px;
      color: white;
      font-size: 15px;
      cursor: pointer;
      border-radius: 10px;
    }

    #submit:hover {
      background-image: linear-gradient(to right, rgb(255 129 0), rgb(255 132 0));
    }
  </style>
</head>

<body>
  <div class="box">
    <form action="book.php" method="post">
      <fieldset>
        <legend><b>Fórmulário de Livros</b></legend>
        <br>
        <div class="inputBox">
          <input type="text" name="nome" id="nome" class="inputUser" required>
          <label for="nome" class="labelInput">Nome do Livro</label>
        </div>
        <br><br>
        <div class="inputBox">
          <input type="text" name="genero" id="genero" class="inputUser" required>
          <label for="genero" class="labelInput">Gênero</label>
        </div>
        <br><br>
        <label for="data_entrada"><b>Data de Entrada:</b></label>
        <input type="date" name="data_entrada" id="data_entrada" required>
        <br><br><br>
        
        <input type="submit" name="submit" id="submit">
      </fieldset>
    </form>
  </div>
</body>

</html>
