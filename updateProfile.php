<?php
session_start();
include "config.php";

if (!isset($_SESSION['id'])) {
    header('Location: signin.php');
    exit;
}

$user_id = $_SESSION['id'];
$fullname = mysqli_real_escape_string($con, $_POST['fullname']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$address = mysqli_real_escape_string($con, $_POST['address']);

$query = "UPDATE users SET fullname='$fullname', phone='$phone', address='$address' WHERE id='$user_id'";
$result = mysqli_query($con, $query);

if ($result) {
    $_SESSION['fullname'] = $fullname;
    $_SESSION['phone'] = $phone;
    $_SESSION['address'] = $address;
    
    header('Location: profile.php');
    exit;
} else {
    echo "Error updating profile: " . mysqli_error($con);
}
?>
