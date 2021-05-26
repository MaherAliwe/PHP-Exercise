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

    <h1>Check the Word if palindrome or not </h1>

    <form method="POST" action="palindrome.php">

        <label for="name">Enter your word</label>
        <input type="text" id="name" name="word"><br><br>
        <input type="submit" value="Submit">

    </form><br><br>
    <?php

    $palindrome = $_POST['word'];


    if (strtolower($palindrome) == strrev(strtolower($palindrome))) {
        echo "The word $palindrome is  palindrome ";
    } else {
        echo "The word $palindrome is not  palindrome";
    }

    ?>

    <body>

    </body>

</html>