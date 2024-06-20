<?php
include 'config.php';
session_start();

$data = json_decode(file_get_contents("php://input"));
$orderCode = $data->orderCode;
$orderDetails = $data->orderDetails;

foreach ($orderDetails as $orderItem) {
    $title = $orderItem->title;
    $price = $orderItem->price;
    $quantity = $orderItem->quantity;
    $subtotal_amount = $orderItem->subtotal_amount;

    // Ambil kodeMenu berdasarkan nama menu
    $menuQuery = "SELECT idMenu, stok FROM daftar_menu WHERE namaMenu = '$title'";
    $menuResult = mysqli_query($con, $menuQuery);
    $menu = mysqli_fetch_assoc($menuResult);
    $idMenu = $menu['idMenu'];
    $stok = $menu['stok'];

    // Periksa stok
    if ($stok >= $quantity) {
        // Masukkan data ke tabel pesan
        $insertQuery = "INSERT INTO pesan (kodePesanan, kodeMenu, nama, jumlah, harga, totalHarga) VALUES ('$orderCode', '$idMenu', '$title', '$quantity', '$price', '$subtotal_amount')";
        mysqli_query($con, $insertQuery);

        // Kurangi stok di tabel daftar_menu
        $newStok = $stok - $quantity;
        $updateStokQuery = "UPDATE daftar_menu SET stok = '$newStok' WHERE idMenu = '$idMenu'";
        mysqli_query($con, $updateStokQuery);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Stok tidak cukup untuk menu: ' . $title]);
        exit;
    }
}

echo json_encode(['status' => 'success', 'message' => 'Pesanan berhasil']);
?>
