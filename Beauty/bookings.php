<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/booking.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Booking</title>
</head>

<body>
    <div id="preloader"></div>

    <ul class="Nav">
        <li><a href="home.php" class="Items">Home</a></li>
        <li><a href="about.php" class="Items">About</a></li>
        <li><a href="services.php" class="Items">Services</a></li>
        <li><a href="bookings.php" class="Items"> Booking</a></li>
        <li><a href="reviews.php" class="Items">Reviews</a></li>
        <li><a href="home.php" class="Items">Contact us</a></li>
        <li><a href="logout.php" class="Items">Log out</a></li>
    </ul>
    <button class="hamburger">
        <i class="menuIcon material-icons">Menu</i>
        <i class="closeIcon material-icons">Close</i>
    </button>
    </nav>

    <div>
        <div class="jane">
            <p><img src="Image/hairdresser1.jpg"><b style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><br>
                    <br>Jane</b><br><br>
                Has excellent customer serviceand also communication skills. Handles the salon clients with great care and develops good relationships. She is a team player and flesible with many working conditions.<br><br></b><button><b>Book</b></button></p>
        </div>
        <div class="rissa">
            <p><img src="Image/masseu.jpg"><b style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><br>
                    <br>Rissa</b><br><br>A stretching, medical massage, flexiblity and tissue corrective massage and bodywork come naturally to her. has had training for about twenty years. Has best services that you can ask for <br><br></b><button><b>Book</b></button> </p>
        </div>
    </div>
    <div>
        <div class="james">
            <p> <img src="Image/James.jpg">
                <b style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><br>
                    <br>James</b><br><br>He gives all kinds of cuts that you ask for or even think of. It is his natural talent, in born ifi may say. Has gone to college to know more. There is no doubt that you will be impressed by his work.<br><br></b><button><b>Book</b></button>
            </p>
        </div>

        <div class="tatiana">

            <p> <img src="Image/nailattendant.jpg">
                <b style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><br>
                    <br>Tatiana</b><br><br>
                She has skills and tallent in drawing, has a good sense of art and offers the best advice on what would look best on a customer if need be.Can do both nails for official, casual, outgoing you name all occassions she can do it.<br><br></b><button><b>Book</b></button>
            </p>
        </div>
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




</body>

</html>