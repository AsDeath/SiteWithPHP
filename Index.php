<?php session_start();
  if(isset($_SESSION['login'])){
    if($_SESSION['login']){
      header('Location: /navigation/user/Index.php');
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/corousel.css">
    <link rel="stylesheet" type="text/css" href="/header.css">
    <script src="/header.js"></script>
    <title>App</title>
  </head>
  <body>
        <header class="header">
            <nav class="nav">
                <ul class="burger-links" id="burger-links">
                    <i onClick="clickHandler()" class="fas fa-bars burger"></i>
                    <li><a href="/Index.php" class="active" onClick="clickHandlerLinks('Home')">Home</a></li>
                    <li><a href="/navigation/Cars.php" onClick="clickHandlerLinks('Cars')">Cars</a></li>
                    <li><a href="/navigation/search.php" onClick="clickHandlerLinks('Seacrh')">Search</a></li>
                    <li><a href="/navigation/login.php" onClick="clickHandlerLinks('Login')">Login</a></li>
                    <li><a href="/navigation/about.php" onClick="clickHandlerLinks('About')">About</a></li>
                </ul>
                <i onClick="clickHandler()" class="fas fa-bars burger"></i>

                <div class="logo" id="logo">
                    Home
                </div>
                <ul class="nav-links">
                    <li><a href="/Index.php" class="active" onClick="clickHandlerLinks('Home')">Home</a></li>
                    <li><a href="/navigation/Cars.php" onClick="clickHandlerLinks('Cars')">Cars</a></li>
                    <li><a href="/navigation/search.php" onClick="clickHandlerLinks('Seacrh')">Search</a></li>
                    <li><a href="/navigation/login.php" onClick="clickHandlerLinks('Login')">Login</a></li>
                    <li><a href="/navigation/about.php" onClick="clickHandlerLinks('About')">About</a></li>
                </ul>
                <a href="/Index.php" class="aimage"><image class="image" src="https://media.istockphoto.com/vectors/car-logo-with-circle-hand-colorful-logo-vector-id1064271428"></image></a>
            </nav>
        </header>
        <div class="padd"></div>
        <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/image1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/image2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/image3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>