<?php
$title = "Nouveau Compte";
include('bdd.php');

$selected_level = "0";
if (isset($_GET['level'])) {
  $selected_level =  $_GET['level'];
}

function get_levels($bdd) {
    return $bdd->query("SELECT * FROM level");
}

$levels = get_levels($bdd);
?>

<html>

<head>
  <meta charset="utf-8">
</head>

<body>
  <form action="newaccount.php" method="post">
    <input type="hidden" name="id_membres" maxlength="32" /><br />
    Pseudo: <input type="text" name="pseudo" maxlength="32" /><br />
    Mot de passe: <input type="password" name="mdp" maxlength="16" /><br />
    <select name="id_level">
      <?php while($level = $levels->fetch()): ?>
      <option <?php if ($level['id_level'] == $selected_level): ?> selected<?php endif; ?> value="<?php echo $level['id_level'] ?>"><?php echo $level["statut_level"]; ?></option>
      <?php endwhile; ?>
    </select><br />
    <br />
    <input type="submit" value="Enregistrer" />
  </form>
  <?php if(isset($erreur)) {
      echo $erreur;
  }
  ?>
</body>

</html>
