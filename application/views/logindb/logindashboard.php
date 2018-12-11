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
  <link rel="stylesheet" href="assets/css/fixed-navbar.css">

  <!-- My Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.ico">

  <title>Login Dashboard</title>
</head>

<body>
  <div class="container-fluid admin">
    <div class="d-flex justify-content-center">
      <div class="card login-admin">
        <img src="assets/img/logo.svg">
        <div class="tabel-login-dashboard">
          <form class="form-signin" action="<?php echo base_url().'logindb/auth'?>" method="post">
            <div class="form-group">
            <?php echo $this->session->flashdata('msg');?><br><br>
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" required autofocus>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
              <small><a href="">Lupa password?</a></small>
            </div>
        </div>
        <button type="submit" class="btn btn-dashboard">Login</button>
        </form>
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
  <script>
    $('html, body').css({
      overflow: 'hidden',
      height: '100%'
    });
  </script>
</body>

</html>