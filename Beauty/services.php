<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/services.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Services</title>
</head>

<body>
    <div id="preloader"></div>
    <a href="index.html">Back to homepage</a>
    <ul class="Nav">
        <li><a href="home.php" class="Items">Home</a></li>
        <li><a href="about.php" class="Items">About</a></li>
        <li><a href="services.php" class="Items">Services</a></li>
        <li><a href="bookings.php" class="Items"> Booking</a></li>
        <li><a href="reviews.php" class="Items">Reviews</a></li>
        <li><a href="home.php" class="Items">Contact us</a></li>
        <li><a href="logout.php" class="Items">Log out </a></li>
    </ul>
    <button class="hamburger">
        <i class="menuIcon material-icons">Menu</i>
        <i class="closeIcon material-icons">Close</i>
    </button>
    </nav>

    <div class="firsttwoservices">
        <div class="massage">
            <p><img src="Image/Massage.jpg">There are various types of massage we try to have clients that can ffer them all. We offer the following at the momment; aromatherapy massage, craniosacral therapy, deep tissue massage, hot stone massage, myofascial massage, reflexology massage and reiki.</p>
        </div>



        <div class="hair">
            <p>
                <img src="Image/ache.jpg">We offer both salon and barber services. In both there is hair cutting and dying. The salon does braiding, dreading, plaiting lines and so on. There is still waxing and all forms of hair removal.
            </p>
        </div>
    </div>

    <div class="last two services">
        <div class="facials">
            <p><img src="Image/facial.jpg">We chemical peels, microdermabrasion, dermaplaning, ageless facials, acne facials and signature facials.</p>
        </div>
        <div class="nails">
            <p>
                <img src="Image/polish.jpg"> We do both manicure and pedicure. We do gel, stickons and acrylics. We do any nal art and design that a customers want or request.
            </p>

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