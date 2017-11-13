<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="detailProdukt.css"> </head>

<body>

<?php
$id = $_GET["id"];

$host = "localhost";
$username = "id3451829_icp2";
$dbpass = "element4";
$db = "id3451829_products";


$conn = new mysqli($host,$username,$dbpass,$db);

if($conn->connect_error) die("Error: " . $conn->connect_error);


$sql = "SELECT * FROM protein WHERE id=$id";

$results = $conn->query($sql);

$GLOBALS["results"] = $results->fetch_assoc();
?>


<?php if($_SESSION["loginValid"]): ?>
    <nav class="navbar navbar-expand-md bg-primary navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><b>TaurusGym</b></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
                <a class="btn navbar-btn ml-2 btn-light text-primary" href="../profil/MyProfile.php"><?php echo $_SESSION["user"]["firstname"] ?>&nbsp;<i class="fa d-inline fa-lg fa-user-circle-o"></i>
                    <br> </a>
                <a class="btn btn-default navbar-btn btn-light mx-3 text-center" href="../logout.php">Odhlásenie</a>
            </div>
        </div>
    </nav>

<?php else: ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#"><b>TaurusGym<br></b></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
                <a class="btn navbar-btn ml-2 text-white btn-secondary" href="../login/login.php"><i class="fa d-inline fa-lg fa-user-circle-o"></i>Prihlásiť</a>
            </div>
        </div>
    </nav>
<?php endif;?>
  <div class="py-4 gradient-overlay" style="background-image: url(&quot;../images/cinky.jpg&quot;);">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-3 text-white">
          <img class="img-fluid d-block mx-auto mb-5" src="../images/header.png"> </div>
        <div class="col-md-9 text-white align-self-center">
          <h1 class="display-3 mb-4">Získaj silu býka</h1>
          <p class="lead">Široká ponuka osobných i skupinových, silových aj kondičných tréningov. Zaregistruj sa ešte dnes! &nbsp; &nbsp; &nbsp; &nbsp;
            <br> </p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <div class="text-center">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <a href="../index.php" class="active nav-link"><i class="fa fa-home fa-home"></i>&nbsp;Domov</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-primary" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href=""> Naše fitness centrá</a>
                <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="../fitka/aura.php">Aura</a>
                  <a class="dropdown-item" href="../fitka/elam.php">Elam</a>
                  <a class="dropdown-item" href="../fitka/kings.php">Kings</a>
                  <a class="dropdown-item" href="../fitka/uniq.php">Uniq</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link text-primary" href="../profil/MyProfile.php">Môj Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-primary" href="../blog/blog.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-primary" href="../eshop/eshop.php">E-shop</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <h1 class=""><?php echo $GLOBALS["results"]["name"]?></h1>
        </div>
        <div class="col-md-4">
          <img class="img-fluid d-block" src="../images/eshop/IMG_Proteins/<?php echo $GLOBALS["results"]["img_path"]?>.jpg">
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <p class="lead">Váha: <?php echo $GLOBALS["results"]["weight"]?> g</p>
        </div>
        <div class="col-md-3">
          <p class="lead">Počet dávok: <?php echo $GLOBALS["results"]["number_of_doses"]?></p>
        </div>
        <div class="col-md-3">
          <p class="lead">Hodnotenie: <?php echo $GLOBALS["results"]["rating"]?>/5</p>
        </div>
        <div class="col-md-3">
          <p class="lead">Cena: <?php echo $GLOBALS["results"]["price"]?> &euro;</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class=""><?php echo $GLOBALS["results"]["description"]?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <a class="btn btn-primary" href="">Pridať do košíka</a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col-4 col-md-4 align-self-center text-center">
          <a href="https://www.facebook.com" target="_blank"><i class="fa fa-fw fa-facebook fa-3x text-white"></i></a>
        </div>
        <div class="col-4 col-md-4 align-self-center text-center">
          <a href="https://twitter.com" target="_blank"><i class="fa fa-fw fa-twitter fa-3x text-white"></i></a>
        </div>
        <div class="col-4 col-md-4 align-self-center text-center">
          <a href="https://www.instagram.com" target="_blank"><i class="fa fa-fw fa-instagram text-white fa-3x text-center"></i></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright 2017 TaurusGym - All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>