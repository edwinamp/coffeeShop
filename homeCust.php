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
                            <li class="nav-item"><a class="nav-link mx-lg-2 " aria-current="page" id="menuInfoHome-link" href="#menuInfoHome">Menu</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2 " aria-current="page" id="reservationInfoHome-link" href="#reservationInfoHome">Reservation</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2 " aria-current="page" id="deliveryInfoHome-link" href="#deliveryInfoHome">Delivery</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2 " aria-current="page" id="aboutInfoHome-link" href="#aboutInfoHome">About</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2 " aria-current="page" id="footer-link" href="#footer">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <a href="profile.php" class="Lightbtn" id="profile-button"><i class="fas fa-user"></i>Profile</a>
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
                    <a href="delivery.php" class="btn">Grab Now</a>
                </div>
                <div class="home-img">
                    <img src="img/background1.png" alt="coffee">
                </div>
            </div>
            <div class="homeBox2"></div>
        </section>

        <!-- Carousel Fav -->
        <section class="favorite" id="favorite">
            <div class="heading">
                <span>Top Picks</span>
                <h1>Must-Try Our Specialties</h1>
            </div>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/displayCarosel1.1.png" class="d-block w-100" alt="First slide">
                        <div class="carousel-caption d-block text-end">
                            <h5>Hot Chocolate</h5>
                            <p>"Indulge in the rich and creamy goodness of our hot chocolate,<br>made with premium cocoa powder and steamed milk<br>for a luxurious and comforting drink."</p>
                            <a href="menu.html#cardHotCoffee4" class="btn">More Details</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/displayCarosel2.2.png" class="d-block w-100" alt="Second slide">
                        <div class="carousel-caption d-block text-end">
                            <h5>Americano</h5>
                            <p>"Enjoy the bold and rich flavor of our classic black coffee,<br>brewed to perfection for a satisfying experience."</p>
                            <a href="menu.html#cardHotCoffee5" class="btn">More Details</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/displayCarosel3.3.png" class="d-block w-100" alt="Third slide">
                        <div class="carousel-caption d-block text-end">
                            <h5>Cappuccino</h5>
                            <p>"Indulge in the creamy goodness of our Cappuccino<br>made with a perfect balance of espresso and steamed milk,<br>topped with a light foam.</p>
                            <a href="menu.html#cardHotCoffe1" class="btn">More Details</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!--Promo-->
        <section class="promo" id="promo">
            <div class="heading2">
                <span>Special Offer!</span>
                <h1>Save up to 50% on your favorite products. Offer ends soon!</h1>
            </div>
            <div class="promo-container">
                <div class="box">
                    <div class="box-img">
                        <img src="img/promo1.png" alt="promo1">
                    </div>
                    <h2>Americano</h2>
                    <span>IDR 20,000</span>
                    <a href="delivery.php" class="btn">Order Now</a>
                </div>

                <div class="box">
                    <div class="box-img">
                        <img src="img/promo2.png" alt="promo2">
                    </div>
                    <h2>Espresso</h2>
                    <span>IDR 20,000</span>
                    <a href="delivery.php" class="btn">Order Now</a>
                </div>

                <div class="box">
                    <div class="box-img">
                        <img src="img/promo3.png" alt="promo3">
                    </div>
                    <h2>Cappuccino</h2>
                    <span>IDR 30,000</span>
                    <a href="delivery.php" class="btn">Order Now</a>
                </div>

                <div class="box">
                    <div class="box-img">
                        <img src="img/promo4.png" alt="promo4">
                    </div>
                    <h2>Macchiato</h2>
                    <span>IDR 25,000</span>
                    <a href="delivery.php" class="btn">Order Now</a>
                </div>
            </div>
        </section>

        <!--What's New-->
        <section class="new" id="new">
            <div class="new-container">
                <div class="new-text text-start">
                    <div class="heading">
                        <span>What's New</span>
                        <h1>Savor the Best, Only in Our New Menu</h1>
                    </div>
                    <br>
                    <h5>Waffle</h5>
                    <p>"Crispy on the outside, soft and fluffy on the inside, our waffles are a delightful treat for any time of day. Enjoy them with a variety of toppings such as fresh berries, whipped cream, syrup, or a dusting of powdered sugar."</p>
                    <a href="delivery.php" class="btn">Grab Now</a>
                </div>
                <div class="new-img">
                    <img src="img/new.png" alt="new">
                </div>
            </div>
        </section>

        <!-- Menu-Home -->
        <section class="menuInfoHome" id="menuInfoHome">
            <div class="containerInfoHome">
                <div class="infoHome-img">
                    <div id="carouselMenuHome" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/menuHome1.png" class="d-block w-100" alt="menuHome1">
                            </div>
                            <div class="carousel-item">
                                <img src="img/menuHome2.png" class="d-block w-100" alt="menuHome2">
                            </div>
                            <div class="carousel-item">
                                <img src="img/menuHome3.png" class="d-block w-100" alt="menuHome3">
                            </div>
                            <div class="carousel-item">
                                <img src="img/menuHome4.png" class="d-block w-100" alt="menuHome4">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMenuHome" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselMenuHome" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="infoHome-text">
                    <div class="heading">
                        <span>Menu</span>
                    </div>
                    <h2>Our menu features</h2>
                    <p>A diverse selection of delectable dishes, each designed to tantalize your taste buds and satisfy your cravings. From hearty coffee options to sumptuous pastries and exquisite snaks, we have something to delight every palate.</p>
                    <a href="menu.html" class="btn">Chcek Our Menu</a>
                </div>
            </div>
        </section>

        <!-- Reservation-Home -->
        <section class="reservationInfoHome" id="reservationInfoHome">
            <div class="containerInfoHome">
                <div class="infoHome-text">
                    <div class="heading">
                        <span>Reservation</span>
                    </div>
                    <h2>Enjoy an unforgettable dining experience</h2>
                    <p>Our easy-to-use reservation system allows you to secure your spot at our restaurant with just a few clicks.</p>
                    <p>How to Reserve:</p>
                    <ol>
                        <li>1. Select the date and time that suits you best.</li>
                        <li>2. Provide your contact information and any special requests.</li>
                        <li>3. Receive instant confirmation of your booking via email.</li>
                    </ol>
                    <a href="reservation.html" class="btn">Save Your Sit</a>
                </div>
                <div class="infoHome-img">
                    <div id="carouselReservationHome" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/indoor.png" class="d-block w-100" alt="indoor">
                            </div>
                            <div class="carousel-item">
                                <img src="img/outdoor.png" class="d-block w-100" alt="outdoor">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselReservationHome" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselReservationHome" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Delivery Home-->
        <section class="deliveryInfoHome" id="deliveryInfoHome">
            <div class="containerInfoHome">
                <div class="infoHome-img">
                    <img src="img/deliveryHome.png" alt="">
                </div>
                <div class="infoHome-text">
                    <div class="heading">
                        <span>Delivery</span>
                    </div>
                    <h2>We bring your favorite dishes right to your doorstep</h2>
                    <p>Indulge in our culinary delights without leaving your house.</p>
                    <p>How to Order:</p>
                    <ol>
                        <li>1. Visit our online menu.</li>
                        <li>2. Select your favorite coffee and add to cart.</li>
                        <li>3. Proceed to checkout and provide your delivery details.</li>
                        <li>4. Confirm your order and make the payment.</li>
                        <li>5. Sit back and relax while we prepare your order.</li>
                    </ol>
                    <a href="delivery.php" class="btn">Order Now</a>
                </div>
            </div>
        </section>

        <!-- About -->
        <section class="aboutInfoHome" id="aboutInfoHome">
            <div class="containerInfoHome">
                <div class="infoHome-text">
                    <div class="heading">
                        <span>About Us</span>
                    </div>
                    <h2>At our restaurant,</h2>
                    <p>We believe that food is more than just sustenance; it's an experience that brings people together. Our journey began with a passion for culinary excellence and a commitment to providing our guests with unforgettable dining moments.</p>
                    <a href="about.html" class="btn">Learn More</a>
                </div>
                <div class="infoHome-img">
                    <img src="img/about.png" alt="about">
                </div>
            </div>
        </section>

        <!-- Footer Section -->
        <section class="footer" id="footer">
            <h2 class="text-center mb-4">Contact Us</h2>
            <div class="footer-container my-5">
                <div class="logo">
                    <img src="img/logo1.png" class="img">
                </div>
                <div class="location">
                    <h5>Our Location</h5>
                    <p>123 Coffee Street, Jakarta, Indonesia</p>
                </div>
                <div class="Info">
                    <h5>Contact Information</h5>
                    <p>Email: info@beanbliss.com</p>
                    <p>Phone: +62 123 456 7890</p>
                </div>
            </div>
            <div class="kelompok">
                <div class="row mt-4">
                    <hr /><br />
                    <div class="col-md-12">
                        <div class="text-left">
                            <h5>© 2024 Kelompok 2</h5>
                        </div>
                        <div class="anggota">
                            <div class="text-center flex-grow-1">
                                <p class="members">Nisaul Husna</p>
                                <p class="numbers">2210511055</p>
                            </div>
                            <div class="text-center flex-grow-1">
                                <p class="members">Adinda Rizki Sya'bana Diva</p>
                                <p class="numbers">2210511056</p>
                            </div>
                            <div class="text-center flex-grow-1">
                                <p class="members">Mahira Afifa Mulia</p>
                                <p class="numbers">2210511071</p>
                            </div>
                            <div class="text-center flex-grow-1">
                                <p class="members">Edwina Martha Putri</p>
                                <p class="numbers">2210511072</p>
                            </div>
                            <div class="text-right">
                                <a href="https://www.upnvj.ac.id/" target="_blank"><img src="img/upn.png" class="logo-upn">
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>

</body>
</html>
