<?php
include('bdd.php');

$id_membres = $_POST['id_membres'];
$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);

$req = $bdd->prepare("INSERT INTO membres (id_membres, pseudo, mdp) VALUES(:id_membres, :pseudo, :mdp)");
$req->execute(array(
  'id_membres' => $id_membres,
  'pseudo' => $pseudo,
  'mdp' =>  $mdp));

    header('Location: connexion.php');
            exit();
?>
