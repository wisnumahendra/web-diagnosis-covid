<?php
// Memulai sesi PHP
session_start();

// Mendapatkan data pasien dari formulir
$nama = $_POST['nama'];
$usia = $_POST['usia'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$golongan_darah = $_POST['golongan_darah'];
$gejala = isset($_POST['gejala']) ? $_POST['gejala'] : [];

// Menyimpan data pasien ke dalam sesi
$_SESSION['nama'] = $nama;
$_SESSION['usia'] = $usia;
$_SESSION['jenis_kelamin'] = $jenis_kelamin;
$_SESSION['golongan_darah'] = $golongan_darah;
$_SESSION['gejala'] = $gejala;

// Menghubungkan ke database
$conn = mysqli_connect("localhost", "root", "", "db_covid");

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mendefinisikan variabel untuk menyimpan total risiko
$total_risiko = 0;

// Memeriksa apakah terdapat gejala yang dipilih
if (!empty($gejala)) {
    // Query untuk memeriksa gejala yang dipilih
    $query = "SELECT nama_gejala, bobot FROM gejala WHERE id_gejala IN (" . implode(',', $gejala) . ")";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Menambahkan risiko dari setiap gejala yang dipilih
            $total_risiko += $row['bobot'];
        }
    }
}

// Menyimpan total risiko ke dalam sesi
$_SESSION['total_risiko'] = $total_risiko;

// Menutup koneksi
mysqli_close($conn);

// Mengalihkan pengguna ke halaman hasil diagnosa
header("Location: hasil.php");
exit();
?>
 