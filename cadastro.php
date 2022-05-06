<?php

  include_once("conexao.php"); //chama o arquivo da conexão com o banco
  
  $nome=$_POST['nome'];  //$nome, $email, $mensagem são var q recebem o valor dos inputs
  $email=$_POST['email'];
  $mensagem=$_POST['mensagem'];

  $sql = "INSERT INTO contato(nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";//insere as informações do form na tabela do banco de dados.

  if(mysqli_query($conexao, $sql)){   //query faz uma consulta no banco e ve se foi cadastrado
      echo "Cadastrado com sucesso";
  }
  else{
      echo "Erro".mysqli_connect_error($conexao);
  }

  mysqli_close($conexao) //encerra a conexão

  
  

?>