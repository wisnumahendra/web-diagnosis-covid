<!DOCTYPE html>
<html lang="en">
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
    <title>Sistem Pakar Diagnosis Covid-19</title>
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
                    <a class="nav-link"  href="#informasi">Informasi <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="heroBWA mt-2">
      <div class="container">
        <div class="row">
          <div class="col align-self-center mr-5">
            <h1 class="mb-4">Cek Covid-19</h1>
            <p class="mb-4">
              Cek Gejala Covid-19 Yuk!!! Merupakan sistem informasi berbasis Web Based yang memanfaatkan teknologi Sistem Pakar didalamnya. Dengan menggunakan sistem pakar ini pengguna dapat mengenali atau memeriksakan gejala Covid-19 yang di alami berdasarkan skor yang akurat.
            </p>
            <a class="btn btn-primary" href="diagnosis.php" role="button">Ayo Mulai!</a>
          </div>
          <div class="col d-none d-sm-block ml-5">
            <img width="450" src="img/hero.png" alt="hero" />
          </div> 
        </div>
      </div>
    </section>

    <section id="informasi">
      <div id="konten2" class="container konten mb-5">
        <h2 style="font-weight: bold;text-align: center;">Tips Mencegah COVID-19!</h2>
        <div class="card-deck">
          <div class="card">
            <h5 class="card-title">Mencuci Tangan</h5>
            <img src="img/cucitangan.png" class="card-img-top" alt="...">
            <div class="card-body">

              <p class="card-text">Gunakan sabun cair dan gosok seluruh permukaan tangan, termasuk telapak tangan, punggung tangan, sela-sela jari, dan kuku. Bilas dengan air mengalir dan keringkan dengan handuk bersih.</p>
            </div>
          </div>
          <div class="card">
            <h5 class="card-title">Memakai Masker</h5>
            <img src="img/masker.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text"> Pilih masker yang sesuai dengan standar kesehatan, seperti masker medis atau masker kain yang memiliki minimal 3 lapis. Ganti masker secara berkala, idealnya setiap 4 jam sekali.</p>
            </div>
          </div>
          <div class="card">
            <h5 class="card-title">Menjaga Jarak</h5>
            <img src="img/jagajarak.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Hindari keramaian, jaga jarak saat berada di tempat umum, dan pilihlah aktivitas yang memungkinkan Anda untuk menjaga jarak dengan orang lain.</p>
            </div>
          </div>
        </div>
      </div>
    </sect>
</body>
</html>