<?php
    //verificação se os dados estão sendo submitados e salvos no banco de dados
    if(isset($_POST['submit']))
    {
       /*
        print_r('Firstname: ' . $_POST['firstname']);
        print_r('<br>');
        print_r('Lastname: ' . $_POST['lastname']);
        print_r('<br>');
        print_r('Email: ' . $_POST['email']);
        print_r('<br>');
        print_r('Phone: ' . $_POST['mobilephone']);
        print_r('<br>');
        print_r('Gender: ' . $_POST['gender']);
        print_r('<br>');
        print_r('Birthday: ' . $_POST['birthday']);
        print_r('<br>');
        print_r('Address: ' . $_POST['address']);
        print_r('<br>');
        print_r('Eircode: ' . $_POST['eircode']);
        */
        
        //incluir a conexão com o DB
        include_once('config.php');

        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $mobilephone = $_POST['mobilephone'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $address = $_POST['address'];
        $eircode = $_POST['eircode'];
        
        // inserir os dados no BD

        $result = mysqli_query($conexao, "INSERT INTO users(firstname, lastname, email, mobilephone, gender, birthday, address, eircode) 
        VALUES('$firstname','$lastname','$email','$mobilephone','$gender','$birthday','$address','$eircode')");
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/form.css">
    <title>Customer Form</title>
</head>

<body>
    <div class="box">        
        <div class="form-box">
            <h2>Create an Account</h2>           
            <form action="customerform.php" method="POST">
                <div class="input-group w50">
                    <label for="firstname"> First name</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Type your name" required>
                </div>

                <div class="input-group w50">
                    <label for="lastname"> Last name</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Type your name" required>
                </div>

                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="Type your email" required>
                </div>

                <div class="input-group">
                    <label for="phone">Mobile Phone</label>
                    <input type="tel" name="phone" id="phone" placeholder="Type your mobile phone number" required>
                </div>

                <div class="input-group"></div>
                <p>Gender<p>
                  <input type="radio" id="female" name="gender" value="female" required>
                  <label for="female">Female</label>
                 
                  <input type="radio" id="male" name="gender" value="male" required>
                  <label for="male">Male</label>
                  
                  <input type="radio" id="other" name="gender" value="other" required>
                  <label for="other">Other</label>
                </p>              
                <br>
                
                <div class="datebirthday">
                  <label for="birthday"><b>Birthday</b></label>
                  <input type="date" name="birthday" id="birthday" classa="inputuser" required>
                </div>
                <br>
                <div class="input-group">
                    <label for="address">Address</label>
                    <input type="address" name="address" id="address" placeholder="Type your address" required>
                </div>

                <div class="input-group w50">
                    <label for="eircode">Eircode</label>
                    <input type="eircode" name="eircode" id="eircode" placeholder="Type yopur eircode" required>
                </div>
                <br>
                
                <style>
                    #submit{
                    background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
                    width: 100%;
                    border: none;
                    padding: 15px;
                    color: white;
                    font-size: 15px;
                    cursor: pointer;
                    border-radius: 15px;
                    }
                    #submit:hover{
                        background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
                    }
                </style>

                <input type="submit" name="submit" id="submit" value="SUBMIT">
                
                <div class="input-group">
                    <button><a href="bookservice.html">Next</a></button>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>