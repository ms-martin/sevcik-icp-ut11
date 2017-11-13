<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="eshop.css"> </head>

<body>

<?php

if($_SERVER["REQUEST_METHOD"] == "GET") {
    if(isset($_GET["price"])) {
        $price = $_GET["price"];
    }
    else {
        $price = 0;
    }
    $GLOBALS["cartSum"] = $price;
} else {
    $GLOBALS["cartSum"] = 0;
}


$host = "localhost";
$username = "id3451829_icp2";
$dbpass = "element4";
$db = "id3451829_products";


$conn = new mysqli($host,$username,$dbpass,$db);

if($conn->connect_error) die("Error: " . $conn->connect_error);

$searchExpr = '';

$sql = "SELECT * FROM creatine LIMIT 12";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchExpr = test_input($_POST["search"]);
    if($searchExpr != '') $sql = "SELECT * FROM creatine WHERE creatine.name LIKE '%$searchExpr%' LIMIT 12";
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
          <div class="text-center">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <a class="active nav-link" href="../index.php"><i class="fa fa-home fa-home"></i>&nbsp;Domov</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-primary" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Naše fitness centrá</a>
                <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="../fitka/aura.php">Aura</a>
                  <a class="dropdown-item" href="../fitka/elam.php">Elam</a>
                  <a class="dropdown-item" href="../fitka/kings.php">Kings</a>
                  <a class="dropdown-item" href="../fitka/uniq.php">Uniq</a>
                </div>
              </li>
              <li class="nav-item">
                <a href="../profil/MyProfile.php" class="nav-link text-primary">Môj Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-primary" href="../blog/blog.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-primary" href="../eshop/eshop.php">E-shop</a>
              </li>
            </ul>
          </div>
          <div class="col p-5 text-center">
            <div class="col-md-12">
				<form class="form-inline m-0 p-3" method="post" action="creatines.php">
					<input class="form-control mr-2 form-control-lg w-75" type="text"
						   placeholder="Search" name="search">
					<button class="btn btn-primary btn-lg" type="submit">Vyhľadaj</button>
					<div class="row-md-6"><i class="d-block  fa fa-cart-arrow-down m-2 fa-2x">
						<p class="lead text-dark text-center p-2"><?php if(isset($GLOBALS["cartSum"])) {echo $GLOBALS["cartSum"];} else echo 0.00?> €</p></i></div>
				</form>
				<div class="btn-group p-4">
					<a class="btn btn-outline-primary text-primary" href="proteins.php">Proteíny</a>
					<a class="btn btn-outline-primary text-primary" href="proteins.php">Gainery</a>
					<a class="btn btn-outline-primary text-primary" href="fat_burners.php">Spalovače</a>
					<a class="btn btn-outline-primary text-primary" href="creatines.php">Kreatín</a>
					<a class="btn btn-outline-primary text-primary" href="proteins.php">Sacharidy</a>
					<a class="btn btn-outline-primary text-primary" href="proteins.php">Náčinie</a>
				</div>
			</div>
			<div class="container">
      <div class="row">
		<?php for ($i = 0; $i < $GLOBALS["results"]->num_rows; $i++):
			$GLOBALS["currRow"] = $GLOBALS["results"]->fetch_assoc();
		    $id = $GLOBALS["currRow"]["id"]
		?>
			<div class="col-md-4 p-3 d-flex align-items-stretch">
				<div class="card">
					<div class="card-body">
						<h4>
							<?php
							echo $GLOBALS["currRow"]["name"];
							?>
						</h4>
						<p class=" p-y-1">
							<?php
							echo $GLOBALS["currRow"]["description"];
							?>
						</p>
					</div>
					<img class="img-fluid"
						 src="../images/eshop/IMG_Creatines/<?php echo $GLOBALS["currRow"]["img_path"];?>.jpg"
						 alt="Card image">
					<div class="card-footer text-muted">
						<?php
						echo $GLOBALS["currRow"]["price"];
						?>0 &euro;
					</div>
                    <a class="btn btn-primary btn-block" href="detailProdukt.php?id=<?php echo $id?>"><i
                                class="fa fa-fw fa-info-circle"></i>Detail produktu</a>
                    <a class="btn btn-primary btn-block" href="creatines.php?price=<?php echo $GLOBALS["currRow"]["price"];?>"><i
                                class="fa fa-fw fa-cart-plus"></i>Pridať do košíka</a>
				</div>
			</div>
		<?php endfor; ?>

	</div>
	  <div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 py-5">
			<ul class="pagination px-4">
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Previous"> <span
							aria-hidden="true">«</span> <span
							class="sr-only">Previous</span> </a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">1</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">2</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">3</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">4</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Next"> <span
							aria-hidden="true">»</span> <span class="sr-only">Next</span>
					</a>
				</li>
			</ul>
		</div>
		<div class="col-md-4"></div>
	</div>
    </div>
          </div>
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>