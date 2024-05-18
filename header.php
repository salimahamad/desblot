<?php  

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "storingapps";
$conn = new mysqli($servername, $username, $password, $databasename);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$title ; 
$page = $_SERVER['PHP_SELF']; 
$data = explode('/', $page);
$page = $data[count($data)-1]; 
    switch($page)  {
      case 'index.php': 
        $title = 'Home'; 
      break; 
      case 'privacy.php': 
        $title = 'Privacy Policy '; 
      break; 
      case 'trems.php': 
        $title = 'Terms and Conditions  '; 
      break;
      case 'checkout.php': 
        $title = 'Checkout '; 
      break;
      case 'contact.php': 
        $title = 'Contact '; 
      break;
        
} ?>  
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
      <title> <?php echo $title;?> | Desblot </title> 
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- google icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- header start-->
    <header>
     
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand" href="index.php">
              <img src="assets/img/logo.png" height="40" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> 
                <li class="nav-item">
                  <a class="nav-link" href="index.php">  Home</a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">  Contacto </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="trems.php"> Terminos y condiciones</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="privacy.php">  Privacidad</a>
                </li> 
              </ul> 
            </div>
          </div>
        </nav>
  
    </header>
    <!-- header end -->