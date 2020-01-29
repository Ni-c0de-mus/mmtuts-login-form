<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>MMT Login Form</title>
 <meta name="description" content="this is a login form tutorial">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
 <link rel="stylesheet" href="style.css">
</head>

<body>
 <header id="header">
  <nav id="nav">
   <a href="#" class="nav__brand"><img class="nav__brand" src="img/mw-logo-light.svg" alt=""></a>
   <!-- Menu Open -->
   <div class="nav__icons open"><i class="ion icon-md-menu"></i></div>
   <!-- Nav List -->
   <ul class="nav__list">
    <!-- Menu Close -->
    <div class="menu__icons close"><i class="icon ion-md-close"></i></div>
    <li class="nav__item"><a href="index.php" class="nav__link">Home</a></li>
    <li class="nav__item"><a href="index2.html" class="nav__link">Portfolio</a></li>
    <li class="nav__item"><a href="index3.html" class="nav__link">About Me</a></li>
    <li class="nav__item"><a href="index4.html" class="nav__link">Contact</a></li>
   </ul>
   </nav>
   <!-- Login -->
   <div class="form">
    <form class="login" action="includes/login.inc.php" method="post">
    <input type="text" name="mailuid" placeholder="Username/email..." >
    <input type="text" name="pwd" placeholder="Password">
    <!-- Login Button -->
    <button class="btn__login" type="submit" name="login-submit">Login</button>
    </form>
    <!-- Signup -->
    <a href="signup.php">Signup</a>
    <!-- Logout -->
    <form class="logout"  action="includes/logout.inc.php" method="post">
    <!-- Logout Button -->
    <button class="btn__logout" type="submit" name="logout-submit">Logout</button>
    </form>
   </div>
 </header>
 <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

 <script src="" async defer></script>
