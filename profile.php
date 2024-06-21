<?php
session_start();
include 'config.php';

if (!isset($_SESSION['id'])) {
    header('Location: signin.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="left">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand me-auto" href="index.html"><img src="img/logo.png" alt="Bean Bliss Logo"></a>
        </div>
    </nav>

    <div class="profileContainer">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="row border rounded-5 p-3 bg-white shadow box-area">
                <!---form--->
                <div class="col-md-12 right-box">
                    <form class="profileForm" id="profileForm" action="profileController.php" method="post">
                        <div class="row align-items-center">
                            <div class="header-text mb-4">
                                <div class="heading">
                                    <span><i class="fas fa-user"></i> Profile</span>
                                </div>
                            </div>
                            <p>Username</p>
                            <div class="input-group mb-2">
                                <span class="form-control form-control-lg bg-light fs-6"><?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : ''; ?></span>
                            </div>
                            <p>Email</p>
                            <div class="input-group mb-2">
                                <span class="form-control form-control-lg bg-light fs-6"><?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; ?></span>
                            </div>
                            <p>Full Name</p>
                            <div class="input-group mb-2">
                                <span class="form-control form-control-lg bg-light fs-6"><?php echo isset($_SESSION['fullname']) ? htmlspecialchars($_SESSION['fullname']) : ''; ?></span>
                            </div>
                            <p>Phone Number</p>
                            <div class="input-group mb-2">
                                <span class="form-control form-control-lg bg-light fs-6"><?php echo isset($_SESSION['phone']) ? htmlspecialchars($_SESSION['phone']) : ''; ?></span>
                            </div>
                            <p>Address Information</p>
                            <div class="input-group mb-3">
                                <span class="form-control form-control-lg bg-light fs-6"><?php echo isset($_SESSION['address']) ? htmlspecialchars($_SESSION['address']) : ''; ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <a href="profileForm.php" class="btn w-30"><i class="fas fa-edit"></i> Update Information</a>
                            </div>
                            <div class="input-group mb-3 justify-content-end">
                                <button id="logout-button" type="submit" name="submit" value="logout" class="btn btn-lg w-30 fs-6 Lightbtn end"><i class="fas fa-sign-out-alt"></i> Log-out</button>
                            </div>
                        </div>
                    </form>                      
                </div> 
            </div>
        </div>
    </div>
    
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
