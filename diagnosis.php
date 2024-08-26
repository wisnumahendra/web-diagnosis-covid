<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"/>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap"
      rel="stylesheet"/>
    <link rel="stylesheet" href="style.css" />
    <title>Form Diagnosa COVID-19</title>
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
                        >Home <span class="sr-only">(current)</span></a
                    >
                    </li>
                    <li class="nav-item align-self-center active">
                    <a class="nav-link"  href="index.php #informasi">Informasi <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
    <h2 class="mt-2 mb-5 text-center">Form Diagnosa COVID-19</h2>
    <form action="proses.php" method="post">
      <div class="row">
          <div class="col-sm-6">
              <p class="font-weight-bold">Data Pasien:</p>
              <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
              </div>
              <div class="form-group">
                <label for="usia">Usia:</label>
                <input type="number" class="form-control" id="usia" name="usia" required>
              </div>
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                  <option value="">Pilih...</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="golongan_darah">Golongan Darah:</label>
                <select class="form-control" id="golongan_darah" name="golongan_darah" required>
                  <option value="">Pilih...</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="AB">AB</option>
                  <option value="O">O</option>
                </select>
              </div>
          </div>
            <div class="col-sm-6 ">
                <p class="font-weight-bold" >Pilih gejala yang Anda alami:</p>
                <?php
                // Menghubungkan ke database
                $conn = mysqli_connect("localhost", "root", "", "db_covid");
                // Memeriksa koneksi
                if (!$conn) {
                die("Koneksi gagal: " . mysqli_connect_error());
                }
                // Query untuk mendapatkan gejala dari database
                $query = "SELECT id_gejala, nama_gejala FROM gejala";
                $result = mysqli_query($conn, $query);
                // Membuat pilihan gejala dalam bentuk checkbox
                if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="form-check">';
                    echo '<input type="checkbox" class="form-check-input" name="gejala[]" value="' . $row['id_gejala'] . '">';
                    echo '<label class="form-check-label" for="' . $row['id_gejala'] . '">' . $row['nama_gejala'] . '</label>';
                    echo '</div>';
                }
                }
                // Menutup koneksi
                mysqli_close($conn);
                ?>
                <br>
                <button type="submit" class="btn btn-primary" value="Diagnosis">Diagnosis</button>
                <div id="warningMessage" class="text-danger mt-2" style="display: none;">Gejala wajib diisi!!</div>
            </div>
        </div>
      </form>
    </div>
    <script>
        document.getElementById('diagnosisForm').addEventListener('submit', function(event) {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            if (checkboxes.length === 0) {
                document.getElementById('warningMessage').style.display = 'block';
                event.preventDefault();
            } else {
                document.getElementById('warningMessage').style.display = 'none';
            }
        });
    </script>
</body>
</html>