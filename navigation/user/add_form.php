<?php session_start(); 
    if(!$_SESSION['login']){
        header('Location: /navigation/login.php');
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
                    <li><a href="/navigation/user/Index.php" onClick="clickHandlerLinks('Home')">Home</a></li>
                    <li><a href="/navigation/user/Cars.php" onClick="clickHandlerLinks('Cars')">Cars</a></li>
                    <li><a href="/navigation/user/search.php" onClick="clickHandlerLinks('Seacrh')">Search</a></li>
                    <li><a href="/navigation/user/profile.php" onClick="clickHandlerLinks('Profile')">My Profile</a></li>
                    <li><a href="/navigation/user/about.php" onClick="clickHandlerLinks('About')">About</a></li>
                    <li><a href="/navigation/user/logout.php" onClick="clickHandlerLinks('LogOut')">Logout</a></li>
                </ul>
                <i onClick="clickHandler()" class="fas fa-bars burger"></i>

                <div class="logo" id="logo">
                    Upload
                </div>
                <ul class="nav-links">
                    <li><a href="/navigation/user/Index.php" onClick="clickHandlerLinks('Home')">Home</a></li>
                    <li><a href="/navigation/user/Cars.php" onClick="clickHandlerLinks('Cars')">Cars</a></li>
                    <li><a href="/navigation/user/search.php" onClick="clickHandlerLinks('Seacrh')">Search</a></li>
                    <li><a href="/navigation/user/profile.php" onClick="clickHandlerLinks('Profile')">My Profile</a></li>
                    <li><a href="/navigation/user/about.php" onClick="clickHandlerLinks('About')">About</a></li>
                    <li><a href="/navigation/user/logout.php" onClick="clickHandlerLinks('LogOut')">Logout</a></li>
                </ul>
                <a href="/navigation/user/Index.php" class="aimage"><image class="image" src="https://media.istockphoto.com/vectors/car-logo-with-circle-hand-colorful-logo-vector-id1064271428"></image></a>
            </nav>
        </header>
        <div class="padd"></div>
        <main>
        <div class="overlay">
        <?php 
        echo $_SESSION['message'];
        $_SESSION['message'] = null;
        ?>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="con">
                <div class="head-form">
                    <h2>Upload new Car</h2>
                </div>
                <br>
                <div class="field-set">
                    <span class="input-item">
                    </span>
                    <input class="form-input" name="NumberCar" type="text" placeholder="Number Car" required/>
                    <br>
                    <span class="input-item">
                    </span>
                    <input class="form-input" id ="date" type="number"  placeholder="YEAR" name="date" required/>
                    <br>
                    <span class="input-item">
                    </span>
                    <input class="form-input" name="brand" type="text" placeholder="Brand" required/>
                    <br>
                    <span class="input-item">
                    </span>
                    <input class="form-input" name="color" type="text" placeholder="Color" required/>
                    <br>
                    <span class="input-item">
                    </span>
                    <input class="form-input" name="state" type="text" placeholder="State" />
                    <br>
                    <span class="input-item">
                    </span>
                    <input class="form-input"  name="name" type="text" placeholder="Owner" required/>
                    <br>
                    <span class="input-item">
                    </span>
                    <input class="form-input"  name="address" type="text" placeholder="Address" required/>
                    <br>
                    <span class="input-item">
                    </span>
                    <input class="form-input"  name="NumberPhone" type="tel" placeholder="Phone number" required/>
                    <br>
                    <p>Image: 
                    <input class="form-input"  name="image" type="file" required/>
                    </p>
                    <br>
                    <button type="submit" name="upload" class="log-in">Upload</button>
                    <div class="other">
                    <a href="/navigation/user/profile.php">Back</a>
                    </div>
                </div>
            </div>
        </form>
        </div>
        </main>
    </body>
</html>