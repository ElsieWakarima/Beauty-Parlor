<?php

require_once "server.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password_1 = $_POST["password_1"];
    $password_2 = $_POST["password_2"];
    if ($password_1 != $password_2) {
        exit;
    }
    $hashed_pwd = password_hash($password_1, PASSWORD_DEFAULT);
    $statement = $pdo->prepare("INSERT INTO user(Name,Password,Email) VALUES(:username,:passwd,:email)");
    $statement->bindValue(":username", $username);
    $statement->bindValue(":passwd", $hashed_pwd);
    $statement->bindValue(":email", $email);
    $statement->execute();
    header("Location: index.php?mess=registered");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">

    <title>Document</title>

</head>

<body>
    <div id="preloader"></div>
    <a href="index.html" class="htm">Go back to homepage</a>



    <form class="registration-page" method="POST" action="register.php">
        <h2>Registration form</h2>
        <p>Please Fill in this form to create an account and register</p>
        <label>Enter your name</label><br />
        <input type="text" name="username"><br />
        <label>Enter your email</label><br />
        <input type="email" placeholder="email@example.com" name="email"><br />
        <label>Enter your password</label><br>
        <input type="password" name="password_1" placeholder="min 6 characters "><br />
        <label>Confirm your password</label><br />
        <input type="password" name="password_2" placeholder="min 6 characters "><br />
        <p>By creating an account you agree to our<a href="#">Terms & Privacy</a></p>
        <button type="submit" class="submit" name="register">Register</button>
        <div class="signin">
            <p class="message">Already have an account?<a href="index.php">Log in</a></p>

    </form>
    <!-- <div>
        <form class="log-in" method="POST" action="form.php">

            <h2>Log in page</h2>
            <label>Enter your name</label><br />
            <input type="text" name="username"><br /><br>
            <label>Enter your password</label><br>
            <input type="password" name="pass" placeholder="min 6 characters " name="password_1"><br /><br><br>


            <button type="submit" class="submit">Sign in</button>
            <br><br>
            <p class="message">Not registered?<a href="#">Register</a></p>

        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </script>
 -->
    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function() {
            loader.style.display = "none";
        })
    </script>


</body>

</html>