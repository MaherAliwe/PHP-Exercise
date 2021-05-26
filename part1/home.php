<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    
    <form  class="form1"action="safe.php" method="post">
        <h3>Regisration</h3>
        <input type="text" name="fullname" placeholder="Entre your name">
        <br>
        <input type="text" name="username" placeholder="Entre your username">
        <br>
        <input type="password" name="password" placeholder="Entre your password">
        <br>
        <input type="password" name="Confirm_password" placeholder="Confirm your password">
        <br>
        <input type="Email" name="email" placeholder="example@example.com">
        <br>
        <input type="phonenumber" name="phone" placeholder="Entre your phone Number">
        <br>
        <input type="date" name="birth" placeholder="">
        <br>
        <input type="phonenumber" name="social" placeholder="Entre your social security number">
        <br>
        <input type="submit" value="Register" name="submit">
    </form>



    
    <form class="form2" action="safe.php" method="POST">
        <h3>Login</h3>
        <input type="text" name="loginsername" placeholder="Username">
        <br>
        <input type="password" name="loginpassword" placeholder="Password">
        <br>
        <input type="submit" value="Login" name="submit">
    </form>
</body>

