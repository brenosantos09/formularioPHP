<?php

  $servidor="localhost";
  $usuario="root";
  $senha="";
  $dbname="formulario";

  $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);  //criar conexao com o banco
  //$conexao é um var q recebe a conexao do mysql

  if(!$conexao){
      die("Houve um erro ".mysqli_connect_error());  //testar se houve a conexão
  }


?>