<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>My Blog</title>
</head>
<body>

  <style>
      .jumbotron{
          background: url(img/marble.png) center center;
      }
      .display-5{
        color: white;
        font-size: 20px;
        font-family: Roboto;
      }
      .navbar-brand{
          font-size: 20px;
          font-family: Roboto;
      }
      .navbar-nav{
        font-family: Roboto;
        font-weight: bold;
      }

      .container{
        font-family: Roboto;
      }
  </style>

<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <a class="navbar-brand" href="#">Deva Abel Khan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav" style="font-size: 20px;">
  <a class="nav-item nav-link" href="home">HOME <span class="sr-only">(current)</span></a>
    <a class="nav-item nav-link" href="home">PROFIL</a>
      <a class="nav-item nav-link" href="experience">EXPERIENCE</a>
        <a class="nav-item nav-link" href="portofolio">PORTOFOLIO</a>
      </div>
    </div>
</nav>
    
<div class="jumbotron">

<div class="container">
  <div class="row">
    <div class="col text-center">
      <h1>MY PORTOFOLIO</h1><br>
    </div>
  </div>

  <div class="row">
    <div class="col md-4">
        <div class="card">
          <img src="web.png" class="card-img-top">
        <div class="card-body"><h3><center>Web Sederhana<center></h3>
          <p class="card-text"><center>Projek atau tugas ini saya buat ketika saya berada di kelas 11 pada saat pembelajaran programming dasar menggunakan HTML dan CSS.<center></p>
        </div>
      </div>
  </div>

    <div class="col md-4">
        <div class="card">
          <img src="serti.png" class="card-img-top">
        <div class="card-body"><h3><center>Sertifikasi Dicoding<center></h3>
          <p class="card-text"><center>Sertifikat ini Saya Dapatkan Karena Sudah Menyelesaikan Tugas Submission Pada Pembelajaran Dasar Pemrograman Web.<center></p>
        </div>
        </div>
    </div>

    
  </div>
</div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/vendor/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>