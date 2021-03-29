<?php session_start();
if(!isset($_SESSION['login'])){
    header('Location: /navigation/search.php');
      /*
      if(!$_SESSION['login']){
          header('Location: /navigation/search.php');
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
    <link rel="stylesheet" type="text/css" href="/navigation/search.css">
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
                    <li><a href="/navigation/user/search.php" class="active" onClick="clickHandlerLinks('Seacrh')">Search</a></li>
                    <li><a href="/navigation/user/profile.php" onClick="clickHandlerLinks('Profile')">My Profile</a></li>
                    <li><a href="/navigation/user/about.php" onClick="clickHandlerLinks('About')">About</a></li>
                    <li><a href="/navigation/user/logout.php" onClick="clickHandlerLinks('LogOut')">Logout</a></li>
                </ul>
                <i onClick="clickHandler()" class="fas fa-bars burger"></i>

                <div class="logo" id="logo">
                    Home
                </div>
                <ul class="nav-links">
                    <li><a href="/navigation/user/Index.php" onClick="clickHandlerLinks('Home')">Home</a></li>
                    <li><a href="/navigation/user/Cars.php" onClick="clickHandlerLinks('Cars')">Cars</a></li>
                    <li><a href="/navigation/user/search.php" class="active" onClick="clickHandlerLinks('Seacrh')">Search</a></li>
                    <li><a href="/navigation/user/profile.php" onClick="clickHandlerLinks('Profile')">My Profile</a></li>
                    <li><a href="/navigation/user/about.php" onClick="clickHandlerLinks('About')">About</a></li>
                    <li><a href="/navigation/user/logout.php" onClick="clickHandlerLinks('LogOut')">Logout</a></li>
                </ul>
                <a href="/Index.php" class="aimage"><image class="image" src="https://media.istockphoto.com/vectors/car-logo-with-circle-hand-colorful-logo-vector-id1064271428"></image></a>
            </nav>
        </header>
        <div class="padd"></div>
        <div class="d1">
            <form action="/navigation/search_back.php" method="POST">
                <input type="text" name="search" placeholder="Search here...">
                <button type="submit"></button>
            </form>
        </div>
        <main>
            <?php 
            if(isset($_SESSION['SearchMessage'])){
                echo $_SESSION['SearchMessage'];
                $_SESSION['SearchMessage']=null; 
            }
            ?>
        </main>
  </body>
</html>