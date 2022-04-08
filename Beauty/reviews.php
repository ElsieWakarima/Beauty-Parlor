<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/reviews.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Reviews</title>
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
        <li><a href="logout.php" class="Items">Log out
            </a></li>
    </ul>
    <button class="hamburger">
        <i class="menuIcon material-icons">Menu</i>
        <i class="closeIcon material-icons">Close</i>
    </button>
    </nav>
    <h3>Reviews</h3>

    <div class="first">
        <p><i>My go to place for massage after a long week of work never disappionts.</i></p>
        <br>
        <br>
        ~Jordan Nile
    </div>
    <div class="second">
        <p><i>Quick booking I've seen so far ,a plus on that.</i>
            <br>
            <br>
            ~Riley Jones
        </p>
    </div>

    <div>
        <div class="third">
            <p><i>
                    My hair was was weak before i started going to NMN, but since they gave me tips on products to use, weak hair is no longer a problem to me.
                </i>
                <br>
                <br>
                ~Hailey James

            </p>
        </div>
        <div class="fourth">
            <p>
                <i>
                    My younger sister gets her manicure here and to be frank her nails are always those you want to stare at all day.
                </i>
                <br>
                <br>
                ~Ryker Johnson
            </p>
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