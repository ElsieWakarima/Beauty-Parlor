<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "server.php";
    $username = $_POST["username"];
    $password = $_POST["pass"];

    $statement = $pdo->prepare("SELECT * FROM user WHERE Name=:username");
    $statement->bindValue(":username", $username);
    $statement->execute();
    $details = $statement->fetch(PDO::FETCH_ASSOC);
    if ($details) {
        if (password_verify($password, $details["Password"])) {
            session_start();
            $_SESSION["name"] = $details["Name"];
            header("Location: home.php");
        }
    }
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
    <!-- <div id="preloader"></div>-->
    <a href="index.php" class="htm">Go back to homepage</a>
    <div>
        <form class="log-in" method="POST" action="">

            <h2>Log in page</h2>
            <label>Enter your name</label><br />
            <input type="text" name="username"><br /><br>
            <label>Enter your password</label><br>
            <input type="password" name="pass" placeholder="min 6 characters " name="password_1"><br /><br><br>


            <button type="submit" class="submit">Sign in</button>
            <br><br>
            <p class="message">Not registered?<a href="register.php">Register</a></p>

        </form>
        <!-- <script>
            var loader = document.getElementById("preloader");
            window.addEventListener("load", function() {
                loader.style.display = "none";
            })
        </script>-->



</body>

</html>