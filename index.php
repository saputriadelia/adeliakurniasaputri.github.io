<?php
// Proses simpan artikel
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi data yang dikirim dari form
    $judul = htmlspecialchars($_POST['judul']);
    $tanggal = date('F d, Y'); // Ambil tanggal saat ini
    $konten = htmlspecialchars($_POST['konten']);

    // Simpan artikel ke dalam file atau database
    // Misalnya, disimpan dalam file teks atau database MySQL

    // Redirect kembali ke halaman utama setelah berhasil menyimpan artikel
    header("Location: index.html");
    exit;
} else {
    // Jika metode yang digunakan bukan POST, redirect ke halaman utama
    header("Location: index.html");
    exit;
}
?>
