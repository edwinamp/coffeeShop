<?php
session_start();
include "config.php";

if (!isset($_SESSION['id'])) {
    header('Location: signin.php');
    exit;
}

$user_id = $_SESSION['id'];

$result_profile = mysqli_query($con, "SELECT * FROM users WHERE id='$user_id'");
if (!$result_profile || mysqli_num_rows($result_profile) == 0) {
    header('Location: signin.php');
    exit;
}

$userProfile = mysqli_fetch_assoc($result_profile);

$_SESSION['username'] = $userProfile['username'];
$_SESSION['email'] = $userProfile['email'];
$_SESSION['fullname'] = $userProfile['fullname'];
$_SESSION['phone'] = $userProfile['phone'];
$_SESSION['address'] = $userProfile['address'];

header('Location: profile.php');
exit;
?>
