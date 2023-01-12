<?php
  session_start();
    //print_r($_REQUEST);


  if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
  {
    // Acessar o sistema
    include_once('config.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    //print_r ('Email: ' . $email);
    //print_r ('<br>');
    //print_r ('Password: ' . $password);

    $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";

    $result = $conexao -> query ($sql);

    //print_r($sql);
    //print_r($result);


     
    if(mysqli_num_rows($result)< 1)
    {

      //print_r('Não existe')
      
      //Caso não existrem os registros de email e senha, o "unset" 
      //irá destruir qualquer variável com "session" email e password)
       unset($_SESSION['email']);
       unset($_SESSION['password']);
       header('Location: login.php');
     
    }
    else  
    {
       //print_r('Existe');
       $_SESSION['email'] = $email;
       $_SESSION['password'] = $password;
       header('Location: bookservice.php'); 
       //qua do submeter o booking, direcionar para o print da Ordem de Serviço

      //Como redirecionar para o gersystema.php quando for o admin?
      // header('Location: gersystema.php');
    }


    }
    else
    {
    //Não acessar o sistema

    header('Location: login.php');
    
  }
  
  
?>