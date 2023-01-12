<?php

  $host = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'ger_garage';

  $conexao = new mysqli($host,$user,$password,$db);

  /*if($conexao->connect_errno)
  {
    echo "Erro";
  }
  else
  {
    echo "Conexão executada com sucesso";
  }
  */
?>