<?php
include('bdd.php');
include('function.php');

$allcms = get_allcms($bdd);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <title><?php echo $title ?></title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <a class="navbar-brand" href=""><strong>BDD</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <?php while($cms = $allcms->fetch()): ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?id=<?php echo $cms["id_cms"];?>"><?php echo $cms["nom_cms"]; ?></a>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <form class="form-inline my-2 my-lg-0">
        <a class="btn btn-dark" href="connexion.php"><i class="fas fa-sign-in-alt"></i></a>
      </form>
    </nav>
