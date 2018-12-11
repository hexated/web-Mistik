<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="assets/css/daftar-relawan.css">

  <!-- My Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.ico">

  <title>Daftar Relawan</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand " href="home"><img src="assets/img/logo-2.png" alt=" logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active " href="home">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link " href="home/#program">Program</a>
          <a class="nav-item nav-link " href="#contact">Contact</a>
          <a class="nav-item nav-link " href="#about">About</a>
          <a class="nav-item btn tombol " href="login.html">Login</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <div class="kotak">


  </div>
  <div class="container">
    <div class="card relawan">
      <h5 class="card-header">Pendaftaran Relawan</h5>
      <div class="card-body">
        <div class="container-fluid">
          <p class="title">Daftar Akun Relawan</p>
          <form action="">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <p class="subtitle">Informasi Pribadi</p>
                  <label for="namadepan">Nama Depan</label>
                  <input type="text" class="form-control" name="namadepan" placeholder="Nama Depan" />
                </div>
                <div class="form-group">
                  <label for="namabelakang">Nama Bellakang</label>
                  <input type="text" name="namabelakang" class="form-control" placeholder="Nama Belakang" />
                </div>
                <div class="form-group">
                  <label for="jenisidetitas">Jenis Identitas</label><br>
                  <select class="custom-select">
                    <option selected>KTP</option>
                    <option value="SIM">SIM</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="noid">No. Identitas</label>
                  <input type="text" name="noid" class="form-control">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea name="alamat" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="jenkel">Jenis Kelamin</label><br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenkel" id="jenkel" value="Laki-laki">
                    <label class="form-check-label" for="jenkel"> Laki-laki</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenkel" id="jenkel" value="Perempuan">
                    <label class="form-check-label" for="jenkel">Perempuan</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="ttl">Tempat Tanggal LAhir</label>
                  <input type="text" name="tgl" class="form-control"></input>
                </div>
                <div class="form-group">
                  <label for="agama">Agama</label><br>
                  <select class="custom-select">
                    <option selected>Islam</option>
                    <option value="SIM">Kristen</option>
                    <option value="Lainnya">Budha</option>
                    <option value="Lainnya">Hindu</option>
                  </select>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <p class="subtitle">Informasi Akun</p>
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Masukan Username">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Masukan Password">
                </div>
                <div class="form-group">
                  <label for="repeat">Ulangi Password</label>
                  <input type="password" class="form-control" id="repeat" placeholder="Ulangi Password">
                </div>
              </div>
            </div>
        </div>
        <button class="btn btn-daftar" type="submit">Daftar</button>
        </form>
      </div>
    </div>
  </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>