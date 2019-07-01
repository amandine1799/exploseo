<?php
include('bdd.php');

$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
$level = $_POST['id_level'];

if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])) {
$reqacc = $bdd->prepare("SELECT pseudo FROM membres WHERE pseudo = ?");
          $reqacc->execute(array($pseudo));
          $accexist = $reqacc->rowCount();
          if($accexist == 0) {

  $req = $bdd->prepare("INSERT INTO membres (pseudo, mdp, id_level) VALUES(:pseudo, :mdp, :id_level)");
  $req->execute(array(
    'pseudo' => $pseudo,
    'mdp' =>  $mdp,
    'id_level' => $level));
    header("Location: connexion.php");
    exit();

  } else {
    $erreur = "Ce pseudo existe déjà";

  }

} else {
    $erreur = "Tout doit être complété";

}
    header('Location: inscription.php');
            exit();
?>
