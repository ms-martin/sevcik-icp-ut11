<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="homepage.css" type="text/css"> </head>

<body>


<?php
$host = "localhost";
$username = "id3451829_icp";
$dbpass = "element4";
$db = "id3451829_users";


$conn = new mysqli($host,$username,$dbpass,$db);

if($conn->connect_error) die("Error: " . $conn->connect_error);

$email = $password = "";

if(isset($_SESSION["loginValid"]) == FALSE) {
    $_SESSION["loginValid"] = FALSE;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);


    $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = $conn->query($sql);

    if($result->num_rows == 0) $_SESSION["loginValid"] = FALSE;

    $result = $result->fetch_assoc();

    $_SESSION["loginValid"] = $result["password"] == $password;

    if($_SESSION["loginValid"]) {
        $_SESSION["user"] = $result;
    }
}


function test_input($data) {
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
                <a class="btn navbar-btn ml-2 btn-light text-primary" href="profil/MyProfile.php"><?php echo $_SESSION["user"]["firstname"] ?>&nbsp;<i class="fa d-inline fa-lg fa-user-circle-o"></i>
                    <br> </a>
                <a class="btn btn-default navbar-btn btn-light mx-3 text-center" href="logout.php">Odhlásenie</a>
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
                <a class="btn navbar-btn ml-2 text-white btn-secondary" href="login/login.php"><i class="fa d-inline fa-lg fa-user-circle-o"></i>Prihlásiť</a>
            </div>
        </div>
    </nav>
<?php endif;?>

  <div class="gradient-overlay py-4" style="background-image: url(&quot;images/cinky.jpg&quot;);">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-3 text-white">
          <img class="img-fluid d-block mx-auto mb-5" src="images/header.png"> </div>
        <div class="col-md-9 text-white align-self-center">
          <h1 class="display-3">Získaj silu býka</h1>
          <p class="lead m-0">Široká ponuka osobných i skupinových, silových aj kondičných tréningov. Zaregistruj sa ešte dnes! &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <br> </p>
          <a href="register/register.php" class="btn btn-lg btn-primary mx-1">Zaregistruj &nbsp;sa</a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-4">
    <div class="container">
      <div class="row text-center">
        <div class="text-center mx-auto">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a href="index.php" class="active nav-link"><i class="fa fa-home fa-home"></i>&nbsp;Domov</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-primary" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Naše fitness centrá</a>
              <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="fitka/aura.php">Aura</a>
                <a class="dropdown-item" href="fitka/elam.php">Elam</a>
                <a class="dropdown-item" href="fitka/kings.php">Kings</a>
                <a class="dropdown-item" href="fitka/uniq.php">Uniq</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="profil/MyProfile.php">Môj Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="blog/blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="eshop/eshop.php">E-shop</a>
            </li>
          </ul>
        </div>
        <div class="col-md-10 text-center">
          <div class="col-md-12">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="text-center text-primary py-2 display-4">O nás</h1>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p class="text-justify">TaurusFitness je odrazom našej snahy priniesť kvalitné fitness centrá na Slovensku. Sme sieť najmodernejších fitness centier za rozumné ceny. Naši tréneri si zakladajú na osobnom prístupe, ale ponúkame aj skupinové cvičenia. Ponúkame
                    možnosť individuálnych tréningov s našimi trénermi, ktorých rozvrhy si môžete pozrieť na našej stránke. K dispozícii Vám budú aj výživový poradci, ktorých radami sa inšpirovalo už veľa spokojných zákazníkov. Registrovaní členovania
                    majú k dispozícii členské zľavy na permanentky. Vernosť si ceníme, a preto verným zákazníkom ponúkame množstvo výhod vrátane vyšších zliav na vstupnom.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="p-4 col-md-12"> <i class="d-block fa fa-3x fa-pie-chart"></i>
                            <h3 class="my-3" contenteditable="true">Progres</h3>
                            <p>Sleduj svoj progres, odcvičené cviky a dni vďaka našej grafovej interpretácii, ktorú má k dispozícii každý zaregistrovaný člen.</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="col-md-12 p-4"> <i class="d-block fa fa-3x fa-usd"></i>
                            <h2 class="my-3">Cena</h2>
                            <p>Naše fitness centrá sú moderne zariadené s kvalitným vybavením, ale cenovo chceme byť dostupný každému.</p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="col-md-12 p-4"> <i class="d-block fa fa-3x fa-users"></i>
                            <h2 class="my-3">Komunita</h2>
                            <p>Staň sa aj ty členom našej úžasnej komunity, ktorá sa každým dňom zväčšuje a je tvorená priateľskými ľuďmi, ktorých spája rovnaký cieľ.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <hr class="bg-primary"> </div>
      </div>
    </div>
  </div>
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center text-primary display-4 py-4">Novinky</h1>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-md-7">
          <h2 class="text-primary">Výhody, ktoré prináša skákanie cez švihadlo</h2>
          <p class="">Jedným z najlepších spôsobov, ako páliť tuky, je skákaním cez švihadlo. Ide o intezívny spôsob tréningu, ktorý sa hodí aj vyťaženým ľuďom. Má však viac výhod, ako len chudnutie. Skákanie cez švihadlo je podceňovaným cvičením, ktoré&nbsp;možno
            vykonávať aj doma, vnútri i vonku. Pri cvičení sa do akcie zapájajú svaly celého tela a podľa vedcov len 15 minút denného skákanie môže človeku priniesť rovnaké účinky, ako pravidelné behanie. To dokonca spáli za rovnaký čas menej kalórií.
            </p>
        </div>
        <div class="col-md-5 align-self-center">
          <img class="img-fluid d-block rounded-circle mx-auto w-50" src="images/index/svihadlo.jpg"> </div>
      </div>
      <div class="row mb-5">
        <div class="col-md-7">
          <h2 class="text-primary"> Rozhovor s fitness modelom Joeom Pittom</h2>
          <p class="">Nie je známy len z fitness magazínov, ale zo súťaží v kategórii Physique. Austrálčan Joe Pitt môže byť inšpiráciou pre začínajúcich aj pokročilých cvičencov. Ako sa dostal k cvičeniu a čo by vám poradil? Aj na to padne reč v nasledujúcom rozhovore.
            Musíte si uvedomiť, že výsledky neprídu hneď! Rozvíjať si stratégiu z krátkodobého i dlhodobého hľadiska bez nejakého cieľa spôsobí, že stratíte zmysel toho, o čo sa pokúšate. </p>
        </div>
        <div class="col-md-5 align-self-center">
          <img class="img-fluid d-block rounded-circle mx-auto w-50" src="images/index/joe pitt.jpg"> </div>
      </div>
    </div>
  </div>
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <hr class="bg-primary"> </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center text-primary display-4 py-4">Nájdite nás</h1>
          <div class="row">
            <div class="col-md-12">
              <p class="">V interaktívnej mape sú zobrazené všetky naše fitness centrá. Po ich rozkliknutí si môžete hneď všimnúť otváracie hodiny a web stránku pre vami zvolené fitness centrum.</p>
            </div>
          </div>
			<div class="col-md-8 intrinsic-container intrinsic-container-16x9 mx-auto">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12157.803299386389!2d17.076856639389476!3d48.14773719934411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8bec79f0f3a9%3A0x8b585229fc0ae860!2sFakulta+informatiky+a+informa%C4%8Dn%C3%BDch+techn%C3%B3logi%C3%AD+STU!5e0!3m2!1ssk!2ssk!4v1510502516784" width="640" height="480" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
    </div>
        <div class="py-4 row"> </div>
  </div>
  <div class="py-5 text-white bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <p class="lead">Informujte sa o novinkách</p>
          <form class="form-inline">
            <div class="form-group">
              <input class="form-control" placeholder="Your e-mail here"> 
            <button type="submit" class="btn btn-primary ml-3" onclick="subscribe()">Subscribe</button>
				<script>
					function subscribe() {
						alert("Ďakujeme za tvoju registráciu na odber noviniek!\n\nTím TaurusGym");
					}
				</script>
			</div>
          </form>
        </div>
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://www.facebook.com" target="_blank"><i class="fa fa-fw fa-facebook fa-3x text-white"></i></a>
        </div>
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://twitter.com" target="_blank"><i class="fa fa-fw fa-twitter fa-3x text-white"></i></a>
        </div>
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://www.instagram.com/veronika.vcelkova/" target="_blank"><i class="fa fa-fw fa-instagram text-white fa-3x"></i></a>
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