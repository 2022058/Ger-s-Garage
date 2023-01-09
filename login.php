<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/form.css">
    <title>Login</title>
</head>

<body>
    <div class="box">
        <div class="form-box">
            <h2>MEMBERS LOGIN</h2>
            <p> Not a member yet? <a href="createanaccount.php"> Please Join Here </a> </p>                      
            <form action="testlogin.php" method="POST">
                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="Type your email" required>
                </div>

                <div class="input-group w50">
                    <label for="senha">Password</label>
                    <input type="password" name="password" id="senha" placeholder="Type your password" required>
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
                .button-home button{
                    width: 100%;
                    height: 47px;
                    background: #6420d1;
                    border-radius: 20px;
                    outline: none;
                    border: none;
                    margin-top: 15px;
                    color: white;
                    cursor: pointer;
                    font-size: 25px;    
                }
                </style>
                
                <div class="inputsubmit w50">
                    <input type="submit" name="submit" value="Submit">
                </div>
                
                <div class="button-home">
                    <button><a href="index.html">Home</a></button>
                </div>
                      
            </form>
        </div>
    </div>
</body>
</html>