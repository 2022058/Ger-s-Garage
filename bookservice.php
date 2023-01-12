<?php 
    session_start();

    //verificação se os dados estão sendo submitados e salvos no banco de dados
    if(isset($_POST['submit']))
    {
        //Efetuar a conexão com o DB
        include_once('config.php');

        $car         = $_POST['car'];
        $motorcycle  = $_POST['motorcycle'];
        $service     = $_POST['service'];
        $engine      = $_POST['engine'];
        $date        = $_POST['date'];
        $time        = $_POST['time'];
        $licence     = $_POST['licence'];
        $brif        = $_POST['brif_description_of_the_problem'];
                
        // inserir os dados no BD

        $result= mysqli_query($conexao, "INSERT INTO booking(car, motorcycle, service, engine, date, time, licence, brif_description_of_the_problem) 
        VALUES('$car','$motorcycle','$service','$engine','$date','$time','$licence','$brif')");
    
        header('Location: serviceorder.php');

    }
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/form.css">
    <title>Book Form</title>
</head>

<body>

    
        
    <div class="box">        
        <div class="form-box">
            <h2>Welcome</h2><?php echo $_SESSION["email"]?>
            <br>   
            <h2>Book a service</h2>       
            <form action="bookservice.php" method="POST">
                
                <div class="input-group">
                    <label for="car">Car:</label> 
                    <select id="car" name="car">
                        <option value=" "> </option>
                        <option value="rapide">Aston-Rapide</option>
                        <option value="Coupe" >Aston-V8 Vantage Coupe</option>
                        <option value="roadster">Aston-V8 Vantage Roadster</option>
                        <option value="s10">Chevrolet-S10</option>
                        <option value="sonic">Chevrolet-Sonic</option>
                        <option value="spin">Chevrolet-Spin</option>
                        <option value="vectra">Chevrolet-Vectra</option>
                        <option value="gt">Chevrolet-Vectra GT</option>
                        <option value="sandero">Dacia-Sandero</option>
                        <option value="stepway">Dacia-Sandero Stepway</option>
                        <option value="el">Fiat-Siena EL</option>
                        <option value="aerostar">Ford-Aerostar</option>
                        <option value="anglia">Ford-Anglia</option>
                        <option value="aspire">Ford-Aspire</option>
                        <option value="75">Ford-F-75</option>
                        <option value="fiesta">Ford-Fiesta</option>
                        <option value="sedan">Ford-Fiesta Sedan</option>
                        <option value="focus">Ford-Focus</option>
                        <option value="ranger">Ford-Ranger</option>
                        <option value="fe">Hyundai-Santa Fe</option>
                        <option value="fucson">Hyundai-Tucson</option>
                        <option value="veracruz">Hyundai-Veracruz</option>
                        <option value="sorento">Kia-Sorento</option>
                        <option value="soul">Kia-Soul</option>
                        <option value="sportage">Kia-Sportage</option>
                        <option value="evoque">Land Rover-Range Rover Evoque</option>
                        <option value="sport">Land Rover-Range Rover Sport</option>
                        <option value="vogue">Land Rover-Range Rover Vogue</option>
                        <option value="smart">Nissan-Smart</option>
                        <option value="versa">Nissan-Versa</option>
                        <option value="rav4">Toyota-RAV4</option>
                        <option value="spacefox">Volkswagenf-SpaceFox</option>
                        <option value="cross">Volkswagen-Space Cross</option>
                        <option value="voyage">Volkswagen-Voyage</option>
                        <option value="s60">Volvo-S60</option>
                        <option value="v40">Volvo-V40</option>
                        <option value="xc60r">Volvo-XC60</option>
                        <option value="xc90">Volvo-XC90</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="input-group w50">
                    <label for="motorcycl">Motorcycle:</label> 
                    <select id="motorcycle" name="motorcycle">
                        <option value=" "> </option>
                        <option value="r1100gs">BMW - R1100GS - 1100 cc</option>
                        <option value="r80gs">BMW - R80GS - 800 cc</option>
                        <option value="twister">Honda CB 250F Twister</option>
                        <option value="xre300">Honda XRE 300</option>
                        <option value="gpx600r">Kawasaki - GPX600R</option>
                        <option value="lx">Suzuki - Cavalcade LX</option>
                        <option value="gsxr1100">Suzuki - GSX R 1100</option>
                        <option value="sidercar">Ural - K750M - Sidecar</option>
                        <option value="crosser">Yamaha XTZ 150 Crosser</option>
                        <option value="factor150">Yamaha YBR Factor 150</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="input-group w50">
                    <label for="ervice">Choose a service:</label>
                    <select id="service" name="service">
                        <option value=" "> </option>
                        <option value="annual service">Annual Service</option>
                        <option value="major service">Major Service</option>
                        <option value="repair/fault">Repair/Fault</option>
                        <option value="major repair">Major Repair</option>
                        <option value="general review">General Review</option>
                        <option value="buying and selling">Buying and selling</option>
                    </select>
                </div>

                <div class="input-group w50">
                    <label for="engine">Engine type:</label> 
                    <select id="engine" name="engine" required>
                        <option value=" "></option>
                        <option value="diesel">Diesel</option>
                        <option value="petrol">Petrol</option>
                        <option value="hybrid">Hybrid</option>
                        <option value="electric">Electric</option>
                    </select>
                </div>
                                          
                <br>
                
                <div>
                    <label class="quebra">Date: </label>
                    <input type="date" name="date" required>
                    <?php 
                        $today = date("l");
                        if($today == "Saturday" || $today == "Sunday") {
                            echo "<p>Sorry, we are closed on weekends. Please choose another date.</p>";
                        }
                    ?>
                    <br>
                    <label class="quebra">Time: </label>
                    <input type="time" name="time" min="8:00" max="18:00" required><br>
                </div>  
                <br>
                <div class="input-group">
                    <label for="licence">Licence details</label>
                    <input type="text" id="licence" name="licence" placeholder="Type your vehicle licence details" required>
                </div>
                
                <div class="input-group">
                    <label for="brif">Brief description of the problem</label>
                    <input id="brif" name="brif_description_of_the_problem" placeholder="Describe the details of what you need" required>
                </div>

                    <style>
                        .inputsubmit input{
                            width: 100%;
                            height: 47px;
                            background: #6420d1;
                            border-radius: 20px;
                            outline: none;
                            border: none;
                            margin-top: 15px;
                            color: white;
                            cursor: pointer;
                            font-size: 20px;
                        }
                    </style>
                    
                    <div class="inputsubmit">
                        <input type="submit" name="submit" value="Submit">
                    </div>
            </form>
        </div>
    </div>
</body>
</html>