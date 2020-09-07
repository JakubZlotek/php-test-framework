<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="http://testy.jajuwa.pl/img/logo.png" style = "height: 60px; width: 60px; margin-right: 20px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://testy.jajuwa.pl/index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <?php
      if ($_SESSION["isadmin"] == 1) {
        include 'Navadmin.php';
      };

      ?>
    </ul>
      <a class="btn btn-outline-success" href="http://testy.jajuwa.pl/logout.php" role="button">Wyloguj się</a>
  </div>
</nav>
