<?php session_start(); 
if(!isset($_SESSION['login'])){
    header('Location: /navigation/about.php');
      /*
      if(!$_SESSION['login']){
          header('Location: /navigation/about.php');
      }
      */
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="/header.css">
    <link rel="stylesheet" type="text/css" href="/navigation/print_db.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/header.js"></script>
    <title>App</title>
  </head>
  <body>
    <header class="header">
            <nav>
                <ul class="burger-links" id="burger-links">
                    <i onClick="clickHandler()" class="fas fa-bars burger"></i>
                    <li><a href="/navigation/user/Index.php" onClick="clickHandlerLinks('Home')">Home</a></li>
                    <li><a href="/navigation/user/Cars.php" onClick="clickHandlerLinks('Cars')">Cars</a></li>
                    <li><a href="/navigation/user/search.php" onClick="clickHandlerLinks('Seacrh')">Search</a></li>
                    <li><a href="/navigation/user/profile.php" onClick="clickHandlerLinks('Profile')">My Profile</a></li>
                    <li><a href="/navigation/user/about.php" class="active" onClick="clickHandlerLinks('About')">About</a></li>
                    <li><a href="/navigation/user/logout.php" onClick="clickHandlerLinks('LogOut')">Logout</a></li>
                </ul>
                <i onClick="clickHandler()" class="fas fa-bars burger"></i>

                <div class="logo" id="logo">
                    About
                </div>
                <ul class="nav-links">
                    <li><a href="/navigation/user/Index.php" onClick="clickHandlerLinks('Home')">Home</a></li>
                    <li><a href="/navigation/user/Cars.php" onClick="clickHandlerLinks('Cars')">Cars</a></li>
                    <li><a href="/navigation/user/search.php" onClick="clickHandlerLinks('Seacrh')">Search</a></li>
                    <li><a href="/navigation/user/profile.php" onClick="clickHandlerLinks('Profile')">My Profile</a></li>
                    <li><a href="/navigation/user/about.php" class="active" onClick="clickHandlerLinks('About')">About</a></li>
                    <li><a href="/navigation/user/logout.php" onClick="clickHandlerLinks('LogOut')">Logout</a></li>
                </ul>
                <a href="/Index.php" class="aimage"><image class="image" src="https://media.istockphoto.com/vectors/car-logo-with-circle-hand-colorful-logo-vector-id1064271428"></image></a>
            </nav>
        </header>
        <div class="padd"></div>

        <main class="main">
        <div class="both">
            <div class="aside">
                <h1>About Me</h1>
                <h5 class="column-name">Name: </h5>
                <p class="column-value">Caragacian Stanislav</p>
                <h5 class="column-name">University: </h5>
                <p class="column-value">USM</p>
                <h5 class="column-name">Faculty: </h5>
                <p class="column-value">Physics and Engineering</p>
                <h5 class="column-name">Specialty: </h5>
                <p class="column-value">Information Technology</p>
                <h5 class="column-name">Group: </h5>
                <p class="column-value">3.3 TI (rus)</p>
            </div>
            <div class="print-form">
                <h1>About project: </h1>
                <p class="column-value">The project was carried out as part of the laboratory work on the subject of WEB BACKAND.</p>
                <hr>
                <p class="column-name">Teacher: Sirkeli Vadim</p>
            </div>
        </div>
        </main>
  </body>
</html>