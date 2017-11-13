<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="MyProfile.css"> </head>

<body>

<?php if($_SESSION["loginValid"]): ?>
  <nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><b>TaurusGym</b></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <a class="btn navbar-btn ml-2 btn-light text-primary"> <?php echo $_SESSION["user"]["firstname"]?> &nbsp; <i class="fa d-inline fa-lg fa-user-circle-o"></i>
          <br> </a>
        <a class="btn btn-default navbar-btn btn-light mx-3 text-center" href="../logout.php">Odhlásenie</a>
      </div>
    </div>
  </nav>
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
    <div class="container">
      <div class="row">
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
        <div class="col-md-5 mx-2">
          <div class="row">
            <div class="col-md-12">
              <h1 class="">Môj profil:</h1>
            </div>
          </div>
          <div class="row mx-auto p-4">
            <div class="col-md-5">
              <img class="img-fluid d-block" src="../images/profil/peterSlusny.png"> </div>
            <div class="col-md-6 my-3">
              <p class="text-left" contenteditable="true">Meno: <?php echo $_SESSION["user"]["firstname"]?>
                <br>Priezvisko: <?php echo $_SESSION["user"]["lastname"]?>
                <br>E-mail: <?php echo $_SESSION["user"]["email"]?>
                <br>Telefón: 0910 323 666</p>
            </div>
          </div>
        </div>
        <div class="col w-100"> </div>
        <div class="col-md-4">
          <div class="col-md-12">
            <h1 class="">Permanentky:</h1>
            <h5 class="">Počet zostávajúcich vstupov</h5>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12 py-2">
                <div class="row-md-12">
                  <h4>Aura:</h4>
                </div>
                <div class="row">
                  <div class="progress w-100">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"> 5 dní ( z 10 )</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 py-2">
                <div class="row-md-12">
                  <h4>Elam:</h4>
                </div>
                <div class="row">
                  <div class="progress w-100">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"> 10 dní ( z 30 )</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 py-2">
                <div class="row-md-12">
                  <h4>Kings:</h4>
                </div>
                <div class="row">
                  <div class="progress w-100">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"> </div> <b class="text-center w-100 "> nezakúpená </b> </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 py-2">
                <div class="row-md-12">
                  <h4>Uniq:</h4>
                </div>
                <div class="row">
                  <div class="progress w-100">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">vyčerpaná</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12"> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <iframe src="fullcalendar-3.6.1/demos/external-dragging.html" name="calendar" allowtransparency="true" scrolling="no" frameborder="0" width="700px" height="470px" class=""></iframe>
        <div class="col"> </div>
        <div class="col-md-4 text-center align-self-center">
          <ul class="list-group">
            <li class="list-group-item text-center"><b>Cvičebný plán : 24.10.2017</b></li>
            <li class="list-group-item">30 brušákov x3 série</li>
            <li class="list-group-item">10 zhybov na hrazde x3 série</li>
            <li class="list-group-item">20 klikov x3 série</li>
            <li class="list-group-item">30x drep s 20kg činkou</li>
            <li class="list-group-item">20x lýtka, závažie 50kg</li>
          </ul>
          <div class="row-md-4 text-center">
            <a class="btn btn-primary btn-block my-2" href="">Upraviť</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <iframe src="chart/graph.html" name="graph" allowtransparency="true" scrolling="no" frameborder="0" width="700" height="410" class=""></iframe>
        <div class="col"> </div>
        <div class="col-md-4 text-center align-self-center">
          <ul class="list-group">
            <li class="list-group-item"><b>Jedalniček: 24.10.2017</b></li>
            <li class="list-group-item">Raňajky: 100g orechov</li>
            <li class="list-group-item">Obed: 200g kuracích pŕs</li>
            <li class="list-group-item">Večera: 50g syra, 100g zeleniny</li>
          </ul>
          <div class="row-md-4 text-center">
            <a class="btn btn-primary btn-block my-2" href="">Upraviť</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"> </div>
      <div class="col-md-4"> </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Názov športu</th>
                <th>Koľkokrát</th>
                <th>Kedy naposledy</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Crossfit</td>
                <td>4</td>
                <td>10.10.2017</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Funkčný tréning</td>
                <td>3</td>
                <td>9.9.2017</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Bog</td>
                <td>5</td>
                <td>12.9.2017</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Yoga</td>
                <td>1</td>
                <td>1.10.2017</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-6"> </div>
      </div>
    </div>
  </div>
<?php else: ?>
    <div class="row-md-4 mx-auto p-4">
        <div class="col-md-12 text-center mx-auto">
            <h1 class="">Nie ste prihlásený!</h1>
        </div>
	</div>    
	<div class="col-md-4 mx-auto p-4">
	    <ul class="nav nav-pills flex-column">
			<li class="nav-item">
			  <a href="../index.php" class="active nav-link text-center" style="font-size:20px">
				<i class="fa fa-home fa-home text-center"> </i> 
				Naspäť</a>
			</li>
		</ul>
    </div>
<?php endif; ?>
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