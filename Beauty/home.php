<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Spa</title>
</head>

<body>
    <div id="preloader"></div>
    <nav>

        <img src="Image/newlogo.png" class="logo">
        <div class="name">
            <h3>N
                <span class="m">M</span>
                N
                <br>
                <span class="b"><i>beauty</i></span> parlour
            </h3>
            <p><?php echo htmlspecialchars($_SESSION["name"]) ?></p>
        </div>
        <div class="navbar" id="mobile:menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>


        <ul class="Nav">
            <li><a href="home.php" class="Items">Home</a></li>
            <li><a href="about.php" class="Items">About</a></li>
            <li><a href="services.php" class="Items">Services</a></li>
            <li><a href="bookings.php" class="Items"> Booking</a></li>
            <li><a href="reviews.php" class="Items">Reviews</a></li>
            <li><a href="#contacts" class="Items">Contact us</a></li>
            <li><a href="logout.php" class="Items">Log out </a></li>
        </ul>
        <!-- <button class="hamburger">
            <i class="menuIcon material-icons">Menu</i>
            <i class="closeIcon material-icons">Close</i>
        </button>-->
        <a class="hamburger btn-menu"><i style="font-size: 30px;" class="fa fa-bars" aria-hidden="true"></i></a>
    </nav>


    <div class="textimage"><img src="Image/homep.jpg" alt="Home page" width="100%">
        <h2 class="text" id="line"> This is how our main branch parlour looks like feel free to come and join us in this journey of making your body feel relaxed and help
            in your hair growth journey.Please feel free to contact the management incase of any query or unsatisfatication of the services provided<br><br>
            <hr>
            <hr>
            <hr>~From management
        </h2>
    </div>
    <div class="location">
        <div class="locate">
            <p><b style="text-align:center;font-size: 20px;">Locate us</b><br><br><br>
                Juma building 5th street off Ngong road<br>
                <br><br>
                Opposite Junction mall<br>
                <br><br>
                Along Mombasa road third floor dukto building<br>
                <br><br>
                Kisumu Along Whiyaki highway sixteenth floor Sunshine building.<br><br>
            </p>

        </div>


        <div class="contact">

            <form action="NMN20@gmail.com"><b style="text-align:center;font-size: 20px;">Contact us</b><br><br>
                <p>For more information please feel free to contact us</p><br><br>
                <label>Enter your name</label><br><br>
                <input type="text" name="name" placeholder="Enter your name"><br><br>
                <label>Enter your email</label><br><br>
                <input type="email" name="email" placeholder="email@example.com"><br><br>

                <label>Enter your message</label><br><br>
                <textarea class="inputfield" placeholder="Enter your message" cols="30" rows="5"></textarea>
                <br>
                <br>
                <button>Submit</button>
                <br>
                <br>
                <a href="#" id="logo" class="fa fa-facebook"></a>
                <a href="#" id="logo" class="fa fa-twitter"></a>
                <a href="#" id="logo" class="fa fa-instagram"></a>
                <a href="#" id="logo" class="fa fa-telegram"></a>
                <a href="#" id="logo" class="fa fa-whatsapp"></a>

            </form>
        </div>


    </div>
    <script>
        const nav = document.querySelector(".Nav");
        const item = document.querySelectorAll(".Items");
        const hamburger = document.querySelector(".hamburger");
        const closeicon = document.querySelector(".closeIcon");
        const menuIcon = document.querySelector(".menuIcon");

        function toggleMenu() {
            if (nav.classList.contains("showMenu")) {
                nav.classList.remove("showMenu");
                closeicon.style.display = "none";
                menuIcon.style.display = "block";
            } else {
                nav.classList.add("showMenu");
                closeicon.style.display = "block";
                menuIcon.style.display = "none";

            }
        }
        hamburger.addEventListener("click", toggleMenu);

        item.forEach(
            function(item) {
                item.addEventListener("click", toggleMenu)

            }
        )
    </script>
    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function() {
            loader.style.display = "none";
        })
    </script>



    <a href="#" id="contacts"><span class="back"><b>Back to homepage </b></span></a>
    <p>Copyright &copy;2022:Built with &#x2661; by Elsie.</p>





</body>

</html>