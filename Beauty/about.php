<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/about.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>About</title>
</head>

<body>
    <div id="preloader"></div>
    <div class="whole">


        <ul class="Nav">
            <li><a href="home.php" class="Items">Home</a></li>
            <li><a href="about.php" class="Items">About</a></li>
            <li><a href="services.php" class="Items">Services</a></li>
            <li><a href="bookings.php" class="Items"> Booking</a></li>
            <li><a href="reviews.php" class="Items">Reviews</a></li>
            <li><a href="home.php" class="Items">Contact us</a></li>
            <li><a href="logout.php" class="Items">
                    <div>Log out</div>
                </a></li>
        </ul>
        <button class="hamburger">
            <i class="menuIcon material-icons">Menu</i>
            <i class="closeIcon material-icons">Close</i>
        </button>
        </nav>
        <h2 class="about">About Us</h2>
        <div class="write">
            <p>Taught and trained to bring the artistic nature in us for the glory of beauty. We work together to create design and produce work that we are proud of for our customers and hopefully they leave the parlour happy and proud.</p>
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