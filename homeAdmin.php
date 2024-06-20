<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bean Bliss - Home</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="page">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand me-auto" href="#"><img src="img/logo.png" alt="Logo"></a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="img/logo.png" alt="Logo"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item"><a class="nav-link mx-lg-2 active" aria-current="page" id="home-link" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" id="menuInfoHome-link" 
                            href="#menuInfoHome">Menu</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" id="reservationInfoHome-link" href="#reservationInfoHome">Reservation</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" id="deliveryInfoHome-link" href="#deliveryInfoHome">Delivery</a></li>
                        </ul>
                    </div>
                </div>
                <a href="logout.php" class="Lightbtn" id="signin-button">Sign Out</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <!-- Home -->
        <section class="home" id="home">
            <div class="homeBox1">
                <div class="home-text">
                    <h1>Bean Bliss Coffee</h1>
                    <h2>Brewing Joy in Every Cup</h2>
                    <h3>Experience the freshness and warmth in every sip of Bean Bliss Coffee.<br></h3>
                </div>
                <div class="home-img">
                    <img src="img/background1.png" alt="coffee">
                </div>
            </div>
            <div class="homeBox2"></div>
        </section>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>

</body>
</html>
