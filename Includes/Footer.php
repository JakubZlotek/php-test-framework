<footer class="pt-4 my-md-5 pt-md-5 border-top">
  <div class="row">
    <div class="col-12 col-md">
      <img class="mb-2" src="http://testy.jajuwa.pl/Img/logo.png" alt="" width="24" height="24">
      <small class="d-block mb-3 text-muted">&copy; 2019-2020</small>
      <small class="d-block mb-3 text-muted">Jest już nas:
      <?php
      include '../Config.php';
      $sth =  $conn->prepare('SELECT count(*) from users');
      $sth->execute();
      print_r($sth->fetchAll());
      mysqli_close($conn);
      ?>
    </small>
    </div>
    <div class="col-6 col-md">
      <h5>Features</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Cool stuff</a></li>
        <li><a class="text-muted" href="#">Random feature</a></li>
        <li><a class="text-muted" href="#">Team feature</a></li>
        <li><a class="text-muted" href="#">Stuff for developers</a></li>
        <li><a class="text-muted" href="#">Another one</a></li>
        <li><a class="text-muted" href="#">Last time</a></li>
      </ul>
    </div>
</footer>
