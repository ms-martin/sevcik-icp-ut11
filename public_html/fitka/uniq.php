<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="uniq.css" type="text/css"> </head>

<body>
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
          <p class="lead">Široká ponuka osobných i skupinových, silových aj kondičných tréningov. Zaregistruj sa ešte dnes! &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <br> </p>
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
        <div class="col-md-10 text-center">
          <div class="col-md-12">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-3">
                  <h2 class="text-primary"><b>Uniq</b></h2>
                  <h4 class="text-primary" contenteditable="true">Adresa</h4>
                  <p class="">Trefná 1275/24
                    <br>Bratislava IV 841 07
                    <br>Slovensko</p>
                  <h4 class="text-primary">Kontakt</h4>
                  <p class="">+421 904 576 149
                    <br>uniq.fit@gmail.com</p>
                  <h4 class="text-primary">Otváracie hodiny</h4>
                  <p class=""><b>Po-Pi:</b> 8:00 - 21:00
                    <br><b>So:</b> 8:00 - 13:00
                    <br><b>Ne:</b> zatvorené</p>
                </div>
                <div class="col-md-5">
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <div id="carouselArchitecture" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselArchitecture" data-slide-to="0" class=""><i></i></li>
                            <li data-target="#carouselArchitecture" data-slide-to="1" class=""><i></i></li>
                            <li data-target="#carouselArchitecture" data-slide-to="2" class="active"><i></i></li>
                          </ol>
                          <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                              <img class="d-block img-fluid" src="../images/fitka/uniq.jpg" data-holder-rendered="true" width="100%" height=""> </div>
                            <div class="carousel-item">
                              <img class="d-block img-fluid" src="../images/fitka/elam_foto2.jpg" data-holder-rendered="true" width="100%" height=""> </div>
                            <div class="carousel-item">
                              <img class="d-block img-fluid" src="../images/fitka/elam_foto1.jpg" data-holder-rendered="true" width="100%" height=""> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="">Toto fitness centrum je prístupné priamo z diaľnice. Zariadenie fitness centra je prispôsobené silovým cvikom. Centrum obsahuje kvalitné stroje pre cviky na budovanie svalovej hmoty. Súčasťou budovy je bar, ktorý podáva rôzne proteínové
                    nápoje a sauna pre odpočinok po cvičení.</p>
                </div>
                <div class="col-md-4 mx-auto">
                  <div class="row mx-auto">
                    <form class="form-inline mx-auto" method="post" action="https://formspree.io/">
                      <input type="text" name="city" class="form-control form-control-sm" placeholder="Mesto/Fitko...">
                      <button type="submit" class="btn btn-primary btn-sm">Vyhľadaj</button>
                    </form>
                  </div>
				  <p> </p>
                  <table class="table text-dark">
                    <thead>
                      <tr>
                        <th>Názov fitka</th>
                        <th>Vzdialenosť</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Unique</td>
                        <td>1,2 km</td>
                      </tr>
                      <tr>
                        <td>Aura</td>
                        <td>2,5 km</td>
                      </tr>
                      <tr>
                        <td>Kings</td>
                        <td>4,7 km</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
				<div class="mx-auto">
					<a href="#trener" type="scroll" class="btn btn-primary btn-sm" style="height:40px;width:220px;font-size:18px">Zobraz trénerov</a>
				  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-5 gradient-overlay bg-secondary">
    <div class="container">
      <div class="row">
        <div class="p-3 align-self-center col-md-3">
          <div class="card">
            <div class="card-block p-5">
              <h1><sup>$</sup>&nbsp;1,90</h1>
              <h4>Jednorázový vstup&nbsp;</h4>
              <hr>
              <p></p>
              <a href="#" class="btn btn-dark">Kúpiť</a>
            </div>
          </div>
        </div>
        <div class="p-3 align-self-center col-md-3">
          <div class="card">
            <div class="card-block p-5">
              <h1><sup>$</sup> 3,90</h1>
              <h4>Týždenný vstup</h4>
              <hr>
              <p></p>
              <a href="#" class="btn btn-dark">Kúpiť</a>
            </div>
          </div>
        </div>
        <div class="p-3 align-self-center col-md-3">
          <div class="card">
            <div class="card-block p-5">
              <h1><sup>$</sup> 9,90 </h1>
              <h4>Mesačná permanentka</h4>
              <hr>
              <p></p>
              <a href="#" class="btn btn-dark">Kúpiť</a>
            </div>
          </div>
        </div>
        <div class="p-3 align-self-center col-md-3">
          <div class="card">
            <div class="card-block p-5">
              <h1><sup>$</sup> 59,90 </h1>
              <h4 contenteditable="true">Ročná permanentka</h4>
              <hr>
              <p></p>
              <a href="#" class="btn btn-dark">Kúpiť</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-white">
    <div class="container">
      <div id="trener" class="row">
        <div class="align-self-center p-5 col-md-6">
          <h1 class="mb-4 text-primary">Adam Sypaný</h1>
          <p class="mb-5 text-dark"> Adam je osobným trénerom kulturistiky a špecialista na naberanie kvalitnej svalovej hmoty. Aktívne pôsobí v oblasti fitness už 10 rokov, z toho 4 ako tréner. Medzi jeho športové úspechy patrí 2. miesto na Muscle fitness cup 2010. Poradí Vám
            pri výbere správneho jedálnička pre zachovanie zdravého fungovania metabolizmu. Jeho primárnym cieľom je trénovanie neskúsených bodybuilderov.</p>
          <a class="btn btn-lg btn-primary" href="#">Objdenať sa</a>
          <a class="btn btn-lg btn-primary" href="#">Zobraziť cenník</a>
        </div>
        <div class="p-0 col-md-6">
          <img class="img-fluid d-block" src="../images/fitka/adam_sypany.jpg"> </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="lead text-primary"><b>Ďalší tréneri vo fitku Elam</b></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <img class="img-fluid d-block" src="../images/fitka/trener1.jpg"> </div>
        <div class="col-md-2">
          <img class="img-fluid d-block" src="../images/fitka/trener2.jpg"> </div>
        <div class="col-md-2">
          <img class="img-fluid d-block" src="../images/fitka/trener3.jpg"> </div>
        <div class="col-md-2">
          <img class="img-fluid d-block" src="../images/fitka/trener4.jpg"> </div>
        <div class="col-md-2">
          <img class="img-fluid d-block" src="../images/fitka/trener5.jpg"> </div>
        <div class="col-md-2">
          <img class="img-fluid d-block" src="../images/fitka/trener6.jpg"> </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-primary" contenteditable="true">Príbehy spokojných zákazníkov</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <img class="img-fluid d-block mb-3 rounded w-100" src="../images/fitka/zakaznik1.jpg">
          <p class="">Vďaka stránke TaurusGym žijem omnoho zdravšie a chodením do jeho fitiek som sa výrazne zlepšila v behu. Vo fitku Elam...</p>
          <a class="btn btn-primary text-center" href="">Čítať ďalej</a>
        </div>
        <div class="col-md-4">
          <img class="img-fluid d-block mb-3 rounded w-100" src="../images/fitka/zakaznik2.jpg">
          <p class="">Bol som zúfalý z toho, aký som slabý, nespravil som ani 10 klikov. Teraz však dokážem bez problémov urobiť...</p>
          <a class="btn btn-primary text-center" href="">Čítať ďalej</a>
        </div>
        <div class="col-md-4">
          <img class="img-fluid d-block mb-3 rounded w-100" src="../images/fitka/zakaznik3.jpg">
          <p class="">TaurusGym je super, cez stránku som sa dostal k pravidelnému cvičeniu vo fitku a môj život sa zmenil, stres je preč...</p>
          <div class="row">
            <div class="mr-auto">
              <a class="btn btn-primary text-center" href="">Čítať ďalej</a>
            </div>
            <div class="ml-auto">
              <a class="btn btn-secondary" href="">Ďalšie príbehy</a>
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
          <a href="https://www.instagram.com" target="_blank"><i class="fa fa-fw fa-instagram text-white fa-3x"></i></a>
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