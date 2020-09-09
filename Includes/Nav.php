<? include '../Config.php' ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="<? echo APP_DIR_IMG . 'logo.png'?>" style = "height: 60px; width: 60px; margin-right: 20px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<? echo APP_DIR . "index.php"?>">Home <span class="sr-only">(current)</span></a>
      </li>

      <?php
      if ($_SESSION["isadmin"] == 1) {
          echo'<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Administrator
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="'. APP_DIR_ADM .'Users.php">Użytkownicy</a>
              <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>';
      }

      ?>
    </ul>
      <a class="btn btn-outline-success" href="<? echo APP_DIR ?>logout.php" role="button">Wyloguj się</a>
  </div>
</nav>
