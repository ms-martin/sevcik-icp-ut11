<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="blog.css"> </head>

<body>


<?php
$host = "localhost";
$username = "id3451829_icp";
$dbpass = "element4";
$db = "id3451829_users";


$conn = new mysqli($host,$username,$dbpass,$db);

if($conn->connect_error) die("Error: " . $conn->connect_error);

$searchExpr = '';

$sql = "SELECT * FROM blog LIMIT 3";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchExpr = test_input($_POST["search"]);
    if($searchExpr != '') $sql = "SELECT * FROM blog WHERE blog.title LIKE '%$searchExpr%' OR blog.author LIKE '%$searchExpr%' LIMIT 3";
}

$GLOBALS["results"] = $conn->query($sql);

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
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
  <div class="py-4">
    <div class="container p-0">
      <div class="col-md-12">
        <div class="row">
          <div class="text-center mx-auto">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a href="../index.php" class="active nav-link"><i class="fa fa-home fa-home"></i>&nbsp;Domov</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-primary" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Naše fitness centrá</a>
              <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="aura.php">Aura</a>
                <a class="dropdown-item" href="elam.php">Elam</a>
                <a class="dropdown-item" href="kings.php">Kings</a>
                <a class="dropdown-item" href="uniq.php">Uniq</a>
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
          <div class="col p-5 mx-auto">
            <form class="form-inline p-5" action="blog.php" method="post">
              <input class="form-control mr-2 w-75 form-control-lg" type="text" placeholder="Vyhľadaj na blogu" name="search">
              <button class="btn btn-primary btn-lg" type="submit">Vyhľadaj</button>
            </form>
            <div class="col w-100 text-center">
              <button class="btn btn-outline-primary dropdown-toggle w-75" data-toggle="dropdown"> Kategórie </button>
              <div class="dropdown-menu w-75">
                <a class="dropdown-item" href="blog.php">Životný štýl</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="blog.php">Stravovanie</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="blog.php">Cviky</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php for($i = 0; $i < $GLOBALS["results"]->num_rows; $i++):
    $GLOBALS["currRow"] = $GLOBALS["results"]->fetch_assoc();
    $id = $GLOBALS["currRow"]["id"]
?>
  <div class="py-5">
    <div class="container">
      <h1 class=""><?php echo $GLOBALS["currRow"]["author"]?>: <?php echo $GLOBALS["currRow"]["title"]?></h1>
      <div class="row">
        <div class="col-md-2" style="transition: all 0.25s;">
          <p class="lead"><?php echo $GLOBALS["currRow"]["release_date"]?></p>
        </div>
        <div class="col-md-2" style="transition: all 0.25s;">
          <p class="lead"><?php echo $GLOBALS["currRow"]["comments_no"]?> komentárov</p>
        </div>
        <div class="col-md-4" style="transition: all 0.25s;">
          <p class="lead"><?php echo $GLOBALS["currRow"]["views"]?> zobrazení</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <img class="img-fluid d-block" src="../images/blog/IMG_Blogs/<?php echo $GLOBALS["currRow"]["img_path"]?>"> </div>
        <div class="col-md-6 ">
          <p class="text-justify py-4"><?php echo $GLOBALS["currRow"]["description"]?>
            <br> </p>
          <a class="btn btn-primary" style="width:130px;" href=<?php echo "clanokDetail.php?id=$id"?>>Čítaj viac</a>
        </div>
      </div>
    </div>
  </div>
<?php endfor; ?>
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>