<?php session_start(); 
if(isset($_SESSION['login'])){
    if($_SESSION['login']){
        header('Location: /navigation/user/profile.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="/header.css">
    <link rel="stylesheet" type="text/css" href="/navigation/loginCSS.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/header.js"></script>

    <title>App</title>
  </head>
  <body>
        <header class="header">
            <nav>
                <ul class="burger-links" id="burger-links">
                    <i onClick="clickHandler()" class="fas fa-bars burger"></i>
                    <li><a href="/Index.php" onClick="clickHandlerLinks('Home')">Home</a></li>
                    <li><a href="/navigation/Cars.php" onClick="clickHandlerLinks('Cars')">Cars</a></li>
                    <li><a href="/navigation/search.php" onClick="clickHandlerLinks('Seacrh')">Search</a></li>
                    <li><a href="/navigation/login.php" class="active" onClick="clickHandlerLinks('Login')">Login</a></li>
                    <li><a href="/navigation/about.php" onClick="clickHandlerLinks('About')">About</a></li>
                </ul>
                <i onClick="clickHandler()" class="fas fa-bars burger"></i>

                <div class="logo" id="logo">
                    Login
                </div>
                <ul class="nav-links">
                    <li><a href="/Index.php" onClick="clickHandlerLinks('Home')">Home</a></li>
                    <li><a href="/navigation/Cars.php" onClick="clickHandlerLinks('Cars')">Cars</a></li>
                    <li><a href="/navigation/search.php" onClick="clickHandlerLinks('Seacrh')">Search</a></li>
                    <li><a href="/navigation/login.php" class="active" onClick="clickHandlerLinks('Login')">Login</a></li>
                    <li><a href="/navigation/about.php" onClick="clickHandlerLinks('About')">About</a></li>
                </ul>
                <a href="/Index.php" class="aimage"><image class="image" src="https://media.istockphoto.com/vectors/car-logo-with-circle-hand-colorful-logo-vector-id1064271428"></image></a>
            </nav>
        </header>
        <div class="padd"></div>
        <main>
        <div class="overlay">
        <?php 
        if(isset($_SESSION['message'])){
            echo $_SESSION['message']; 
            $_SESSION['message'] = null;
        }
        ?>
        <form action="session_set.php" method="POST">
            <div class="con">
                <div class="head-form">
                    <h2>Log In</h2>
                    <p>login here using your username and password</p>
                </div>
                <br>
                <div class="field-set">
                    <span class="input-item">
                        <i class="fa fa-user-circle"></i>
                    </span>
                    <input class="form-input" id="login" name="login" type="text" placeholder="@UserName" required>
                    <br>
                    <span class="input-item">
                        <i class="fa fa-key"></i>
                    </span>
                    <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" required>
                    <br>
                    <button type="submit" name="signin" class="log-in">Log In</button>
                    <div class="other">
                        <button class="btn submits frgt-pass"><a>Forgot Password</a></button>
                        <button class="btn submits sign-up"><a href="/navigation/registration.php">Sign Up</a> 
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
        </div>
        </main>
    </body>
</html>