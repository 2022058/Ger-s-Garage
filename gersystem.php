<?php
session_start();
include_once('config.php');
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('Location: login.php');
}
$logado=$_SESSION['email'];

$sql = "SELECT * FROM users ORDER BY id DESC";

$result = $conexao->query($sql);

//print_r($result); 
?> 


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ger's System</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header class="header">
        <!--Menu de navegaçao-->
        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            
            <!--Logo-->
            <div class="logo2">
                <img src="images/serv-3.png" class="img-fluid" alt="logo">
            </div class="exit">
            <!--Fim-logo-->
                
            <div class="d-flex">
                <a href="exit.php" class="btn btn-danger">Exit</a>
            </div>
                           
        </nav>

        <hr class="linha-menu">

        <div>
            <h2 class="contato-h2">Registration Control</h2>            
        </div>

                
        <!--Final-Menu de navegação-->
    </header>

            <Style>
                .table-bg{
                background: rgba(0,0,0,0.5);
                color: white;
                text-align: center;
            }
            .m-5{
                
                text-align: center;
            }
            </Style>
    <div class="m-5">
    <table class="table text-white table-bg">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Mobilephone</th>
                <th scope="col">Gender</th>
                <th scope="col">Birthday</th>
                <th scope="col">Address</th>
                <th scope="col">Eircode</th>
                <th scope="col">...</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
                while($user_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['firstname']."</td>";
                    echo "<td>".$user_data['lastname']."</td>";
                    echo "<td>".$user_data['email']."</td>";
                    echo "<td>".$user_data['password']."</td>";
                    echo "<td>".$user_data['mobilephone']."</td>";
                    echo "<td>".$user_data['gender']."</td>";
                    echo "<td>".$user_data['birthday']."</td>";
                    echo "<td>".$user_data['address']."</td>";
                    echo "<td>".$user_data['eircode']."</td>";
                    echo "<td>".$user_data['id']."</td>";
                }
            ?>   
        </tbody>
    </table>
    </div>
</body>
</html>