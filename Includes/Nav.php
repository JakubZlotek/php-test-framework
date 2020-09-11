<nav class="navbar navbar-expand-lg navbar-dark bg-dark themestyle" >
  <img src="http://testy.jajuwa.pl/Img/logo.png" style = "height: 60px; width: 60px; margin-right: 20px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://testy.jajuwa.pl">Strona Główna</a>
      </li>

      <?php
      if ($_SESSION["isadmin"] === TRUE) {
          echo'<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-cog"></i>
              Administrator
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="http://testy.jajuwa.pl/Admin/Users.php"><i class="fas fa-user" style="margin-right: 5px;"></i>Użytkownicy</a>
              <a class="dropdown-item" href="#">Another action</a>
          </li>';
      }
      ?>
    </ul>
      <a class="btn btn-outline-success" href="http://testy.jajuwa.pl/logout.php" role="button">Wyloguj się</a>
  </div>
</nav>
