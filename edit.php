<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM users WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $firstname = $user_data['firstname'];
                $lastname = $user_data['lastname'];
                $email = $user_data['email'];
                $password = $user_data['password'];
                $mobilephone = $user_data['mobilephone'];
                $gender = $user_data['gender'];
                $birthday = $user_data['birthday'];
                $address = $user_data['address'];
                $eircode = $user_data['eircode'];
            }
        }
        else
        {
            header('Location: system.php');
        }
    }
    else
    {
        header('Location: system.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/form.css">
    <title>Create an Account Form</title>
</head>

<body>
    <a href="system.php">Back</a>
    <div class="box">        
        <div class="form-box">
            <h2>Create an Account</h2>           
            <form action="saveedit.php" method="POST">
                <div class="input-group w50">
                    <label for="firstname"> First name</label>
                    <input type="text" name="firstname" id="firstname" class="inputUser" value=<?php echo $firstname;?> placeholder="Type your name" required>
                </div>

                <div class="input-group w50">
                    <label for="lastname"> Last name</label>
                    <input type="text" name="lastname" id="lastname" class="inputUser" value=<?php echo $lastname;?> placeholder="Type your name" required>
                </div>

                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="inputUser" value=<?php echo $email;?> placeholder="Type your email" required>
                </div>

                <div class="input-group w50">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="inputUser" value=<?php echo $password;?> placeholder="Type your password" required>
                </div>

                   <div class="input-group w50">
                    <label for="phone">Mobile Phone</label>
                    <input type="tel" name="phone" id="phone" class="inputUser" value=<?php echo $mobilephone;?> placeholder="Type your mobile phone number" required>
                </div>

                <div class="input-group"></div>
                <p>Gender<p>
                  <input type="radio" id="female" name="gender" value="female" <?php echo ($gender == 'female') ? 'checked' : '';?> required>
                  <label for="female">Female</label>
                 
                  <input type="radio" id="male" name="gender" value="male" <?php echo ($gender == 'male') ? 'checked' : '';?> required>
                  <label for="male">Male</label>
                  
                  <input type="radio" id="other" name="gender" value="other" <?php echo ($gender == 'other') ? 'checked' : '';?> required>
                  <label for="other">Other</label>
                </p>              
                <br>
                
                <div class="datebirthday">
                  <label for="birthday"><b>Birthday</b></label>
                  <input type="date" name="birthday" id="birthday" classa="inputuser" value=<?php echo $birthday;?> required>
                </div>
                <br>
                <div class="input-group">
                    <label for="address">Address</label>
                    <input type="address" name="address" id="address" value=<?php echo $address;?> placeholder="Type your address" required>
                </div>

                <div class="input-group w50">
                    <label for="eircode">Eircode</label>
                    <input type="eircode" name="eircode" id="eircode" value=<?php echo $eircode;?> placeholder="Type yopur eircode" required>
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
                <input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit" value="SUBMIT">
                
                                
            </form>
        </div>
    </div>
</body>
</html>