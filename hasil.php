<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"/>
  <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap"
      rel="stylesheet"/>
  <link rel="stylesheet" href="style.css" />
  <title>Hasil Diagnosa COVID-19</title>
</head>
<body>
    <nav class="navbar py-2 navbar-expand-lg navbar-light">
      <div class="container">
            <a class="navbar-brand" href="#">
            <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Covid-19
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item align-self-center active">
                    <a class="nav-link" href="index.php"
                        >Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item align-self-center active">
                    <a class="nav-link"  href="diagnosis.php">Form Diagnosa <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  <div class="container">
    <h2 class="mt-3 text-center">Hasil Diagnosa COVID-19</h2>
    <hr>
    <div class="row">
      <div class="col-sm-6">
        <?php
        // Mulai sesi PHP
        session_start();

        // Mendapatkan data pasien dari sesi
        $nama = $_SESSION['nama'];
        $usia = $_SESSION['usia'];
        $jenis_kelamin = $_SESSION['jenis_kelamin'];
        $golongan_darah = $_SESSION['golongan_darah'];
        

        // Mendapatkan total risiko dari sesi
        $total_risiko = $_SESSION['total_risiko'];

        // Menampilkan data pasien dalam tabel
        echo "<h5>Data Pasien:</h5>";
        echo "<table class='table table-bordered'>";
        echo "<tr><th>Nama</th><td>" . $nama . "</td></tr>";
        echo "<tr><th>Usia</th><td>" . $usia . " tahun</td></tr>";
        echo "<tr><th>Jenis Kelamin</th><td>" . $jenis_kelamin . "</td></tr>";
        echo "<tr><th>Golongan Darah</th><td>" . $golongan_darah . "</td></tr>";
        echo "</table>";

        // Hapus sesi
        session_unset();
        session_destroy();
        ?>
      </div>
      <div class="col-sm-6">
        <?php
        // Menampilkan hasil diagnosa
        echo "<h4>Hasil Diagnosa:</h4>";
        echo "<h5>Tingkat Risiko: ". $total_risiko ."</h5>";

        // Memberikan rekomendasi risiko
        if ($total_risiko > 10) {
          echo '<div class="alert alert-danger" role="alert">';
          echo "<p>Anda memiliki tingkat risiko TINGGI terkena COVID-19. Silakan segera konsultasikan dengan dokter atau melakukan tes COVID-19 untuk konfirmasi lebih lanjut.</p>";
          echo '</div>';
        } else if ($total_risiko > 7) {
          echo '<div class="alert alert-warning" role="alert">';
          echo "<p>Perlu di WASPADAI. Konsultasikan dengan dokter jika gejala menetap.</p>";
          echo '</div>';
        } else {
          echo '<div class="alert alert-success" role="alert">';
          echo "<p>Anda memiliki tingkat risiko RENDAH terkena COVID-19. Tetap jaga kesehatan dan patuhi protokol kesehatan.</p>";
          echo '</div>';
        }
        ?>
      <a class="btn btn-success" href="diagnosis.php" role="button">Selesai</a>
      </div>
    </div>
  </div>
</body>
</html>
