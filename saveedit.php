<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $mobilephone = $_POST['phone'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $address = $_POST['address'];
        $eircode = $_POST['eircode'];
        
        $sqlInsert = "UPDATE users SET firstname='$firstname',lastname='$lastname', email='$email',password='$password',mobilephone='$mobilephone',gender='$gender',birthday='$birthday',address='$address',eircode='$eircode' 
        WHERE id=$id";
        $result=$conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: system.php');

?>