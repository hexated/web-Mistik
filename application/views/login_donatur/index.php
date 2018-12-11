<body>
  <!-- Just an image -->
  <header class="header-no-option">
    <div class="container-fluid">
      <a href="<?= base_url();?>" class="site-logo">
        <img src="assets/img/logo-2.png">
      </a>
    </div>
  </header>
  <div class="container-fluid main">
    <div class="row float-right">
      <div class="hello">
        <h2>Hallo, <br>Selamat Datang</h2>
      </div>
      <div class="box-login">
        <h5><Span>Login</Span> dengan akun anda</h5>
        <div class="tabel-login">
          <form>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Masukan Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password">
              <small><a href="">Lupa password?</a></small>
            </div>
        </div>
        <button type="submit" class="btn btn-login">Login</button>
        <div class="d-flex justify-content-center">
          <a href="daftar_donatur.html" class="buat-akun">Buat Akun</a>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script>
    $('html, body').css({
      overflow: 'hidden',
      height: '100%'
    });
  </script>
</body>

</html>