<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $car         = $_POST['car'];
        $motorcycle  = $_POST['motorcycle'];
        $service     = $_POST['service'];
        $engine      = $_POST['engine'];
        $date        = $_POST['date'];
        $time        = $_POST['time'];
        $licence     = $_POST['licence'];
        $brif        = $_POST['brif_description_of_the_problem'];

               
        $sqlInsert = "UPDATE booking SET car='$car',motorcycle='$motorcycle', service='$service',engine='$engine',date='$date',time='$time',licence='$licence',brif_description_of_the_problem='$brif' 
        WHERE id=$id";
        $result=$conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: serviceorder.php');

?>