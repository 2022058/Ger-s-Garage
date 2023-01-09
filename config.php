<?php

  $dbHost = 'localhost';
  $dbUsername = 'root';
  $dbPassword = '';
  $dbName = 'customer_form';

  $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

  //if($conexao->connect_errno)
  //{
  //  echo "Erro";
  //}
  //else
  //{
  //  echo "Conexão executada com sucesso";
  //}
  
?>