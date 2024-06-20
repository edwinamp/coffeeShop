<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bean Bliss Reservation</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- font awesome cdn link -->
</head>

<body>
    <div class="page">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand me-auto" href="index.html"><img src="img/logo.png" alt="Logo"></a>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="img/logo.png" alt="Logo"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="menu.html">Menu</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="reservation.php">Reservation</a>
                            </li>
                            <li class="nav-item"><a class="nav-link mx-lg-2 active" aria-current="page" href="delivery.php">Delivery</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="about.html">About</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" id="contact-link" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <a href="signin.php" class="Lightbtn" id="signin-button">Sign In</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <!--Delivery Menu-->
        <section class="deliveryMenu" id="deliveryMenu">
            <div class="heading2">
                <span>Delivery Menu</span>
                <h1>"Order your favorite now!"</h1>
            </div>
            <!-- Menu Choice -->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/CaroselMenu1.1.png" class="d-block w-100" alt="First slide">
                        <div class="carousel-caption d-flex justify-content-center align-items-end"
                            style="height: 100%;">
                            <a href="#deliveryMenu-hotCoffee" class="Lightbtn">Hot Coffee</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/CaroselMenu2.2.png" class="d-block w-100" alt="Second slide">
                        <div class="carousel-caption d-flex justify-content-center align-items-end"
                            style="height: 100%;">
                            <a href="#deliveryMenu-icedCoffee" class="Lightbtn">Ice Coffee</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/CaroselMenu3.3.png" class="d-block w-100" alt="Third slide">
                        <div class="carousel-caption d-flex justify-content-center align-items-end"
                            style="height: 100%;">
                            <a href="#deliveryMenu-pastires" class="Lightbtn">Pastries</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/CaroselMenu4.4.png" class="d-block w-100" alt="Fourth slide">
                        <div class="carousel-caption d-flex justify-content-center align-items-end"
                            style="height: 100%;">
                            <a href="#deliveryMenu-snacks" class="Lightbtn">Snacks</a>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- Menu Based on Category -->
        <?php
            include 'config.php';
            $categoriesQuery = "SELECT DISTINCT kategori FROM daftar_menu";
            $categoriesResult = mysqli_query($con, $categoriesQuery);
            while ($kategori = mysqli_fetch_assoc($categoriesResult)) {
                $categoryName = $kategori['kategori'];
                echo "<section class='deliveryMenu-{$categoryName}' id='deliveryMenu-{$categoryName}'>";
                echo "<div class='heading'>";
                echo "<span>{$categoryName} Selection</span>";
                echo "<h1>\"Enjoy our delicious {$categoryName}\"</h1>";
                echo "</div>";
                echo "<div class='box-container'>";
                echo "<div class='row'>";
            
                $menuQuery = "SELECT * FROM daftar_menu WHERE kategori = '$categoryName'";
                $menuResult = mysqli_query($con, $menuQuery);
                while ($menu = mysqli_fetch_assoc($menuResult)) {
                    echo "<div class='col-md-4 mb-4'>";
                    echo "<div class='box' id='box{$menu['idMenu']}'>";
                    echo "<img src='img/{$menu['gambar']}' alt='' class='product-img'>";
                    echo "<h3 class='product-title'>{$menu['namaMenu']}</h3>";
                    echo "<div class='price'>Rp {$menu['harga']}</div>";
                    if ($menu['stok'] > 0) {
                        echo "<a class='btn add-cart' data-id='{$menu['idMenu']}'>Add to Cart</a>";
                    } else {
                        echo "<a class='btn btn-secondary' disabled>Out of Stock</a>";
                    }
                    echo "</div>";
                    echo "</div><br />";
                }
            
                echo "</div>";
                echo "</div>";
                echo "</section>";
            }
        ?>


        <!-- CART SECTION -->
        <div class="floating-container">
            <div class="floating-button" id="cart-btn" title="Show Cart">
                <img src="img/cart.png" alt="Chart Logo">
            </div>
        </div>

        <div class="cart">
            <h2 class="cart-title">Your Cart:</h2>
            <div class="cart-content"></div>
            <div class="total">
                <div class="total-title">Total: </div>
                <div class="total-price">Rp 0</div>
            </div>
            <button type="button" class="btn-buy">Checkout Now</button>
        </div>

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
                                <a href="https://www.upnvj.ac.id/" target="_blank"><img src="img/upn.png"
                                        class="logo-upn">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- JavaScript -->
    <script src="script.js"></script>
</body>

</html>

</html>