<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: signin.php');
    exit;
}

include "config.php";

$user_id = $_SESSION['id'];
$query = "SELECT * FROM users WHERE id='$user_id'";
$result = mysqli_query($con, $query);
$user = mysqli_fetch_assoc($result);

if (!$user) {
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
</head>
<body class="left">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand me-auto" href="index.html"><img src="img/logo.png" alt="Bean Bliss Logo"></a>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!---gambar--->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #EAD8C0;">
                <p class="fs-2 mt-3" style="font-weight: 600; color: #74512D;">Bean Bliss</p>
                <small class="text-wrap text-center mb-3" style="width: 17rem; color: #A79277;">Profile</small>
                <div class="featured-image">
                    <img src="img/profileForm.png" class="img-fluid" style="width: 250px;">
                </div>
            </div> 

            <!---form---> 
            <div class="col-md-6 right-box">
                <form id="updateProfile" action="updateProfile.php" method="post">
                    <div class="row align-items-center">
                        <div class="header-text mb-4">
                            <h2>Complete Your Profile</h2>
                            <small class="text-wrap text-center mb-3" style="width: 17rem; color: #000;">Please take a moment to complete your profile information</small>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Full Name" name="fullname" value="<?php echo htmlspecialchars($user['fullname']); ?>" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="tel" class="form-control form-control-lg bg-light fs-6" placeholder="Phone Number" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>" required>
                        </div>
                        <p><br>Address Information</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Street/City/PostalCode" name="address" value="<?php echo htmlspecialchars($user['address']); ?>" required>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg w-100 fs-6 Lightbtn" id="profileForm-button">Submit</button>
                        </div>
                    </div>
                </form>
            </div> 
        </div>
    </div>
    
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
